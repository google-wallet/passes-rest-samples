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

// for jwt signing. See https://firebase.google.com/docs/auth/admin/create-custom-tokens#create_custom_tokens_using_a_third-party_jwt_library
use \Firebase\JWT\JWT;

// require_once 'Config.php'

/*******************************
*
* class that defines JWT format for a Google Pay Pass.
*
* to check the JWT protocol for Google Pay Passes, check:
* https://developers.google.com/pay/passes/reference/s2w-reference#google-pay-api-for-passes-jwt
*
* also demonstrates RSA-SHA256 signing implementation to make the signed JWT used
* in links and buttons. Learn more:
* https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay
*
*******************************/
class GpapJwt {
    private $audience;
    private $type;
    private $iss;
    private $origins;
    private $iat;
    private $payload;
    private $signingKey;

	function __construct(){

        $this->audience = AUDIENCE;
        $this->type = JWT_TYPE;
        $this->iss = SERVICE_ACCOUNT_EMAIL_ADDRESS;
        $this->origins = $GLOBALS['ORIGINS'];
        $this->iat = time();
        $this->payload = array();

        $this->signingKey = SERVICE_ACCOUNT_PRIVATE_KEY;
    }

    public function addOfferClass($resourcePayload){
        if( !array_key_exists("offerClasses", $this->payload) ){
            $this->payload["offerClasses"] = array();
        }
        $this->payload["offerClasses"][] = $resourcePayload;

        return;
    }

    public function addOfferObject($resourcePayload){
        if( !array_key_exists("offerObjects", $this->payload) ){
            $this->payload["offerObjects"] = array();
        }
        $this->payload["offerObjects"][] = $resourcePayload;

        return;
    }

    public function addLoyaltyClass($resourcePayload){
        if( !array_key_exists("loyaltyClasses", $this->payload) ){
            $this->payload["loyaltyClasses"] = array();
        }
        $this->payload["loyaltyClasses"][] = $resourcePayload;

        return;
    }

    public function addLoyaltyObject($resourcePayload){
        if( !array_key_exists("loyaltyObjects", $this->payload) ){
            $this->payload["loyaltyObjects"] = array();
        }
        $this->payload["loyaltyObjects"][] = $resourcePayload;

        return;
    }

    public function addGiftcardClass($resourcePayload){
        if( !array_key_exists("giftCardClasses", $this->payload) ){
            $this->payload["giftCardClasses"] = array();
        }
        $this->payload["giftCardClasses"][] = $resourcePayload;

        return;
    }

    public function addGiftcardObject($resourcePayload){
        if( !array_key_exists("giftCardObjects", $this->payload) ){
            $this->payload["giftCardObjects"]= array();
        }
        $this->payload["giftCardObjects"][] = $resourcePayload;

        return;
    }

    public function addEventTicketClass($resourcePayload){
        if( !array_key_exists("eventTicketClasses", $this->payload) ){
            $this->payload["eventTicketClasses"] = array();
        }
        $this->payload["eventTicketClasses"][] = $resourcePayload;

        return;
    }

    public function addEventTicketObject($resourcePayload){
        if( !array_key_exists("eventTicketObjects", $this->payload) ){
            $this->payload["eventTicketObjects"] = array();
        }
        $this->payload["eventTicketObjects"][] = $resourcePayload;

        return;
    }

    public function addFlightClass($resourcePayload){
        if( !array_key_exists("flightClasses", $this->payload) ){
            $this->payload["flightClasses"] = array();
        }
        $this->payload["flightClasses"][] = $resourcePayload;

        return;
    }

    public function addFlightObject($resourcePayload){
        if( !array_key_exists("flightObjects", $this->payload) ){
            $this->payload["flightObjects"] = array();
        }
        $this->payload["flightObjects"][] = $resourcePayload;

        return;
    }

    public function addTransitClass($resourcePayload){
        if( !array_key_exists("transitClasses", $this->payload) ){
            $this->payload["transitClasses"] = array();
        }
        $this->payload["transitClasses"][] = $resourcePayload;

        return;
    }

    public function addTransitObject($resourcePayload){
        if( !array_key_exists("transitObjects", $this->payload) ){
            $this->payload["transitObjects"] = array();
        }
        $this->payload["transitObjects"][] = $resourcePayload;

        return;
    }

    public function generateUnsignedJwt(){
	    $unsignedJwt = array();
	    $unsignedJwt['iss'] = $this->iss;
	    $unsignedJwt['aud'] = $this->audience;
	    $unsignedJwt['typ'] = $this->type;
	    $unsignedJwt['iat'] = $this->iat;
	    $unsignedJwt['payload'] = $this->payload;
	    $unsignedJwt['origins'] = $this->origins;

	    return $unsignedJwt;
    }

    public function generateSignedJwt() {
        $jwtToSign = $this->generateUnsignedJwt();
    	// Sign the JWT using the same private key used in OAuth.
        // See https://firebase.google.com/docs/auth/admin/create-custom-tokens#create_custom_tokens_using_a_third-party_jwt_library
        $signedJwt = JWT::encode($jwtToSign, SERVICE_ACCOUNT_PRIVATE_KEY, "RS256");

        return $signedJwt;
    }

}


 ?>
