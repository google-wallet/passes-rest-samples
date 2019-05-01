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

import com.google.api.client.googleapis.auth.oauth2.GoogleCredential;
import com.google.api.client.googleapis.javanet.GoogleNetHttpTransport;
import com.google.api.client.googleapis.json.GoogleJsonResponseException;
import com.google.api.client.http.HttpTransport;
import com.google.api.client.json.GenericJson;
import com.google.api.client.json.JsonFactory;
import com.google.api.client.json.gson.GsonFactory;

import com.google.api.services.walletobjects.Walletobjects;
import com.google.api.services.walletobjects.model.*;

import java.io.FileInputStream;
import java.io.IOException;
import java.security.GeneralSecurityException;

public class RestMethods {
    private static HttpTransport httpTransport = null;
    private static RestMethods restMethods = new RestMethods();

    private RestMethods() {
        // Create an httpTransport which will be used for the REST call
        try {
            this.httpTransport = GoogleNetHttpTransport.newTrustedTransport();
        } catch (GeneralSecurityException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    public static RestMethods getInstance() {
        if (restMethods == null) {
            restMethods = new RestMethods();
        }
        return restMethods;
    }

    /*******************************
    *
    *  Preparing server-to-server authorized API call with OAuth 2.0
    *
    *  Use Google API client library to prepare credentials used to authorize a http client
    *  See https://developers.google.com/api-client-library/java/google-api-java-client/oauth2#service_accounts
    *
    *  @return GoogleCredential credentials - Service Account credential for OAuth 2.0 signed JWT grants.
    *
    *******************************/
    private GoogleCredential makeOauthCredential(){
        Config config = Config.getInstance();
        GoogleCredential credentials = null;
        // Create a JsonFactory to be used for the walletobjects client
        JsonFactory jsonFactory = new GsonFactory();

        // the variables are in config file
        try {
            credentials = GoogleCredential
                    .fromStream(new FileInputStream(config.getServiceAccountFile()), httpTransport, jsonFactory)
                    .createScoped(config.getScopes());
        } catch (Exception e) {
            e.printStackTrace();
        }

        return credentials;
    }


    /*******************************
     *
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerclass/insert
     *
     * @param OfferClass offerClass - represents offer class resource.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson insertOfferClass(OfferClass offerClass){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to insert the Offer class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/offerclass/insert
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.offerclass().insert(offerClass).execute();
            response.put("code",200);
            // System.out.println(response);
        } catch (GoogleJsonResponseException gException)  {
            System.out.println(">>>> [START] Google Server Error response:");
            System.out.println(gException.getDetails());
            System.out.println(">>>> [END] Google Server Error response\n");
            response = gException.getDetails();
        } catch (Exception e){
            e.printStackTrace();
        }

        return response;
    }

    /*******************************
     *
     *  Get defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerclass/get
     *
     * @param String classId - The unique identifier for a class.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson getOfferClass(String classId){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to get an Offer class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/offerclass/get
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.offerclass().get(classId).execute();
            response.put("code",200);
            // System.out.println(response);
        } catch (GoogleJsonResponseException gException)  {
            System.out.println(">>>> [START] Google Server Error response:");
            System.out.println(gException.getDetails());
            System.out.println(">>>> [END] Google Server Error response\n");
            response = gException.getDetails();
        } catch (Exception e){
            e.printStackTrace();
        }

        return response;
    }

    /*******************************
     *
     *  Insert defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerobject/insert
     *
     * @param OfferObject offerObject - represents offer class resource.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson insertOfferObject(OfferObject offerObject){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to insert an Offer object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/offerobject/insert
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.offerobject().insert(offerObject).execute();
            response.put("code",200);
            // System.out.println(response);
        } catch (GoogleJsonResponseException gException)  {
            System.out.println(">>>> [START] Google Server Error response:");
            System.out.println(gException.getDetails());
            System.out.println(">>>> [END] Google Server Error response\n");
            response = gException.getDetails();
        } catch (Exception e){
            e.printStackTrace();
        }

        return response;
    }

    /*******************************
     *
     *  Get defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerobject/get
     *
     * @param String objectId - The unique identifier for an object.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson getOfferObject(String objectId){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to get an Offer object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/offerobject/get
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.offerobject().get(objectId).execute();
            response.put("code",200);
            // System.out.println(response);
        } catch (GoogleJsonResponseException gException)  {
            System.out.println(">>>> [START] Google Server Error response:");
            System.out.println(gException.getDetails());
            System.out.println(">>>> [END] Google Server Error response\n");
            response = gException.getDetails();
        } catch (Exception e){
            e.printStackTrace();
        }

        return response;
    }
}
