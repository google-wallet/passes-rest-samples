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
            httpTransport = GoogleNetHttpTransport.newTrustedTransport();
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
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/eventticketclass/insert
     *
     * @param EventTicketClass eventticketClass - represents eventticket class resource.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson insertEventTicketClass(EventTicketClass eventticketClass){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to insert the EventTicket class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/eventticketclass/insert
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.eventticketclass().insert(eventticketClass).execute();
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
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/giftcardclass/insert
     *
     * @param GiftCardClass giftcardClass - represents giftcard class resource.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson insertGiftCardClass(GiftCardClass giftcardClass){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to insert the GiftCard class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/giftcardclass/insert
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.giftcardclass().insert(giftcardClass).execute();
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
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/loyaltyclass/insert
     *
     * @param LoyaltyClass loyaltyClass - represents loyalty class resource.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson insertLoyaltyClass(LoyaltyClass loyaltyClass){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to insert the Loyalty class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyclass/insert
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.loyaltyclass().insert(loyaltyClass).execute();
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
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/transitclass/insert
     *
     * @param TransitClass transitClass - represents transit class resource.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson insertTransitClass(TransitClass transitClass){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to insert the Transit class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/transitclass/insert
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.transitclass().insert(transitClass).execute();
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
     *  Insert defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/flightclass/insert
     *
     * @param FlightClass flightClass - represents flight class resource.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson insertFlightClass(FlightClass flightClass){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to insert the Flight class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/flightclass/insert
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.flightclass().insert(flightClass).execute();
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
     *  Get defined class with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/eventticketclass/get
     *
     * @param String classId - The unique identifier for a class.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson getEventTicketClass(String classId){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to get an EventTicket class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/eventticketclass/get
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.eventticketclass().get(classId).execute();
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
     * See https://developers.google.com/pay/passes/reference/v1/flightclass/get
     *
     * @param String classId - The unique identifier for a class.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson getFlightClass(String classId){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to get an Flight class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/flightclass/get
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.flightclass().get(classId).execute();
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
     * See https://developers.google.com/pay/passes/reference/v1/transitclass/get
     *
     * @param String classId - The unique identifier for a class.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson getTransitClass(String classId){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to get an Transit class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/transitclass/get
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.transitclass().get(classId).execute();
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
     * See https://developers.google.com/pay/passes/reference/v1/loyaltyclass/get
     *
     * @param String classId - The unique identifier for a class.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson getLoyaltyClass(String classId){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to get an Loyalty class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyclass/get
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.loyaltyclass().get(classId).execute();
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
     * See https://developers.google.com/pay/passes/reference/v1/giftcardclass/get
     *
     * @param String classId - The unique identifier for a class.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson getGiftCardClass(String classId){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to get an GiftCard class
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyclass/get
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.giftcardclass().get(classId).execute();
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
     *  Insert defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/eventticketobject/insert
     *
     * @param EventTicketObject eventticketObject - represents eventticket class resource.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson insertEventTicketObject(EventTicketObject eventticketObject){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to insert an EventTicket object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/eventticketobject/insert
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.eventticketobject().insert(eventticketObject).execute();
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
     * See https://developers.google.com/pay/passes/reference/v1/flightobject/insert
     *
     * @param FlightObject flightObject - represents flight class resource.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson insertFlightObject(FlightObject flightObject){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to insert an Flight object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/flightobject/insert
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.flightobject().insert(flightObject).execute();
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
     * See https://developers.google.com/pay/passes/reference/v1/giftcardobject/insert
     *
     * @param GiftCardObject giftcardObject - represents giftcard class resource.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson insertGiftCardObject(GiftCardObject giftcardObject){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to insert an GiftCard object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/giftcardobject/insert
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.giftcardobject().insert(giftcardObject).execute();
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
     * See https://developers.google.com/pay/passes/reference/v1/loyaltyobject/insert
     *
     * @param LoyaltyObject loyaltyObject - represents loyalty class resource.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson insertLoyaltyObject(LoyaltyObject loyaltyObject){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to insert an Loyalty object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyobject/insert
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.loyaltyobject().insert(loyaltyObject).execute();
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
     * See https://developers.google.com/pay/passes/reference/v1/transitobject/insert
     *
     * @param TransitObject transitObject - represents transit class resource.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson insertTransitObject(TransitObject transitObject){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to insert an Transit object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/transitobject/insert
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.transitobject().insert(transitObject).execute();
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
    /*******************************
     *
     *  Get defined object with Google Pay API for Passes REST API
     *
     * See https://developers.google.com/pay/passes/reference/v1/eventticketobject/get
     *
     * @param String objectId - The unique identifier for an object.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson getEventTicketObject(String objectId){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to get an Event Ticket object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/eventticketobject/get
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.eventticketobject().get(objectId).execute();
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
     * See https://developers.google.com/pay/passes/reference/v1/flightobject/get
     *
     * @param String objectId - The unique identifier for an object.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson getFlightObject(String objectId){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to get a fight object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/flightobject/get
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.flightobject().get(objectId).execute();
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
     * See https://developers.google.com/pay/passes/reference/v1/giftcardobject/get
     *
     * @param String objectId - The unique identifier for an object.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson getGiftCardObject(String objectId){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to get a gift card object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/giftcardobject/get
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.giftcardobject().get(objectId).execute();
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
     * See https://developers.google.com/pay/passes/reference/v1/loyaltyobject/get
     *
     * @param String objectId - The unique identifier for an object.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson getLoyaltyObject(String objectId){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to get a loyalty object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyobject/get
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.loyaltyobject().get(objectId).execute();
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
     * See https://developers.google.com/pay/passes/reference/v1/transitobject/get
     *
     * @param String objectId - The unique identifier for an object.
     * @return GenericJson response - response from REST call
     *
     *******************************/
    public GenericJson getTransitObject(String objectId){
        GenericJson response = null;
        GoogleCredential credentials = makeOauthCredential();
        Config config = Config.getInstance();

        // Use the Google Pay API for Passes Java client lib to get a transit object
        //// check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
        //// check reference API to see the underlying REST call:
        //// https://developers.google.com/pay/passes/reference/v1/transitobject/get
        //// The methods to call these from client library are in Class com.google.api.services.walletobjects.Walletobjects
        JsonFactory jsonFactory = new GsonFactory();
        Walletobjects client = new Walletobjects.Builder(httpTransport, jsonFactory, credentials)
                .setApplicationName(config.getApplicationName())
                .build();

        try {
            response = client.transitobject().get(objectId).execute();
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
