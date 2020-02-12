passes-rest-samples/java
========================

This sample demonstrates integration of the basic components of the Google Pay API for Passes.  Review the [quickstart guide](https://developers.google.com/pay/save/samples/quickstart-java) to run the sample.

This sample showcases several aspects of the API
* Defining Class and Object resource definitions
* Insertion of classes and objects via Google Pay API for Passes REST API
* Signing a JSON Web Token that is used to generate save links or used in JS Web button

## Defining Class and Object resource definitions
The code for defining classes and objects can be found in the `src/main/java/com/google/gpap/quickstart/ResourceDefinitions.java`.

## Insertion of Classes and Objects
Make server to server calls with the Google Pay API for Passes REST API. Authorized OAuth2.0 calls are in `src/main/java/com/google/gpap/quickstart/RestMethods.java`. Preparation of the data and calling REST API insert and get methods are in `src/main/java/com/google/gpap/quickstart/Services.java`.

## Signing JSON Web Token (JWT)
For users to save a Google pass, they need to click a save link or save button. To determine what pass is saved, the data is stored in a JSON Web Token (JWT). To make sure the JWT is valid, it is signed using RSA-SHA256. The signing key is the OAuth service account generated key. The JWT format and signing method is in `src/main/java/com/google/gpap/quickstart/Jwt.java`.

To see a use this quickstart to generate a signed jwt, in your terminal/console:
1. Follow steps 1 and 2 in [Get Access to REST API](https://developers.google.com/pay/passes/guides/get-started/basic-setup/get-access-to-rest-api) to create a Google Pay API for Passes account and tie your service account to it.
1. [Install gradle](https://gradle.org/install/) if it is not previously installed.
1. In your console, navigate to where the directory where you downloaded the quickstart files.
1. Edit the following string values in the file `src/main/java/com/google/gpap/quickstart/Config.java`:
	1. SERVICE_ACCOUNT_EMAIL_ADDRESS: the value of the email in your service account key file.
	1. SERVICE_ACCOUNT_FILE: the  filename of your service account key.
	1. ISSUER_ID: your Google Pay API for Passes Issuer Id.
1. Choose the pass type to demo by changing the VerticalType.OFFER enumeration in the file `src/main/java/com/google/gpap/quickstart/Main.java` to demo a pass type other than an offer. The following are available:
	* OFFER
	* EVENTTICKET
	* FLIGHT
	* GIFTCARD
	* LOYALTY
	* TRANSIT
1. Setup the gradle wrapper by running the command `gradle wrapper`. This should create a few things, including `gradlew` executable.
1. Build the quickstart: `./gradlew build`.
1. Run the quickstart: `./gradlew run`.

Read the output, you should see:
1. The response of insertion of the pass Class.
1. The response of insertion of the pass Object.
1. Variations of a signed JWT and link. For preparing a JWT, check `src/main/java/com/google/gpap/quickstart/Services.java`.

## Changing the design and information on the pass
1. Edit the definition for the pass in `src/main/java/com/google/gpap/quickstart/ResourceDefinitions.java`
	1. Check design and API reference according to the specific pass type:
		* Boarding Passes - [Design](https://developers.google.com/pay/passes/guides/pass-verticals/boarding-passes/design)
		| [Class](https://developers.google.com/pay/passes/reference/v1/flightclass/insert) 
		| [Object](https://developers.google.com/pay/passes/reference/v1/flightobject/insert)
		* Event Tickets - [Design](https://developers.google.com/pay/passes/guides/pass-verticals/event-tickets/design)
		| [Class](https://developers.google.com/pay/passes/reference/v1/eventticketclass/insert) 
		| [Object](https://developers.google.com/pay/passes/reference/v1/eventticketobject/insert)
		* Gift Cards - [Design](https://developers.google.com/pay/passes/guides/pass-verticals/gift-cards/design) 
		| [Class](https://developers.google.com/pay/passes/reference/v1/giftcardclass/insert) 
		| [Object](https://developers.google.com/pay/passes/reference/v1/giftcardobject/insert)
		* Loyalty - [Design](https://developers.google.com/pay/passes/guides/pass-verticals/loyalty/design)
		| [Class](https://developers.google.com/pay/passes/reference/v1/loyaltyclass/insert) 
		| [Object](https://developers.google.com/pay/passes/reference/v1/loyaltyobject/insert)
		* Offers - [Design](https://developers.google.com/pay/passes/guides/pass-verticals/boarding-passes/design)
		| [Class](https://developers.google.com/pay/passes/reference/v1/offerclass/insert) 
		| [Object](https://developers.google.com/pay/passes/reference/v1/offerobject/insert)
		* Transit - [Design](https://developers.google.com/pay/passes/guides/pass-verticals/transit-passes/design)
		| [Class](https://developers.google.com/pay/passes/reference/v1/transitclass/insert) 
		| [Object](https://developers.google.com/pay/passes/reference/v1/transitobject/insert)
1. Run the quickstart: `./gradlew run`.
1. Choose the modified pass type to demo.

## Updating a pass
If you want to change data to inserted classes or objects, implement update() and patch(). Check reference API: [Summary](https://developers.google.com/pay/passes/rest)

These methods are also implemented in the Java [client library](https://developers.google.com/pay/passes/support/libraries#libraries). Check `libs/google-api-services-walletobjects-(VERSION).jar`
