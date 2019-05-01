<?php
/**
 * Copyright 2019 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *         http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once 'vendor/autoload.php'; // Google api client (load with composer) https://github.com/googleapis/google-api-php-client
/**
*
* 'Walletobjects.php'
* contains the Google_service_.* definitions.
* Is is the helper client library to implement REST definitions defined at:
* https://developers.google.com/pay/passes/reference/v1/
* Download newest at https://developers.google.com/pay/passes/support/libraries#libraries
*
**/
require_once 'Walletobjects.php';
require_once 'ResourceDefinitions.php';
require_once 'RestMethods.php';
require_once 'GpapJwt.php';

/*******************************
 *
 *  Quickstart only implements Offer vertical
 *
 *  See all the verticals: https://developers.google.com/pay/passes/guides/overview/basics/about-google-pay-api-for-passes
 *
 *******************************/
abstract class VerticalType {
    const OFFER = 1;
    // to be implemented
    const EVENTTICKET = 2;
    const FLIGHT = 3;         // also referred to as Boarding Passes
    const GIFTCARD = 4;
    const LOYALTY = 5;
}
/*******************************
 *
 *  These are services that you would expose to front end so they can generate save links or buttons.
 *
 *  Depending on your needs, you only need to implement 1 of the services.
 *
 *******************************/
class Services {
    private $EXISTS_MESSAGE = "No changes will be made when saved by link. " .
            "To update info, use update() or patch(). " .
            "For an example, see " .
            "https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/engage-through-google-pay#update-state\n";

    private $NOT_EXIST_MESSAGE = "Will be inserted when user saves by link/button for first time\n";

    public function __construct() {

    }

    /*******************************
    *
    *  Output to explain various status codes from a get API call
    *
    *  @param GenericJson getCallResponse - response from a get call
    *  @param String idType - identifier of type of get call.  "object" or "class"
    *  @param String id - unique identifier of Pass for given idType
    *  @param String checkClassId - optional. ClassId to check for if objectId exists, and idType == 'object'
    *  @return void
    *
     *******************************/
    private function handleGetCallStatusCode($getCallResponse, $idType, $id, $checkClassId) {

        if ($getCallResponse["code"] == 200) {  // Id resource exists for this issuer account
            printf("\n%sId: (%s) already exists. %s", $idType, $id, $this->EXISTS_MESSAGE);

            // for object get, do additional check
            if ($idType == "object") {
                // check if object's classId matches target classId
                $classIdOfObjectId = $getCallResponse["classReference"]["id"];
                if ($classIdOfObjectId != $checkClassId && $checkClassId != NULL) {
                    throw new Exception(sprintf(">>>> Exception:\nthe classId of inserted object is (%s). " .
                            "It does not match the target classId (%s). The saved object will not " .
                            "have the class properties you expect.", $classIdOfObjectId, $checkClassId));
                }
            }
        } else if ($getCallResponse["code"] == 404) {  // Id resource does not exist for this issuer account
            printf("\n%sId: (%s) does not exist. %s", $idType, $id, $this->NOT_EXIST_MESSAGE);
        } else {
            throw new Exception(sprintf(">>>> Exception:\nIssue with getting %s.\n%s", $idType, var_export($getCallResponse,true)));
        }

        return;
    }

