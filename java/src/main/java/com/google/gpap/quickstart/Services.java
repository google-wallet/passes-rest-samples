/**
 * Copyright 2019 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

import java.util.Objects;
import com.google.api.services.walletobjects.model.*;
import com.google.api.client.json.GenericJson;
import com.google.gson.Gson;
import com.google.gson.JsonObject;

/*******************************
 *
 *  These are services that you would expose to front end so they can generate save links or buttons.
 *
 *  Depending on your needs, you only need to implement 1 of the services.
 *
 *******************************/
public class Services {
    private String EXISTS_MESSAGE = "No changes will be made when saved by link. " +
            "To update info, use update() or patch(). " +
            "For an example, see " +
            "https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/engage-through-google-pay#update-state\n";

    private String NOT_EXIST_MESSAGE = "Will be inserted when user saves by link/button for first time\n";

    public Services() {

    }


    /*******************************
     *
     *  Quickstart only implements Offer vertical
     *
     *  See all the verticals: https://developers.google.com/pay/passes/guides/overview/basics/about-google-pay-api-for-passes
     *
     *******************************/
    public enum VerticalType {
        OFFER
        // to be implemented
        , EVENTTICKET
        , FLIGHT     // also referred to as Boarding Passes
        , GIFTCARD
        , LOYALTY
    }

