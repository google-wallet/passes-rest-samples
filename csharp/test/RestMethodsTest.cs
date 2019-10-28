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
using System;
using Xunit;
using csharp;
using static csharp.Services;
using csharp.Data;

namespace test
{
    public class RestMethodsTest
    {
        [Fact]
        public void TestInsertOfferClassAndObject()
        {
            RestMethods restMethods = RestMethods.getInstance();
            ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
            VerticalType verticalType = Services.VerticalType.OFFER;
            Config config = Config.getInstance();
            string UUID = Guid.NewGuid().ToString();
            string classUid = $"{verticalType.ToString()}_CLASS_{UUID}";
            string classId = $"{config.getIssuerId()}.{classUid}";
            string UUIDobj = Guid.NewGuid().ToString();
            string objectUid = $"{verticalType.ToString()}_OBJECT_{UUIDobj}";
            string objectId = $"{config.getIssuerId()}.{objectUid}";
            OfferClass classResponse = restMethods.insertOfferClass(resourceDefinitions.makeOfferClassResource(classId));
            OfferObject objectResponse = restMethods.insertOfferObject(resourceDefinitions.makeOfferObjectResource(objectId, classId));
            Assert.NotNull(classResponse);
            Assert.NotNull(objectResponse);
        }
        [Fact]
        public void TestInsertLoyaltyClassAndObject()
        {
            RestMethods restMethods = RestMethods.getInstance();
            ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
            VerticalType verticalType = Services.VerticalType.LOYALTY;
            Config config = Config.getInstance();
            string UUID = Guid.NewGuid().ToString();
            string classUid = $"{verticalType.ToString()}_CLASS_{UUID}";
            string classId = $"{config.getIssuerId()}.{classUid}";
            string UUIDobj = Guid.NewGuid().ToString();
            string objectUid = $"{verticalType.ToString()}_OBJECT_{UUIDobj}";
            string objectId = $"{config.getIssuerId()}.{objectUid}";
            LoyaltyClass classResponse = restMethods.insertLoyaltyClass(resourceDefinitions.makeLoyaltyClassResource(classId));
            LoyaltyObject objectResponse = restMethods.insertLoyaltyObject(resourceDefinitions.makeLoyaltyObjectResource(objectId, classId));
            Assert.NotNull(classResponse);
            Assert.NotNull(objectResponse);
        }   
        [Fact]
        public void TestInsertFlightClassAndObject()
        {
            RestMethods restMethods = RestMethods.getInstance();
            ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
            VerticalType verticalType = Services.VerticalType.FLIGHT;
            Config config = Config.getInstance();
            string UUID = Guid.NewGuid().ToString();
            string classUid = $"{verticalType.ToString()}_CLASS_{UUID}";
            string classId = $"{config.getIssuerId()}.{classUid}";
            string UUIDobj = Guid.NewGuid().ToString();
            string objectUid = $"{verticalType.ToString()}_OBJECT_{UUIDobj}";
            string objectId = $"{config.getIssuerId()}.{objectUid}";
            FlightClass classResponse = restMethods.insertFlightClass(resourceDefinitions.makeFlightClassResource(classId));
            FlightObject objectResponse = restMethods.insertFlightObject(resourceDefinitions.makeFlightObjectResource(objectId, classId));
            Assert.NotNull(classResponse);
            Assert.NotNull(objectResponse);
        }  
        [Fact]
        public void TestInsertTransitClassAndObject()
        {
            RestMethods restMethods = RestMethods.getInstance();
            ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
            VerticalType verticalType = Services.VerticalType.TRANSIT;
            Config config = Config.getInstance();
            string UUID = Guid.NewGuid().ToString();
            string classUid = $"{verticalType.ToString()}_CLASS_{UUID}";
            string classId = $"{config.getIssuerId()}.{classUid}";
            string UUIDobj = Guid.NewGuid().ToString();
            string objectUid = $"{verticalType.ToString()}_OBJECT_{UUIDobj}";
            string objectId = $"{config.getIssuerId()}.{objectUid}";
            TransitClass classResponse = restMethods.insertTransitClass(resourceDefinitions.makeTransitClassResource(classId));
            TransitObject objectResponse = restMethods.insertTransitObject(resourceDefinitions.makeTransitObjectResource(objectId, classId));
            Assert.NotNull(classResponse);
            Assert.NotNull(objectResponse);
        } 
        [Fact]
        public void TestInsertGiftCardClassAndObject()
        {
            RestMethods restMethods = RestMethods.getInstance();
            ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
            VerticalType verticalType = Services.VerticalType.GIFTCARD;
            Config config = Config.getInstance();
            string UUID = Guid.NewGuid().ToString();
            string classUid = $"{verticalType.ToString()}_CLASS_{UUID}";
            string classId = $"{config.getIssuerId()}.{classUid}";
            string UUIDobj = Guid.NewGuid().ToString();
            string objectUid = $"{verticalType.ToString()}_OBJECT_{UUIDobj}";
            string objectId = $"{config.getIssuerId()}.{objectUid}";
            GiftCardClass classResponse = restMethods.insertGiftCardClass(resourceDefinitions.makeGiftCardClassResource(classId));
            GiftCardObject objectResponse = restMethods.insertGiftCardObject(resourceDefinitions.makeGiftCardObjectResource(objectId, classId));
            Assert.NotNull(classResponse);
            Assert.NotNull(objectResponse);
        }             
        [Fact]
        public void TestInsertEventTicketClassAndObject()
        {
            RestMethods restMethods = RestMethods.getInstance();
            ResourceDefinitions resourceDefinitions = ResourceDefinitions.getInstance();
            VerticalType verticalType = Services.VerticalType.EVENTTICKET;
            Config config = Config.getInstance();
            string UUID = Guid.NewGuid().ToString();
            string classUid = $"{verticalType.ToString()}_CLASS_{UUID}";
            string classId = $"{config.getIssuerId()}.{classUid}";
            string UUIDobj = Guid.NewGuid().ToString();
            string objectUid = $"{verticalType.ToString()}_OBJECT_{UUIDobj}";
            string objectId = $"{config.getIssuerId()}.{objectUid}";
            EventTicketClass classResponse = restMethods.insertEventTicketClass(resourceDefinitions.makeEventTicketClassResource(classId));
            EventTicketObject objectResponse = restMethods.insertEventTicketObject(resourceDefinitions.makeEventTicketObjectResource(objectId, classId));
            Assert.NotNull(classResponse);
            Assert.NotNull(objectResponse);
        }                             
    }
}