    /*******************************
     *
     *  Output to explain various status codes from a insert API call
     *
     *  @param GenericJson getCallResponse - response from a get call
     *  @param String idType - identifier of type of get call.  "object" or "class"
     *  @param String id - unique identifier of Pass for given idType
     *  @param String checkClassId - optional. ClassId to check for if objectId exists, and idType == 'object'
     *  @param VerticalType verticalType - optional. VerticalType to fetch ClassId of existing objectId.
     *  @return void
     *
     *******************************/
    private function handleInsertCallStatusCode($insertCallResponse, $idType, $id, $checkClassId, $verticalType) {
        if ($insertCallResponse["code"] == 200) {
            printf("\n%s id (%s) insertion success!\n" ,$idType, $id);
        }else if ($insertCallResponse["code"] == 409) {  // Id resource exists for this issuer account
            printf("\n%sId: (%s) already exists. %s", $idType, $id, $this->EXISTS_MESSAGE);

            // for object insert, do additional check
            if ($idType == "object") {
                $restMethods = RestMethods::getInstance();
                $objectResponse = NULL;
                if ($verticalType == VerticalType::OFFER) {
                    // get object definition
                    $objectResponse = $restMethods->getOfferObject($id);
                } else {
                    throw new Exception(sprintf(">>>> Exception:\nresource definition for vertical: (%s) not implemented yet. Check README.md > Implementing other verticals", $verticalType));
                }
                // check if object's classId matches target classId
                $classIdOfObjectId = $objectResponse["classReference"]["id"];
                if ($classIdOfObjectId != $checkClassId && $checkClassId != NULL) {
                    throw new Exception(sprintf(">>>> Exception:\nthe classId of inserted object is (%s). " .
                            "It does not match the target classId (%s). The saved object will not " .
                            "have the class properties you expect.", $classIdOfObjectId, $checkClassId));
                }
            }
        } else {
            throw new Exception(sprintf(">>>> Exception:\n%s insert issue.\n%s", $idType, var_export($insertCallResponse,true)));
        }

        return;
    }
    /*******************************
     *
     *  Generates a signed "fat" JWT.
     *  No REST calls made.
     *
     *  Use fat JWT in JS web button.
     *  Fat JWT is too long to be used in Android intents.
     *  Possibly might break in redirects.
     *
     *  See https://developers.google.com/pay/passes/reference/v1/
     *
     *  @param VerticalType $verticalType - define type of pass being generated
     *  @param String $classId - The unique identifier for an class.
     *  @param String $objectId - The unique identifier for an object.
     *  @return String $signedJwt - a signed JWT
     *
     *******************************/
    public function makeFatJwt($verticalType, $classId, $objectId) {

        $signedJwt = NULL;
        $classResourcePayload = NULL;
        $objectResourcePayload = NULL;
        $classResponse = NULL;
        $objectResponse = NULL;
        $restMethods = RestMethods::getInstance();

        try {
            if ($verticalType == VerticalType::OFFER) {
                // get class definition
                $classResourcePayload = ResourceDefinitions::makeOfferClassResource($classId);

                // get object definition
                $objectResourcePayload = ResourceDefinitions::makeOfferObjectResource($classId, $objectId);

                // see if Ids exist in Google backend
                //// for a Fat JWT, the first time a user hits the save button, the class and object are inserted
                $classResponse = $restMethods->getOfferClass($classId);
                $objectResponse = $restMethods->getOfferObject($objectId);
            } else {
                throw new Exception(sprintf("resource definition for vertical: (%s) not implemented yet. Check README.md > Implementing other verticals", $verticalType));
            }

            // check response status. Check https://developers.google.com/pay/passes/reference/v1/statuscodes
            // check class get response. Will print out if class exists or not. Throws error if class resource is malformed.
            $this->handleGetCallStatusCode($classResponse, "class", $classId, NULL);

            // check object get response. Will print out if object exists or not. Throws error if object resource is malformed, or if existing $objectId's $classId does not match the expected $classId
            $this->handleGetCallStatusCode($objectResponse, "object", $objectId, $classId);

            // put into JSON Web Token (JWT) format for Google Pay API for Passes
            $googlePassJwt = new GpapJwt();
            if ($verticalType == VerticalType::OFFER) {
                // need to add both class and object resource definitions into JWT because no REST calls made to pre-insert
                $googlePassJwt->addOfferClass($classResourcePayload);
                $googlePassJwt->addOfferObject($objectResourcePayload);
            } else {
                throw new Exception(sprintf("JWT format for %s is not implemented yet. For valid JWT formats, check %s"
                        , $verticalType, "https://developers.google.com/pay/passes/reference/s2w-reference//google-pay-api-for-passes-jwt"));
            }

            // sign JSON to make signed JWT
            $signedJwt = $googlePassJwt->generateSignedJwt();

        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

        // return "fat" JWT. Try putting it into JS web button
        // note button needs to be rendered in local web server who's domain matches the ORIGINS
        // defined in the JWT. See https://developers.google.com/pay/passes/reference/s2w-reference
        return $signedJwt;

    }


    /*******************************
     *
     *  Generates a signed "object" JWT.
     *  1 REST call is made to pre-insert class.
     *
     *  This JWT can be used in JS web button.
     *  If this JWT only contains 1 object, usually isn't too long; can be used in Android intents/redirects.
     *
     *  See https://developers.google.com/pay/passes/reference/v1/
     *
     *  @param VerticalType $verticalType- define type of pass being generated
     *  @param String $classId - The unique identifier for an class.
     *  @param String $objectId - The unique identifier for an object.
     *  @return String $signedJwt - a signed JWT
     *
     *******************************/
    public function makeObjectJwt($verticalType, $classId, $objectId) {
        $signedJwt = NULL;
        $classResourcePayload = NULL;
        $objectResourcePayload = NULL;
        $classResponse = NULL;
        $objectResponse = NULL;
        $restMethods = RestMethods::getInstance();

        try {
            if ($verticalType == VerticalType::OFFER) {
                // get class definition
                $classResourcePayload = ResourceDefinitions::makeOfferClassResource($classId);

                // get object definition
                $objectResourcePayload = ResourceDefinitions::makeOfferObjectResource($classId, $objectId);

                echo("\nMaking REST call to insert class");
                // make authorized REST call to explicitly insert class into Google server.
                // if this is successful, you can check/update class definitions in Merchant Center GUI:
                // https://pay.google.com/gp/m/issuer/list
                $classResponse = $restMethods->insertOfferClass($classResourcePayload);

                // check if object ID exists
                $objectResponse = $restMethods->getOfferObject($objectId); // if it is a new $objectId, expected status is 409

            } else {
                throw new Exception(sprintf("resource definition for vertical: (%s) not implemented yet. Check README.md > Implementing other verticals", $verticalType));
            }

            // continue based on response status.Check https://developers.google.com/pay/passes/reference/v1/statuscodes
            // check class insert response. Will print out if class insert succeeds or not. Throws error if class resource is malformed.
            $this->handleInsertCallStatusCode($classResponse, "class", $classId, NULL, NULL);

            // check object get response. Will print out if object exists or not. Throws error if object resource is malformed, or if existing objectId's classId does not match the expected classId
            $this->handleGetCallStatusCode($objectResponse, "object", $objectId, $classId);

            // put into JSON Web Token (JWT) format for Google Pay API for Passes
            $googlePassJwt = new GpapJwt();
            if ($verticalType == VerticalType::OFFER) {
                // only need to add object resource definition in JWT because class was pre -inserted
                $googlePassJwt->addOfferObject($objectResourcePayload);
            } else {
                throw new Exception(sprintf("JWT format for %s is not implemented yet. For valid JWT formats, check %s"
                        , $verticalType, "https://developers.google.com/pay/passes/reference/s2w-reference//google-pay-api-for-passes-jwt"));
            }

            // sign JSON to make signed JWT
            $signedJwt = $googlePassJwt->generateSignedJwt();

        } catch(Exception $e) {
            var_dump($e->getMessage());
        }

        // return "object" JWT.Try putting it into save link.
        // See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email
        return $signedJwt;
    }

    /*******************************
    *
    *  Generates a signed "skinny" JWT.
    *  2 REST calls are made:
    *    x1 pre-insert one classes
    *    x1 pre-insert one object which uses previously inserted class
    *
    *  This JWT can be used in JS web button.
    *  This is the shortest type of JWT; recommended for Android intents/redirects.
    *
    *  See https://developers.google.com/pay/passes/reference/v1/
    *
    *  @param VerticalType $verticalType - define type of pass being generated
    *  @param String $classId - The unique identifier for an class.
    *  @param String $objectId - The unique identifier for an object.
    *  @return String $signedJwt - a signed JWT
    *
     *******************************/

    public function makeSkinnyJwt($verticalType, $classId, $objectId) {

        $signedJwt = NULL;
        $classResourcePayload = NULL;
        $objectResourcePayload = NULL;
        $classResponse = NULL;
        $objectResponse = NULL;
        $restMethods = RestMethods::getInstance();

        try {
            if ($verticalType == VerticalType::OFFER) {
                // get class definition
                $classResourcePayload = ResourceDefinitions::makeOfferClassResource($classId);

                printf("\nMaking REST call to insert class: (%s)", $classId);
                // make authorized REST call to explicitly insert class into Google server.
                // if this is successful, you can check/update class definitions in Merchant Center GUI:
                // https://pay.google.com/gp/m/issuer/list
                $classResponse = $restMethods->insertOfferClass($classResourcePayload);

                // get object definition
                $objectResourcePayload = ResourceDefinitions::makeOfferObjectResource($classId, $objectId);

                echo("\nMaking REST call to insert object");
                // make authorized REST call to explicitly insert object into Google server.
                $objectResponse = $restMethods->insertOfferObject($objectResourcePayload);
            } else {
                throw new Exception(sprintf("resource definition for vertical: (%s) not implemented yet. Check README.md > Implementing other verticals", $verticalType));
            }

            // continue based on insert response status. Check https://developers.google.com/pay/passes/reference/v1/statuscodes
            // check class insert response. Will print out if class insert succeeds or not. Throws error if class resource is malformed.
            $this->handleInsertCallStatusCode($classResponse, "class", $classId, NULL, NULL);

            // check object insert response. Will print out if object insert succeeds or not. Throws error if object resource is malformed, or if existing objectId's classId does not match the expected classId
            $this->handleInsertCallStatusCode($objectResponse, "object", $objectId, $classId, $verticalType);

            // put into JSON Web Token (JWT) format for Google Pay API for Passes
            $googlePassJwt = new GpapJwt();
            if ($verticalType == VerticalType::OFFER) {
                // only need to add $objectId in JWT because class and object definitions were pre-inserted via REST call
                $googlePassJwt->addOfferObject(array("id" => $objectId));
            } else {
                throw new Exception(sprintf("JWT format for %s is not implemented yet. For valid JWT formats, check %s"
                        , $verticalType, "https://developers.google.com/pay/passes/reference/s2w-reference//google-pay-api-for-passes-jwt"));
            }

            // sign JSON to make signed JWT
            $signedJwt = $googlePassJwt->generateSignedJwt();

        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

        // return "skinny" JWT. Try putting it into save link.
        // See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email
        return $signedJwt;
    }

}
?>