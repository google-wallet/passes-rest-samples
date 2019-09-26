
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
import org.junit.Assert;
import org.junit.Test;

import java.util.UUID;

import com.google.api.services.walletobjects.model.*;
import com.google.api.client.json.GenericJson;

public class RestMethodsTest {
    @Test
    public void InsertOfferObjectAndClassTest() {
        Config config = Config.getInstance();
        Services.VerticalType verticalType = Services.VerticalType.OFFER;
        String classUid = String.format("%s_CLASS_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        String classId = String.format("%s.%s" , config.getIssuerId(), classUid);
        String objectUid = String.format("%s_OBJECT_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        String objectId = String.format("%s.%s", config.getIssuerId(), objectUid);
        GenericJson classResourcePayload = null;
        GenericJson objectResourcePayload = null;
        GenericJson classResponse = null;
        GenericJson objectResponse = null;
        RestMethods restMethods = RestMethods.getInstance();
        ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
        classResourcePayload = resourceDefinitions.makeOfferClassResource(classId);
        objectResourcePayload = resourceDefinitions.makeOfferObjectResource(classId, objectId);
        System.out.println("\nMaking REST call to insert class");
        classResponse = restMethods.insertOfferClass((OfferClass)classResourcePayload);
        objectResponse = restMethods.insertOfferObject((OfferObject)objectResourcePayload); 
        Assert.assertEquals(classResponse.get("code").toString(), "200");
        Assert.assertEquals(objectResponse.get("code").toString(), "200");
    }
    @Test
    public void InsertEventTicketObjectAndClassTest() {
        Config config = Config.getInstance();
        Services.VerticalType verticalType = Services.VerticalType.EVENTTICKET;
        String classUid = String.format("%s_CLASS_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        String classId = String.format("%s.%s" , config.getIssuerId(), classUid);
        String objectUid = String.format("%s_OBJECT_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        String objectId = String.format("%s.%s", config.getIssuerId(), objectUid);
        GenericJson classResourcePayload = null;
        GenericJson objectResourcePayload = null;
        GenericJson classResponse = null;
        GenericJson objectResponse = null;
        RestMethods restMethods = RestMethods.getInstance();
        ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
        classResourcePayload = resourceDefinitions.makeEventTicketClassResource(classId);
        objectResourcePayload = resourceDefinitions.makeEventTicketObjectResource(classId, objectId);
        System.out.println("\nMaking REST call to insert class");
        classResponse = restMethods.insertEventTicketClass((EventTicketClass)classResourcePayload);
        objectResponse = restMethods.insertEventTicketObject((EventTicketObject)objectResourcePayload); 
        Assert.assertEquals(classResponse.get("code").toString(), "200");
        Assert.assertEquals(objectResponse.get("code").toString(), "200");
    }    
    @Test
    public void InsertFlightObjectAndClassTest() {
        Config config = Config.getInstance();
        Services.VerticalType verticalType = Services.VerticalType.FLIGHT;
        String classUid = String.format("%s_CLASS_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        String classId = String.format("%s.%s" , config.getIssuerId(), classUid);
        String objectUid = String.format("%s_OBJECT_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        String objectId = String.format("%s.%s", config.getIssuerId(), objectUid);
        GenericJson classResourcePayload = null;
        GenericJson objectResourcePayload = null;
        GenericJson classResponse = null;
        GenericJson objectResponse = null;
        RestMethods restMethods = RestMethods.getInstance();
        ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
        classResourcePayload = resourceDefinitions.makeFlightClassResource(classId);
        objectResourcePayload = resourceDefinitions.makeFlightObjectResource(classId, objectId);
        System.out.println("\nMaking REST call to insert class");
        classResponse = restMethods.insertFlightClass((FlightClass)classResourcePayload);
        objectResponse = restMethods.insertFlightObject((FlightObject)objectResourcePayload); 
        Assert.assertEquals(classResponse.get("code").toString(), "200");
        Assert.assertEquals(objectResponse.get("code").toString(), "200");
    }
    @Test
    public void InsertGiftCardObjectAndClassTest() {
        Config config = Config.getInstance();
        Services.VerticalType verticalType = Services.VerticalType.GIFTCARD;
        String classUid = String.format("%s_CLASS_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        String classId = String.format("%s.%s" , config.getIssuerId(), classUid);
        String objectUid = String.format("%s_OBJECT_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        String objectId = String.format("%s.%s", config.getIssuerId(), objectUid);
        GenericJson classResourcePayload = null;
        GenericJson objectResourcePayload = null;
        GenericJson classResponse = null;
        GenericJson objectResponse = null;
        RestMethods restMethods = RestMethods.getInstance();
        ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
        classResourcePayload = resourceDefinitions.makeGiftCardClassResource(classId);
        objectResourcePayload = resourceDefinitions.makeGiftCardObjectResource(classId, objectId);
        System.out.println("\nMaking REST call to insert class");
        classResponse = restMethods.insertGiftCardClass((GiftCardClass)classResourcePayload);
        objectResponse = restMethods.insertGiftCardObject((GiftCardObject)objectResourcePayload); 
        Assert.assertEquals(classResponse.get("code").toString(), "200");
        Assert.assertEquals(objectResponse.get("code").toString(), "200");
    }
    @Test
    public void InsertLoyaltyObjectAndClassTest() {
        Config config = Config.getInstance();
        Services.VerticalType verticalType = Services.VerticalType.LOYALTY;
        String classUid = String.format("%s_CLASS_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        String classId = String.format("%s.%s" , config.getIssuerId(), classUid);
        String objectUid = String.format("%s_OBJECT_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        String objectId = String.format("%s.%s", config.getIssuerId(), objectUid);
        GenericJson classResourcePayload = null;
        GenericJson objectResourcePayload = null;
        GenericJson classResponse = null;
        GenericJson objectResponse = null;
        RestMethods restMethods = RestMethods.getInstance();
        ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
        classResourcePayload = resourceDefinitions.makeLoyaltyClassResource(classId);
        objectResourcePayload = resourceDefinitions.makeLoyaltyObjectResource(classId, objectId);
        System.out.println("\nMaking REST call to insert class");
        classResponse = restMethods.insertLoyaltyClass((LoyaltyClass)classResourcePayload);
        objectResponse = restMethods.insertLoyaltyObject((LoyaltyObject)objectResourcePayload); 
        Assert.assertEquals(classResponse.get("code").toString(), "200");
        Assert.assertEquals(objectResponse.get("code").toString(), "200");
    }
    @Test
    public void InsertTransitObjectAndClassTest() {
        Config config = Config.getInstance();
        Services.VerticalType verticalType = Services.VerticalType.TRANSIT;
        String classUid = String.format("%s_CLASS_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        String classId = String.format("%s.%s" , config.getIssuerId(), classUid);
        String objectUid = String.format("%s_OBJECT_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        String objectId = String.format("%s.%s", config.getIssuerId(), objectUid);
        GenericJson classResourcePayload = null;
        GenericJson objectResourcePayload = null;
        GenericJson classResponse = null;
        GenericJson objectResponse = null;
        RestMethods restMethods = RestMethods.getInstance();
        ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
        classResourcePayload = resourceDefinitions.makeTransitClassResource(classId);
        objectResourcePayload = resourceDefinitions.makeTransitObjectResource(classId, objectId);
        System.out.println("\nMaking REST call to insert class");
        classResponse = restMethods.insertTransitClass((TransitClass)classResourcePayload);
        objectResponse = restMethods.insertTransitObject((TransitObject)objectResourcePayload); 
        Assert.assertEquals(classResponse.get("code").toString(), "200");
        Assert.assertEquals(objectResponse.get("code").toString(), "200");
    }

  }
   