    /*******************************
    *
    *  Output to explain various status codes from a get API call
    *
    *  @param GenericJson getCallResponse - response from a get call
    *  @param String idType - identifier of type of get call.  "object" or "class"
    *  @param String id - unique identifier of Pass for given idType
    *  @param String checkClassId - optional. ClassId to check for if objectId exists, and idType.equals('object')
    *  @return void
    *
     *******************************/
    private void handleGetCallStatusCode(GenericJson getCallResponse, String idType, String id, String checkClassId) throws Exception{

        if ((int) getCallResponse.get("code") == 200) {  // Id resource exists for this issuer account
            System.out.println(String.format("%sId: (%s) already exists. %s", idType, id, EXISTS_MESSAGE));

            // for object get, do additional check
            if (idType.equals("object")) {
                // check if object's classId matches target classId
                String classIdOfObjectId = (String) getCallResponse.get("classId");
                if (!Objects.equals(classIdOfObjectId, checkClassId) && checkClassId != null) {
                    throw new Exception(String.format("the classId of inserted object is (%s). " +
                            "It does not match the target classId (%s). The saved object will not " +
                            "have the class properties you expect.", classIdOfObjectId, checkClassId));
                }
            }
        } else if ((int) getCallResponse.get("code") == 404) {  // Id resource does not exist for this issuer account
            System.out.println(String.format("%sId: (%s) does not exist. %s", idType, id, NOT_EXIST_MESSAGE));
        } else {
            throw new Exception(String.format("Issue with getting %s.", idType) + getCallResponse.toPrettyString());
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
     *  @param String checkClassId - optional. ClassId to check for if objectId exists, and idType.equals('object')
     *  @param VerticalType verticalType - optional. VerticalType to fetch ClassId of existing objectId.
     *  @return void
     *
     *******************************/
    private void handleInsertCallStatusCode(GenericJson insertCallResponse, String idType, String id, String checkClassId, VerticalType verticalType) throws Exception{
        if ((int)insertCallResponse.get("code") == 200) {
            System.out.println(String.format("%s id (%s) insertion success!\n" ,idType, id));
        }else if ((int)insertCallResponse.get("code") == 409) {  // Id resource exists for this issuer account
            System.out.println(String.format("%sId: (%s) already exists. %s", idType, id, EXISTS_MESSAGE));

            // for object insert, do additional check
            if (idType.equals("object")) {
                RestMethods restMethods = RestMethods.getInstance();
                GenericJson objectResponse = null;
                if (verticalType == VerticalType.OFFER) {
                    // get object definition
                    objectResponse = restMethods.getOfferObject(id);
                } else {
                    throw new Exception(String.format("resource definition for vertical: (%s) not implemented yet. Check README.md > Implementing other verticals", verticalType));
                }
                // check if object's classId matches target classId
                String classIdOfObjectId = (String) objectResponse.get("classId");
                if (!Objects.equals(classIdOfObjectId, checkClassId) && checkClassId != null) {
                    throw new Exception(String.format("the classId of inserted object is (%s). " +
                            "It does not match the target classId (%s). The saved object will not " +
                            "have the class properties you expect.", classIdOfObjectId, checkClassId));
                }
            }
        } else {
            throw new Exception(String.format("%s insert issue.", idType) + insertCallResponse.toPrettyString());
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
     *  @param VerticalType verticalType - define type of pass being generated
     *  @param String classId - The unique identifier for an class.
     *  @param String objectId - The unique identifier for an object.
     *  @return String signedJwt - a signed JWT
     *
     *******************************/
    public String makeFatJwt(VerticalType verticalType, String classId, String objectId) {

        String signedJwt = null;
        ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
        RestMethods restMethods = RestMethods.getInstance();
        GenericJson classResourcePayload = null;
        GenericJson objectResourcePayload = null;
        GenericJson classResponse = null;
        GenericJson objectResponse = null;

        try {
            if (verticalType == VerticalType.OFFER) {
                // get class definition
                classResourcePayload = resourceDefinitions.makeOfferClassResource(classId);

                // get object definition
                objectResourcePayload = resourceDefinitions.makeOfferObjectResource(classId, objectId);

                // see if Ids exist in Google backend
                //// for a Fat JWT, the first time a user hits the save button, the class and object are inserted
                classResponse = restMethods.getOfferClass(classId);
                objectResponse = restMethods.getOfferObject(objectId);
            } else {
                throw new Exception(String.format("resource definition for vertical: (%s) not implemented yet. Check README.md > Implementing other verticals", verticalType));
            }

            // check response status. Check https://developers.google.com/pay/passes/reference/v1/statuscodes
            // check class get response. Will print out if class exists or not. Throws error if class resource is malformed.
            handleGetCallStatusCode(classResponse, "class", classId, null);

            // check object get response. Will print out if object exists or not. Throws error if object resource is malformed, or if existing objectId's classId does not match the expected classId
            handleGetCallStatusCode(objectResponse, "object", objectId, classId);

            // put into JSON Web Token (JWT) format for Google Pay API for Passes
            Jwt googlePassJwt = new Jwt();
            if (verticalType == VerticalType.OFFER) {

                Gson gson = new Gson(); // Use gson to change OfferClass/OfferObject instances into JSON representation
                // need to add both class and object resource definitions into JWT because no REST calls made to pre-insert
                googlePassJwt.addOfferClass(gson.toJsonTree(classResourcePayload));
                googlePassJwt.addOfferObject(gson.toJsonTree(objectResourcePayload));
            } else {
                throw new Exception(String.format("JWT format for %s is not implemented yet. For valid JWT formats, check %s"
                        , verticalType, "https://developers.google.com/pay/passes/reference/s2w-reference//google-pay-api-for-passes-jwt"));
            }

            // sign JSON to make signed JWT
            signedJwt = googlePassJwt.generateSignedJwt();

        } catch (Exception e) {
            e.printStackTrace();
        }

        // return "fat" JWT. Try putting it into JS web button
        // note button needs to be rendered in local web server who's domain matches the ORIGINS
        // defined in the JWT. See https://developers.google.com/pay/passes/reference/s2w-reference
        return signedJwt;

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
     *  @param VerticalType verticalType - define type of pass being generated
     *  @param String classId - The unique identifier for an class.
     *  @param String objectId - The unique identifier for an object.
     *  @return String signedJwt - a signed JWT
     *
     *******************************/
    public String makeObjectJwt(VerticalType verticalType, String classId, String objectId) {
        String signedJwt = null;
        ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
        RestMethods restMethods = RestMethods.getInstance();
        GenericJson classResourcePayload = null;
        GenericJson objectResourcePayload = null;
        GenericJson classResponse = null;
        GenericJson objectResponse = null;

        try {
            if (verticalType == VerticalType.OFFER) {
                // get class definition
                classResourcePayload = resourceDefinitions.makeOfferClassResource(classId);

                // get object definition
                objectResourcePayload = resourceDefinitions.makeOfferObjectResource(classId, objectId);

                System.out.println("\nMaking REST call to insert class");
                // make authorized REST call to explicitly insert class into Google server.
                // if this is successful, you can check/update class definitions in Merchant Center GUI:
                // https://pay.google.com/gp/m/issuer/list
                classResponse = restMethods.insertOfferClass((OfferClass)classResourcePayload);

                // check if object ID exists
                objectResponse = restMethods.getOfferObject(objectId); // if it is a new objectId, expected status is 409

            } else {
                throw new Exception(String.format("resource definition for vertical: (%s) not implemented yet. Check README.md > Implementing other verticals", verticalType));
            }

            // continue based on response status.Check https://developers.google.com/pay/passes/reference/v1/statuscodes
            // check class insert response. Will print out if class insert succeeds or not. Throws error if class resource is malformed.
            handleInsertCallStatusCode(classResponse, "class", classId, null, null);

            // check object get response. Will print out if object exists or not. Throws error if object resource is malformed, or if existing objectId's classId does not match the expected classId
            handleGetCallStatusCode(objectResponse, "object", objectId, classId);

            // put into JSON Web Token (JWT) format for Google Pay API for Passes
            Jwt googlePassJwt = new Jwt();
            if (verticalType == VerticalType.OFFER) {

                Gson gson = new Gson(); // Use gson to change OfferClass/OfferObject instances into JSON representation
                // only need to add object resource definition in JWT because class was pre -inserted
                googlePassJwt.addOfferObject(gson.toJsonTree(objectResourcePayload));
            } else {
                throw new Exception(String.format("JWT format for %s is not implemented yet. For valid JWT formats, check %s"
                        , verticalType, "https://developers.google.com/pay/passes/reference/s2w-reference//google-pay-api-for-passes-jwt"));
            }

            // sign JSON to make signed JWT
            signedJwt = googlePassJwt.generateSignedJwt();

        } catch(Exception e) {
            e.printStackTrace();
        }

        // return "object" JWT.Try putting it into save link.
        // See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email
        return signedJwt;
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
    *  @param VerticalType verticalType - define type of pass being generated
    *  @param String classId - The unique identifier for an class.
    *  @param String objectId - The unique identifier for an object.
    *  @return String signedJwt - a signed JWT
    *
     *******************************/

    public String makeSkinnyJwt(VerticalType verticalType, String classId, String objectId) {

        String signedJwt = null;
        ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
        RestMethods restMethods = RestMethods.getInstance();
        GenericJson classResourcePayload = null;
        GenericJson objectResourcePayload = null;
        GenericJson classResponse = null;
        GenericJson objectResponse = null;

        try {
            if (verticalType == VerticalType.OFFER) {
                // get class definition
                classResourcePayload = resourceDefinitions.makeOfferClassResource(classId);

                // get object definition
                objectResourcePayload = resourceDefinitions.makeOfferObjectResource(classId, objectId);

                System.out.println(String.format("\nMaking REST call to insert class: (%s)", classId));
                // make authorized REST call to explicitly insert class into Google server.
                // if this is successful, you can check/update class definitions in Merchant Center GUI:
                // https://pay.google.com/gp/m/issuer/list
                classResponse = restMethods.insertOfferClass((OfferClass) classResourcePayload);

                System.out.println("\nMaking REST call to insert object");
                // make authorized REST call to explicitly insert object into Google server.
                objectResponse = restMethods.insertOfferObject((OfferObject) objectResourcePayload);
            } else {
                throw new Exception(String.format("resource definition for vertical: (%s) not implemented yet. Check README.md > Implementing other verticals", verticalType));
            }

            // continue based on insert response status. Check https://developers.google.com/pay/passes/reference/v1/statuscodes
            // check class insert response. Will print out if class insert succeeds or not. Throws error if class resource is malformed.
            handleInsertCallStatusCode(classResponse, "class", classId, null, null);

            // check object insert response. Will print out if object insert succeeds or not. Throws error if object resource is malformed, or if existing objectId's classId does not match the expected classId
            handleInsertCallStatusCode(objectResponse, "object", objectId, classId, verticalType);

            // put into JSON Web Token (JWT) format for Google Pay API for Passes
            Jwt googlePassJwt = new Jwt();
            if (verticalType == VerticalType.OFFER) {

                // only need to add objectId in JWT because class and object definitions were pre-inserted via REST call
                JsonObject jwtPayload = new JsonObject();
                jwtPayload.addProperty("id", objectId);
                googlePassJwt.addOfferObject(jwtPayload);
            } else {
                throw new Exception(String.format("JWT format for %s is not implemented yet. For valid JWT formats, check %s"
                        , verticalType, "https://developers.google.com/pay/passes/reference/s2w-reference//google-pay-api-for-passes-jwt"));
            }

            // sign JSON to make signed JWT
            signedJwt = googlePassJwt.generateSignedJwt();

        } catch (Exception e) {
            e.printStackTrace();
        }

        // return "skinny" JWT. Try putting it into save link.
        // See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email
        return signedJwt;
    }
}