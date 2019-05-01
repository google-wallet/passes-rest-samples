<?php
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



class RestMethods {
    private static $restMethods;
    private static $client;

    private function __construct() {
        // Create an Google_Client which facillitates REST call
        $this->client = new Google_Client();

        // do OAuth2.0 via service account file.
        // See https://developers.google.com/api-client-library/php/auth/service-accounts#authorizingrequests
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . SERVICE_ACCOUNT_FILE); // for Google_Client() initialization for server-to-server
        $this->client->useApplicationDefaultCredentials();
        // Set application name.
        $this->client->setApplicationName(APPLICATION_NAME);
        // Set Api scopes.
        $this->client->setScopes(array(SCOPES));
    }

    public static function getInstance() {
        if (is_null(static::$restMethods)) {
            static::$restMethods = new RestMethods();
        }
        return static::$restMethods;
    }


    /*******************************
     *
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerclass/insert
     *
     * @param Google_Service_Walletobjects_OfferClass $offerClass - represents offer class resource.
     * @return Google_Service_Walletobjects_OfferClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function insertOfferClass($offerClass){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert the Offer class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/offerclass/insert
        //// The methods to call these from client library are in Walletobjects.php
        $service = new Google_Service_Walletobjects($this->client);

        try {
            $response = $service->offerclass->insert($offerClass);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Get defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerclass/get
     *
     * @param String $classId - The unique identifier for a class.
     * @return Google_Service_Walletobjects_OfferClass $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getOfferClass($classId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an Offer class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/offerclass/get
        //// The methods to call these from client library are in Walletobjects.php
        $service = new Google_Service_Walletobjects($this->client);

        try {
            $response = $service->offerclass->get($classId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Insert defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerobject/insert
     *
     * @param Google_Service_Walletobjects_OfferObject $offerObject - represents offer class resource.
     * @return Google_Service_Walletobjects_OfferObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function insertOfferObject($offerObject){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to insert an Offer object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/offerobject/insert
        //// The methods to call these from client library are in Walletobjects.php
        $service = new Google_Service_Walletobjects($this->client);

        try {
            $response = $service->offerobject->insert($offerObject);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    /*******************************
     *
     *  Get defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerobject/get
     *
     * @param String $objectId - The unique identifier for an object.
     * @return Google_Service_Walletobjects_OfferObject $response - response from REST call. If error, returns Google_Service_Exception
     *
     *******************************/
    public function getOfferObject($objectId){
        $response = NULL;

        // Use the Google Pay API for Passes Java client lib to get an Offer object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/offerobject/get
        //// The methods to call these from client library are in Walletobjects.php
        $service = new Google_Service_Walletobjects($this->client);

        try {
            $response = $service->offerobject->get($objectId);
            $response["code"] = 200;
        } catch (Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
}

?>
