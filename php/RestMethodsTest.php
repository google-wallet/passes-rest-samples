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
use PHPUnit\Framework\TestCase;
require_once 'Config.php';
require_once 'Walletobjects.php';
require_once 'ResourceDefinitions.php';
require_once 'RestMethods.php';
require_once 'GpapJwt.php';

class RestMethodsTest extends TestCase
{
    public function testInsertOfferClassAndObjects()
    {
        $restMethods = RestMethods::getInstance();
        $vertical = "OFFER";
        $classUid = $vertical."_CLASS_".uniqid('', true);
        $classId = sprintf("%s.%s" , ISSUER_ID, $classUid);
        $objectUid= $vertical."_OBJECT_".uniqid('', true);
        $objectId = sprintf("%s.%s", ISSUER_ID, $objectUid);
        $classResourcePayload = NULL;
        $objectResourcePayload = NULL;
        $classResourcePayload = ResourceDefinitions::makeOfferClassResource($classId);
        $objectResourcePayload = ResourceDefinitions::makeOfferObjectResource($classId, $objectId);
        $classResponse = $restMethods->insertOfferClass($classResourcePayload);
        $objectResponse = $restMethods->insertOfferObject($objectResourcePayload);
        $this->assertEquals($classResponse["code"],200);
        $this->assertEquals($objectResponse["code"],200);
    }
    public function testInsertEventTicketClassAndObjects()
    {
        $restMethods = RestMethods::getInstance();
        $vertical = "EVENTTICKET";
        $classUid = $vertical."_CLASS_".uniqid('', true);
        $classId = sprintf("%s.%s" , ISSUER_ID, $classUid);
        $objectUid= $vertical."_OBJECT_".uniqid('', true);
        $objectId = sprintf("%s.%s", ISSUER_ID, $objectUid);
        $classResourcePayload = NULL;
        $objectResourcePayload = NULL;
        $classResourcePayload = ResourceDefinitions::makeEventTicketClassResource($classId);
        $objectResourcePayload = ResourceDefinitions::makeEventTicketObjectResource($classId, $objectId);
        $classResponse = $restMethods->insertEventTicketClass($classResourcePayload);
        $objectResponse = $restMethods->insertEventTicketObject($objectResourcePayload);
        $this->assertEquals($classResponse["code"],200);
        $this->assertEquals($objectResponse["code"],200);
    }
    public function testInsertFlightClassAndObjects()
    {
        $restMethods = RestMethods::getInstance();
        $vertical = "FLIGHT";
        $classUid = $vertical."_CLASS_".uniqid('', true);
        $classId = sprintf("%s.%s" , ISSUER_ID, $classUid);
        $objectUid= $vertical."_OBJECT_".uniqid('', true);
        $objectId = sprintf("%s.%s", ISSUER_ID, $objectUid);
        $classResourcePayload = NULL;
        $objectResourcePayload = NULL;
        $classResourcePayload = ResourceDefinitions::makeFlightClassResource($classId);
        $objectResourcePayload = ResourceDefinitions::makeFlightObjectResource($classId, $objectId);
        $classResponse = $restMethods->insertFlightClass($classResourcePayload);
        $objectResponse = $restMethods->insertFlightObject($objectResourcePayload);
        $this->assertEquals($classResponse["code"],200);
        $this->assertEquals($objectResponse["code"],200);
    }
    public function testInsertGiftCardClassAndObjects()
    {
        $restMethods = RestMethods::getInstance();
        $vertical = "GIFTCARD";
        $classUid = $vertical."_CLASS_".uniqid('', true);
        $classId = sprintf("%s.%s" , ISSUER_ID, $classUid);
        $objectUid= $vertical."_OBJECT_".uniqid('', true);
        $objectId = sprintf("%s.%s", ISSUER_ID, $objectUid);
        $classResourcePayload = NULL;
        $objectResourcePayload = NULL;
        $classResourcePayload = ResourceDefinitions::makeGiftCardClassResource($classId);
        $objectResourcePayload = ResourceDefinitions::makeGiftCardObjectResource($classId, $objectId);
        $classResponse = $restMethods->insertGiftCardClass($classResourcePayload);
        $objectResponse = $restMethods->insertGiftCardObject($objectResourcePayload);
        $this->assertEquals($classResponse["code"],200);
        $this->assertEquals($objectResponse["code"],200);
    }
       public function testInsertLoyaltyClassAndObjects()
    {
        $restMethods = RestMethods::getInstance();
        $vertical = "LOYALTY";
        $classUid = $vertical."_CLASS_".uniqid('', true);
        $classId = sprintf("%s.%s" , ISSUER_ID, $classUid);
        $objectUid= $vertical."_OBJECT_".uniqid('', true);
        $objectId = sprintf("%s.%s", ISSUER_ID, $objectUid);
        $classResourcePayload = NULL;
        $objectResourcePayload = NULL;
        $classResourcePayload = ResourceDefinitions::makeLoyaltyClassResource($classId);
        $objectResourcePayload = ResourceDefinitions::makeLoyaltyObjectResource($classId, $objectId);
        $classResponse = $restMethods->insertLoyaltyClass($classResourcePayload);
        $objectResponse = $restMethods->insertLoyaltyObject($objectResourcePayload);
        $this->assertEquals($classResponse["code"],200);
        $this->assertEquals($objectResponse["code"],200);
    }
    public function testInsertTransitClassAndObjects()
    {
        $restMethods = RestMethods::getInstance();
        $vertical = "TRANSIT";
        $classUid = $vertical."_CLASS_".uniqid('', true);
        $classId = sprintf("%s.%s" , ISSUER_ID, $classUid);
        $objectUid= $vertical."_OBJECT_".uniqid('', true);
        $objectId = sprintf("%s.%s", ISSUER_ID, $objectUid);
        $classResourcePayload = NULL;
        $objectResourcePayload = NULL;
        $classResourcePayload = ResourceDefinitions::makeTransitClassResource($classId);
        $objectResourcePayload = ResourceDefinitions::makeTransitObjectResource($classId, $objectId);
        $classResponse = $restMethods->insertTransitClass($classResourcePayload);
        $objectResponse = $restMethods->insertTransitObject($objectResourcePayload);
        $this->assertEquals($classResponse["code"],200);
        $this->assertEquals($objectResponse["code"],200);
    }
}
?>