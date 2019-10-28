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
using csharp.Data;

namespace csharp
{
    /*******************************
    *
    *  These are services that you would expose to front end so they can generate save links or buttons.
    *
    *  Depending on your needs, you only need to implement 1 of the services.
    *
    *******************************/
    public class Services
    {
        public Services()
        {

        }
        /*******************************
        *
        *
        *  See all the verticals: https://developers.google.com/pay/passes/guides/overview/basics/about-google-pay-api-for-passes
        *
        *******************************/
        public enum VerticalType
        {
            OFFER
            , EVENTTICKET
            , FLIGHT     // also referred to as Boarding Passes
            , GIFTCARD
            , LOYALTY
            , TRANSIT
        }
        /// <summary>
        /// Generates a signed "fat" JWT.
        /// No REST calls made.
        /// Use fat JWT in JS web button.
        /// Fat JWT is too long to be used in Android intents.
        /// Possibly might break in redirects.
        /// </summary>
        /// <param name="verticalType"> pass type to created</param>
        /// <param name="classId">the unique identifier for the class</param>
        /// <param name="objectId">the unique identifier for the object</param>
        /// <returns></returns>
        public string makeFatJwt(VerticalType verticalType, string classId, string objectId)
        {
            ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
            RestMethods restMethods = RestMethods.getInstance();
            // create JWT to put objects and class into JSON Web Token (JWT) format for Google Pay API for Passes
            Jwt googlePassJwt = new Jwt();
            // get class definition, object definition and see if Ids exist. for a fat JWT, first time a user hits the save button, the class and object are inserted            
            try
            {
                switch (verticalType)
                {
                    case VerticalType.OFFER:
                        OfferClass offerClass = resourceDefinitions.makeOfferClassResource(classId);
                        OfferObject offerObject = resourceDefinitions.makeOfferObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to get class and object to see if they exist.");
                        OfferClass classResponse = restMethods.getOfferClass(classId);
                        OfferObject objectResponse = restMethods.getOfferObject(objectId);
                        // check responses
                        if (!(classResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} already exists.");
                        }
                        if (!(objectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} already exists.");
                        }
                        if (!(classResponse is null) && objectResponse.ClassId != offerObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({objectResponse.ClassId}). " +
                            $"It does not match the target classId ({offerObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add both class and object resource definitions into JWT because no REST calls made to pre-insert
                        googlePassJwt.addOfferClass(offerClass);
                        googlePassJwt.addOfferObject(offerObject);
                        break;
                    case VerticalType.LOYALTY:
                        LoyaltyClass loyaltyClass = resourceDefinitions.makeLoyaltyClassResource(classId);
                        LoyaltyObject loyaltyObject = resourceDefinitions.makeLoyaltyObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to get class and object to see if they exist.");
                        LoyaltyClass loyaltyClassResponse = restMethods.getLoyaltyClass(classId);
                        LoyaltyObject loyaltyObjectResponse = restMethods.getLoyaltyObject(objectId);
                        // check responses
                        if (!(loyaltyClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} already exists.");
                        }
                        if (!(loyaltyObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} already exists.");
                        }
                        if (!(loyaltyClassResponse is null) && loyaltyObjectResponse.ClassId != loyaltyObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({loyaltyObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({loyaltyObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add both class and object resource definitions into JWT because no REST calls made to pre-insert
                        googlePassJwt.addLoyaltyClass(loyaltyClass);
                        googlePassJwt.addLoyaltyObject(loyaltyObject);
                        break;
                    case VerticalType.EVENTTICKET:
                        EventTicketClass eventTicketClass = resourceDefinitions.makeEventTicketClassResource(classId);
                        EventTicketObject eventTicketObject = resourceDefinitions.makeEventTicketObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to get class and object to see if they exist.");
                        EventTicketClass eventTicketClassResponse = restMethods.getEventTicketClass(classId);
                        EventTicketObject eventTicketObjectResponse = restMethods.getEventTicketObject(objectId);
                        // check responses
                        if (!(eventTicketClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} already exists.");
                        }
                        if (!(eventTicketObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} already exists.");
                        }
                        if (!(eventTicketClassResponse is null) && eventTicketObjectResponse.ClassId != eventTicketObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({eventTicketObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({eventTicketObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add both class and object resource definitions into JWT because no REST calls made to pre-insert
                        googlePassJwt.addEventTicketClass(eventTicketClass);
                        googlePassJwt.addEventTicketObject(eventTicketObject);
                        break;
                    case VerticalType.FLIGHT:
                        FlightClass flightClass = resourceDefinitions.makeFlightClassResource(classId);
                        FlightObject flightObject = resourceDefinitions.makeFlightObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to get class and object to see if they exist.");
                        FlightClass flightClassResponse = restMethods.getFlightClass(classId);
                        FlightObject flightObjectResponse = restMethods.getFlightObject(objectId);
                        // check responses
                        if (!(flightClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} already exists.");
                        }
                        if (!(flightObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} already exists.");
                        }
                        if (!(flightClassResponse is null) && flightObjectResponse.ClassId != flightObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({flightObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({flightObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add both class and object resource definitions into JWT because no REST calls made to pre-insert
                        googlePassJwt.addFlightClass(flightClass);
                        googlePassJwt.addFlightObject(flightObject);
                        break;
                    case VerticalType.GIFTCARD:
                        GiftCardClass giftCardClass = resourceDefinitions.makeGiftCardClassResource(classId);
                        GiftCardObject giftCardObject = resourceDefinitions.makeGiftCardObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to get class and object to see if they exist.");
                        GiftCardClass giftCardClassResponse = restMethods.getGiftCardClass(classId);
                        GiftCardObject giftCardObjectResponse = restMethods.getGiftCardObject(objectId);
                        // check responses
                        if (!(giftCardClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} already exists.");
                        }
                        if (!(giftCardObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} already exists.");
                        }
                        if (!(giftCardClassResponse is null) && giftCardObjectResponse.ClassId != giftCardObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({giftCardObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({giftCardObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add both class and object resource definitions into JWT because no REST calls made to pre-insert
                        googlePassJwt.addGiftCardClass(giftCardClass);
                        googlePassJwt.addGiftCardObject(giftCardObject);
                        break;
                    case VerticalType.TRANSIT:
                        TransitClass transitClass = resourceDefinitions.makeTransitClassResource(classId);
                        TransitObject transitObject = resourceDefinitions.makeTransitObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to get class and object to see if they exist.");
                        TransitClass transitClassResponse = restMethods.getTransitClass(classId);
                        TransitObject transitObjectResponse = restMethods.getTransitObject(objectId);
                        // check responses
                        if (!(transitClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} already exists.");
                        }
                        if (!(transitObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} already exists.");
                        }
                        if (!(transitClassResponse is null) && transitObjectResponse.ClassId != transitObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({transitObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({transitObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add both class and object resource definitions into JWT because no REST calls made to pre-insert
                        googlePassJwt.addTransitClass(transitClass);
                        googlePassJwt.addTransitObject(transitObject);
                        break;
                }
                // return "fat" JWT. Try putting it into JS web button
                // note button needs to be rendered in local web server who's domain matches the ORIGINS
                // defined in the JWT. See https://developers.google.com/pay/passes/reference/s2w-reference
                return googlePassJwt.generateSignedJwt();
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.Message);
                return null;
            }
        }
        /// <summary>
        /// Generates a signed "object" JWT.
        /// 1 REST call is made to pre-insert class.
        /// If this JWT only contains 1 object, usually isn't too long; can be used in Android intents/redirects.
        /// </summary>
        /// <param name="verticalType"> pass type to created</param>
        /// <param name="classId">the unique identifier for the class</param>
        /// <param name="objectId">the unique identifier for the object</param>
        /// <returns></returns>
        public string makeObjectJwt(VerticalType verticalType, string classId, string objectId)
        {
            ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
            RestMethods restMethods = RestMethods.getInstance();
            // create JWT to put objects and class into JSON Web Token (JWT) format for Google Pay API for Passes
            Jwt googlePassJwt = new Jwt();
            // get class, object definitions, insert class (check in Merchant center GUI: https://pay.google.com/gp/m/issuer/list)
            try
            {
                switch (verticalType)
                {
                    case VerticalType.OFFER:
                        OfferClass offerClass = resourceDefinitions.makeOfferClassResource(classId);
                        OfferObject offerObject = resourceDefinitions.makeOfferObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to insert class");
                        OfferClass classResponse = restMethods.insertOfferClass(offerClass);
                        System.Console.WriteLine("\nMaking REST call to get object to see if it exists.");
                        OfferObject objectResponse = restMethods.getOfferObject(objectId);
                        // check responses
                        if (!(classResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} inserted.");
                        }
                        else
                        {
                            System.Console.WriteLine($"classId: {classId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(objectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} already exists.");
                        }
                        if (!(objectResponse is null) && objectResponse.ClassId != offerObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({objectResponse.ClassId}). " +
                            $"It does not match the target classId ({offerObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add only object because class was pre-inserted
                        googlePassJwt.addOfferObject(offerObject);
                        break;
                    case VerticalType.LOYALTY:
                        LoyaltyClass loyaltyClass = resourceDefinitions.makeLoyaltyClassResource(classId);
                        LoyaltyObject loyaltyObject = resourceDefinitions.makeLoyaltyObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to insert class");                        
                        LoyaltyClass loyaltyClassResponse = restMethods.insertLoyaltyClass(loyaltyClass);
                        System.Console.WriteLine("\nMaking REST call to get object to see if it exists.");                        
                        LoyaltyObject loyaltyObjectResponse = restMethods.getLoyaltyObject(objectId);
                        // check responses
                        if (!(loyaltyClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} inserted.");
                        }
                        else
                        {
                            System.Console.WriteLine($"classId: {classId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(loyaltyObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} already exists.");
                        }
                        if (!(loyaltyObjectResponse is null) && loyaltyObjectResponse.ClassId != loyaltyObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({loyaltyObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({loyaltyObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add only object because class was pre-inserted
                        googlePassJwt.addLoyaltyObject(loyaltyObject);
                        break;
                    case VerticalType.EVENTTICKET:
                        EventTicketClass eventTicketClass = resourceDefinitions.makeEventTicketClassResource(classId);
                        EventTicketObject eventTicketObject = resourceDefinitions.makeEventTicketObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to insert class");     
                        EventTicketClass eventTicketClassResponse = restMethods.insertEventTicketClass(eventTicketClass);
                        System.Console.WriteLine("\nMaking REST call to get object to see if it exists.");                          
                        EventTicketObject eventTicketObjectResponse = restMethods.getEventTicketObject(objectId);
                        // check responses
                        if (!(eventTicketClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} inserted.");
                        }
                        else
                        {
                            System.Console.WriteLine($"classId: {classId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(eventTicketObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} already exists.");
                        }
                        if (!(eventTicketObjectResponse is null) && eventTicketObjectResponse.ClassId != eventTicketObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({eventTicketObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({eventTicketObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add only object because class was pre-inserted
                        googlePassJwt.addEventTicketObject(eventTicketObject);
                        break;
                    case VerticalType.FLIGHT:
                        FlightClass flightClass = resourceDefinitions.makeFlightClassResource(classId);
                        FlightObject flightObject = resourceDefinitions.makeFlightObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to insert class");     
                        FlightClass flightClassResponse = restMethods.insertFlightClass(flightClass);
                        System.Console.WriteLine("\nMaking REST call to get object to see if it exists."); 
                        FlightObject flightObjectResponse = restMethods.getFlightObject(objectId);
                        // check responses
                        if (!(flightClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} inserted.");
                        }
                        else
                        {
                            System.Console.WriteLine($"classId: {classId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(flightObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} already exists.");
                        }
                        if (!(flightObjectResponse is null) && flightObjectResponse.ClassId != flightObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({flightObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({flightObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add only object because class was pre-inserted
                        googlePassJwt.addFlightObject(flightObject);
                        break;
                    case VerticalType.GIFTCARD:
                        GiftCardClass giftCardClass = resourceDefinitions.makeGiftCardClassResource(classId);
                        GiftCardObject giftCardObject = resourceDefinitions.makeGiftCardObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to insert class");     
                        GiftCardClass giftCardClassResponse = restMethods.insertGiftCardClass(giftCardClass);
                        System.Console.WriteLine("\nMaking REST call to get object to see if it exists."); 
                        GiftCardObject giftCardObjectResponse = restMethods.getGiftCardObject(objectId);
                        // check responses
                        if (!(giftCardClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} inserted.");
                        }
                        else
                        {
                            System.Console.WriteLine($"classId: {classId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(giftCardObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} already exists.");
                        }
                        if (!(giftCardObjectResponse is null) && giftCardObjectResponse.ClassId != giftCardObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({giftCardObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({giftCardObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add only object because class was pre-inserted
                        googlePassJwt.addGiftCardObject(giftCardObject);
                        break;
                    case VerticalType.TRANSIT:
                        TransitClass transitClass = resourceDefinitions.makeTransitClassResource(classId);
                        TransitObject transitObject = resourceDefinitions.makeTransitObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to insert class");     
                        TransitClass transitClassResponse = restMethods.insertTransitClass(transitClass);
                        System.Console.WriteLine("\nMaking REST call to get object to see if it exists."); 
                        TransitObject transitObjectResponse = restMethods.getTransitObject(objectId);
                        // check responses
                        if (!(transitClassResponse is null))
                        {
                           System.Console.WriteLine($"classId: {classId} inserted.");
                        }
                        else
                        {
                            System.Console.WriteLine($"classId: {classId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(transitObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} already exists.");
                        }
                        if (!(transitObjectResponse is null) && transitObjectResponse.ClassId != transitObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({transitObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({transitObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add only object because class was pre-inserted
                        googlePassJwt.addTransitObject(transitObject);
                        break;
                }
                // return "object" JWT.Try putting it into save link.
                // See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email
                return googlePassJwt.generateSignedJwt();
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.Message);
                return null;
            }
        }
        /// <summary>
        /// Generates a signed "skinny" JWT.
        /// 2 REST calls are made to pre-insert class and object
        /// This JWT can be used in JS web button.
        /// This is the shortest type of JWT; recommended for Android intents/redirects.
        /// </summary>
        /// <param name="verticalType"> pass type to created</param>
        /// <param name="classId">the unique identifier for the class</param>
        /// <param name="objectId">the unique identifier for the object</param>
        /// <returns></returns>
        public string makeSkinnyJwt(VerticalType verticalType, string classId, string objectId)
        {
            ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
            RestMethods restMethods = RestMethods.getInstance();
            // create JWT to put objects and class into JSON Web Token (JWT) format for Google Pay API for Passes
            Jwt googlePassJwt = new Jwt();
            // get class, object definitions, insert class (check in Merchant center GUI: https://pay.google.com/gp/m/issuer/list)
            try
            {
                switch (verticalType)
                {
                    case VerticalType.OFFER:
                        OfferClass offerClass = resourceDefinitions.makeOfferClassResource(classId);
                        OfferObject offerObject = resourceDefinitions.makeOfferObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to insert class and object");
                        OfferClass classResponse = restMethods.insertOfferClass(offerClass);
                        OfferObject objectResponse = restMethods.insertOfferObject(offerObject);
                        // check response
                        if (!(classResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} inserted.");
                        }
                        else
                        {
                            System.Console.WriteLine($"classId: {classId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(objectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} inserted.");
                        }
                        else {
                            System.Console.WriteLine($"objectId: {objectId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(objectResponse is null) && objectResponse.ClassId != offerObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({objectResponse.ClassId}). " +
                            $"It does not match the target classId ({offerObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add only object id because class and object were pre inserted.
                        offerObject = new OfferObject(){Id=offerObject.Id};
                        googlePassJwt.addOfferObject(offerObject);
                        break;
                    case VerticalType.LOYALTY:
                        LoyaltyClass loyaltyClass = resourceDefinitions.makeLoyaltyClassResource(classId);
                        LoyaltyObject loyaltyObject = resourceDefinitions.makeLoyaltyObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to insert class and object");
                        LoyaltyClass loyaltyClassResponse = restMethods.insertLoyaltyClass(loyaltyClass);
                        LoyaltyObject loyaltyObjectResponse = restMethods.insertLoyaltyObject(loyaltyObject);
                        // check response
                        // check class get response
                        if (!(loyaltyClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} inserted.");
                        }
                        else
                        {
                            System.Console.WriteLine($"classId: {classId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(loyaltyObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} inserted.");
                        }
                        else {
                            System.Console.WriteLine($"objectId: {objectId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(loyaltyObjectResponse is null) && loyaltyObjectResponse.ClassId != loyaltyObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({loyaltyObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({loyaltyObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add only object id because class and object were pre inserted.
                        loyaltyObject = new LoyaltyObject(){Id=loyaltyObject.Id};
                        googlePassJwt.addLoyaltyObject(loyaltyObject);
                        break;
                    case VerticalType.EVENTTICKET:
                        EventTicketClass eventTicketClass = resourceDefinitions.makeEventTicketClassResource(classId);
                        EventTicketObject eventTicketObject = resourceDefinitions.makeEventTicketObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to insert class and object");
                        EventTicketClass eventTicketClassResponse = restMethods.insertEventTicketClass(eventTicketClass);
                        EventTicketObject eventTicketObjectResponse = restMethods.insertEventTicketObject(eventTicketObject);
                        // check response
                        // check class get response
                        if (!(eventTicketClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} inserted.");
                        }
                        else
                        {
                            System.Console.WriteLine($"classId: {classId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(eventTicketObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} inserted.");
                        }
                        else {
                            System.Console.WriteLine($"objectId: {objectId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(eventTicketObjectResponse is null) && eventTicketObjectResponse.ClassId != eventTicketObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({eventTicketObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({eventTicketObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add only object id because class and object were pre inserted.
                        eventTicketObject = new EventTicketObject(){Id=eventTicketObject.Id};
                        googlePassJwt.addEventTicketObject(eventTicketObject);
                        break;
                    case VerticalType.FLIGHT:
                        FlightClass flightClass = resourceDefinitions.makeFlightClassResource(classId);
                        FlightObject flightObject = resourceDefinitions.makeFlightObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to insert class and object");
                        FlightClass flightClassResponse = restMethods.insertFlightClass(flightClass);
                        FlightObject flightObjectResponse = restMethods.insertFlightObject(flightObject);
                        // check response
                        // check class get response
                        if (!(flightClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} inserted.");
                        }
                        else
                        {
                            System.Console.WriteLine($"classId: {classId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(flightObjectResponse is null))
                        {
                           System.Console.WriteLine($"objectId: {objectId} inserted.");
                        }
                        else {
                            System.Console.WriteLine($"objectId: {objectId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(flightObjectResponse is null) && flightObjectResponse.ClassId != flightObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({flightObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({flightObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add only object id because class and object were pre inserted.
                        flightObject = new FlightObject(){Id=flightObject.Id};
                        googlePassJwt.addFlightObject(flightObject);
                        break;
                    case VerticalType.GIFTCARD:
                        GiftCardClass giftCardClass = resourceDefinitions.makeGiftCardClassResource(classId);
                        GiftCardObject giftCardObject = resourceDefinitions.makeGiftCardObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to insert class and object");
                        GiftCardClass giftCardClassResponse = restMethods.insertGiftCardClass(giftCardClass);
                        GiftCardObject giftCardObjectResponse = restMethods.insertGiftCardObject(giftCardObject);
                        // check responses
                        if (!(giftCardClassResponse is null))
                        {
                            System.Console.WriteLine($"classId: {classId} inserted.");
                        }
                        else
                        {
                            System.Console.WriteLine($"classId: {classId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(giftCardObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} inserted.");
                        }
                        else {
                            System.Console.WriteLine($"objectId: {objectId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(giftCardObjectResponse is null) && giftCardObjectResponse.ClassId != giftCardObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({giftCardObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({giftCardObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add only object id because class and object were pre inserted.
                        giftCardObject = new GiftCardObject(){Id=giftCardObject.Id};
                        googlePassJwt.addGiftCardObject(giftCardObject);
                        break;
                    case VerticalType.TRANSIT:
                        TransitClass transitClass = resourceDefinitions.makeTransitClassResource(classId);
                        TransitObject transitObject = resourceDefinitions.makeTransitObjectResource(objectId, classId);
                        System.Console.WriteLine("\nMaking REST call to insert class and object");
                        TransitClass transitClassResponse = restMethods.insertTransitClass(transitClass);
                        TransitObject transitObjectResponse = restMethods.insertTransitObject(transitObject);
                        // check responses
                        if (!(transitClassResponse is null))
                        {
                           System.Console.WriteLine($"classId: {classId} inserted.");
                        }
                        else
                        {
                            System.Console.WriteLine($"classId: {classId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(transitObjectResponse is null))
                        {
                            System.Console.WriteLine($"objectId: {objectId} inserted.");
                        }
                        else {
                            System.Console.WriteLine($"objectId: {objectId} insertion failed. See above Server Response for more information.");
                        }
                        if (!(transitObjectResponse is null) && transitObjectResponse.ClassId != transitObject.ClassId)
                        {
                            System.Console.WriteLine($"the classId of inserted object is ({transitObjectResponse.ClassId}). " +
                            $"It does not match the target classId ({transitObject.ClassId}). The saved object will not " +
                            "have the class properties you expect.");
                        }
                        // need to add only object id because class and object were pre inserted.
                        transitObject = new TransitObject(){Id=transitObject.Id};
                        googlePassJwt.addTransitObject(transitObject);
                        break;
                }
                // return "skinny" JWT. Try putting it into save link.
                // See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email
                return googlePassJwt.generateSignedJwt();
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.Message);
                return null;
            }
        }
    }
}