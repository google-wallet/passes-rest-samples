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

/******************************
*
*  Config
*
*  Define constants used to:
*  a) authorize REST calls
*  b) sign JSON Web Token (JWT)
*
********************************/

// Identifiers of Service account
define('SERVICE_ACCOUNT_EMAIL_ADDRESS', 'ServiceAccountEmail@developer.gserviceaccount.com');  //CHANGEME
define('SERVICE_ACCOUNT_FILE', 'privatekey.json');  //CHANGEME

// Used by the Google Pay API for Passes Client library
define('APPLICATION_NAME', 'my_appication_name'); //CHANGEME

// Identifier of Google Pay API for Passes Merchant Center
define('ISSUER_ID', 'my_IssuerId');  //CHANGEME

// List of origins for save to phone button. Used for JWT // CHANGEME
//// See https://developers.google.com/pay/passes/reference/s2w-reference
$ORIGINS = array('http://localhost:8080');  //CHANGEME

// Constants that are application agnostic. Used for JWT
define('AUDIENCE', 'google');
define('JWT_TYPE', 'savetoandroidpay');
define('SCOPES', 'https://www.googleapis.com/auth/wallet_object.issuer');

// Load the private key as String from service account file
$jsonFile = file_get_contents(SERVICE_ACCOUNT_FILE);
$credentialJson = json_decode($jsonFile, true);
define('SERVICE_ACCOUNT_PRIVATE_KEY',$credentialJson['private_key']);


?>
