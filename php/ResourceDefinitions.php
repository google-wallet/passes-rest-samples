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

/**
*
* require_once 'Walletobjects.php'
* contains the Google_service_.* definitions.
* Is is the helper client library to implement REST definitions defined at:
* https://developers.google.com/pay/passes/reference/v1/
* Download newest at https://developers.google.com/pay/passes/support/libraries#libraries
*
**/

class ResourceDefinitions {
	/******************************
     *
     *  Define a Class
     *
     *  See https://developers.google.com/pay/passes/reference/v1/offerclass
     *
     * @param String $classId - The unique identifier for a class
     * @return Google_Service_Walletobjects_OfferClass $payload - object representing OfferClass resource
     *
     *******************************/
	public static function makeOfferClassResource($classId) {
	    // Define the resource representation of the Class
	    // values should be from your DB/services; here we hardcode information
	    // below defines an offer class. For more properties, check:
	    //// https://developers.google.com/pay/passes/reference/v1/offerclass/insert
	    //// https://developers.google.com/pay/passes/guides/pass-verticals/offers/design

	    // There is a client lib to help make the data structure. Newest client is on devsite:
	    //// https://developers.google.com/pay/passes/support/libraries#libraries
		$titleImageUri = new Google_Service_Walletobjects_Uri();
		$titleImageUri->setUri("http://farm4.staticflickr.com/3723/11177041115_6e6a3b6f49_o.jpg");
		$titleImage = new Google_Service_Walletobjects_Image();
		$titleImage->setSourceUri($titleImageUri);

	    $payload = new Google_Service_Walletobjects_OfferClass();
        $payload->setId($classId);
        $payload->setIssuerName("Baconrista Coffee");
        $payload->setProvider("Baconrista Deals");
        $payload->setRedemptionChannel("online");
        $payload->setReviewStatus("underReview");
        $payload->setTitle("20% off one bacon fat latte");
        // optional.  Check design and reference api to decide what's desirable
        $payload->setTitleImage($titleImage);

	    return $payload;
	}

	/******************************
     *
     *  Define an Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerobject
     *
     * @param String $classId - The unique identifier for a class
     * @param String $objectId - The unique identifier for an object
     * @return Google_Service_Walletobjects_OfferObject $payload - object representing OfferObject resource
     *
     *******************************/
	public static function makeOfferObjectResource($classId, $objectId) {
	    // Define the resource representation of the Object
	    // values should be from your DB/services; here we hardcode information
	    // below defines an offer object. For more properties, check:
	    //// https://developers.google.com/pay/passes/reference/v1/offerobject/insert
	    //// https://developers.google.com/pay/passes/guides/pass-verticals/offers/design

	    // There is a client lib to help make the data structure. Newest client is on devsite:
	    //// https://developers.google.com/pay/passes/support/libraries#libraries
	    // Define Barcode
	    $barcode = new Google_Service_Walletobjects_Barcode();
	    $barcode->setType("qrCode");
	    $barcode->setValue("1234abc");
	    $barcode->setAlternateText("optional alternate text");

	    // Define offer object
	    $payload = new Google_Service_Walletobjects_OfferObject();
        // required fields
        $payload->setClassId($classId);
        $payload->setId($objectId);
        $payload->setState("active");
        // optional.  Check design and reference api to decide what's desirable
        $payload->setBarcode($barcode);

	    return $payload;
	}
}


?>