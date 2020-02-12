passes-rest-samples/python
==========================

This sample demonstrates integration of the basic components of the Google Pay API for Passes.  Review the [quickstart guide](https://developers.google.com/pay/save/samples/quickstart-python) to run the sample.

This sample showcases several aspects of the API
* Defining Class and Object resource definitions
* Insertion of classes and objects via Google Pay API for Passes REST API
* Signing a JSON Web Token that is used to generate save links or used in JS Web button

## Defining Class and Object resource definitions
The code for defining classes and objects can be found in the `resourceDefinitions.py`.

## Insertion of Classes and Objects
Make server to server calls with the Google Pay API for Passes REST API. Authorized OAuth2.0 calls are in `restMethods.py`. Preparation of the data and calling REST API insert amd get methods are in `services.py`.

## Signing JSON Web Token (JWT)
For users to save a Google pass, they need to click a save link or save button. To determine what pass is saved, the data is stored in a JSON Web Token (JWT). To make sure the JWT is valid, it is signed using RSA-SHA256. The signing key is the OAuth service account generated key. The JWT format and signing method is in `jwt.py`.

To see a use this quickstart to generate a signed jwt, in your terminal/console:
1. Follow steps 1 and 2 in [Get Access to REST API](https://developers.google.com/pay/passes/guides/get-started/basic-setup/get-access-to-rest-api) to create a Google Pay API for Passes account and tie your service account to it.
1. Set up [virtualenv](https://virtualenv.pypa.io/en/stable/) to create an isolated python environment. See [installing and using virtualenv](https://cloud.google.com/python/setup#installing_and_using_virtualenv)
1. Make sure you've "activated" the virtualenv install dependencies
	1. `pip install -r requirements.txt`
1. In the directory you made a virtualenv for, place thequickstart files.
1. Edit the following string values in the file `config.py`:
	1. SERVICE_ACCOUNT_EMAIL_ADDRESS: the value of the email in your service account key file.
	1. SERVICE_ACCOUNT_FILE: the  filename of your service account key.
	1. ISSUER_ID: your Google Pay API for Passes Issuer Id.
1. Run  the quickstart: `python main.py`.
1. Choose your pass type to demo in the quickstart.

Read the output, you should see:
1. The response of insertion of the Class.
1. The response of insertion of the Object.
1. Variations of a signed JWT and link. For preparing a JWT, check `services.py`.

## Changing the design and information on the pass.
Below is a procedure for modifying these sample passes:

1. Edit the definition for the pass in `resourceDefinitions.py`
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
1. Run  the quickstart: `python main.py`.
1. Choose your pass type to demo in the program.

## Updating a Pass
In this quick start application, every demo run will have a unique class and object. If you want to change data of an already inserted class or object, as noted in our [use cases](https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/engage-through-google-pay), implement the update or patch methods. Check reference API [summary](https://developers.google.com/pay/passes/rest).
