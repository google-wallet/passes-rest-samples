

using csharp.Data;
using csharp.Service;
using Google.Apis.Auth.OAuth2;
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
namespace csharp
{
    public class RestMethods
    {
        private GoogleCredential credential;
        private static RestMethods restMethods = new RestMethods();

        private RestMethods()
        {
            Config config = Config.getInstance();
            this.credential = GoogleCredential.FromFile(config.getServiceAccountFile())
                .CreateScoped(WalletobjectsService.Scope.WalletObjectIssuer);
        }

        public static RestMethods getInstance()
        {
            if (restMethods == null)
            {
                restMethods = new RestMethods();
            }
            return restMethods;
        }
        /// <summary>
        /// Insert class with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/offerclass/insert
        /// </summary>
        /// <param name="theClass">represents offer class resource</param>
        /// <returns>class as was saved</returns>
        public OfferClass insertOfferClass(OfferClass theClass)
        {
            OfferClass response = null;
            // Uses the Google Pay API for Passes C# client lib to insert the Offer class
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/offerclass/insert
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Offerclass.Insert(theClass).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }
        /// <summary>
        /// Get a class with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/offerclass/get
        /// </summary>
        /// <param name="id">id of the class</param>
        /// <returns>class</returns>
        public OfferClass getOfferClass(string id)
        {
            OfferClass response = null;
            // Uses the Google Pay API for Passes C# client lib to get an offer class
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/offerclass/get
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Offerclass.Get(id).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }
        /// <summary>
        /// Insert an object with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/offerobject/insert
        /// </summary>
        /// <param name="theObject">represents offer object resource</param>
        /// <returns>object as was saved</returns>
        public OfferObject insertOfferObject(OfferObject theObject)
        {
            OfferObject response = null;
            // Uses the Google Pay API for Passes C# client lib to insert the Offer object
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/offerobject/insert
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Offerobject.Insert(theObject).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }
        /// <summary>
        /// Get with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/offerobject/get
        /// </summary>
        /// <param name="id">id of the object</param>
        /// <returns>object</returns>
        public OfferObject getOfferObject(string id)
        {
            OfferObject response = null;
            // Uses the Google Pay API for Passes C# client lib to get a Offer object
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/offerobject/get
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Offerobject.Get(id).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }        
        /// <summary>
        /// Insert class with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/loyaltyclass/insert
        /// </summary>
        /// <param name="theClass">represents loyalty class resource</param>
        /// <returns>class as was saved</returns>
        public LoyaltyClass insertLoyaltyClass(LoyaltyClass theClass)
        {
            LoyaltyClass response = null;
            // Uses the Google Pay API for Passes C# client lib to insert the Loyalty class
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/loyaltyclass/insert
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Loyaltyclass.Insert(theClass).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }
        /// <summary>
        /// Get a class with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/loyaltyclass/get
        /// </summary>
        /// <param name="id">id of the class</param>
        /// <returns>class</returns>
        public LoyaltyClass getLoyaltyClass(string id)
        {
            LoyaltyClass response = null;
            // Uses the Google Pay API for Passes C# client lib to get a Loyalty class
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/loyaltyclass/get
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Loyaltyclass.Get(id).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }        
        /// <summary>
        /// Insert an object with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/loyaltyobject/insert
        /// </summary>
        /// <param name="theObject">represents loyalty object resource</param>
        /// <returns>object as was saved</returns>
        public LoyaltyObject insertLoyaltyObject(LoyaltyObject theObject)
        {
            LoyaltyObject response = null;
            // Uses the Google Pay API for Passes C# client lib to insert the Loyalty object
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/loyaltyobject/insert
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Loyaltyobject.Insert(theObject).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }    
        /// <summary>
        /// Get an object with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/loyaltyobject/get
        /// </summary>
        /// <param name="Id">represents loyalty object resource</param>
        /// <returns>object</returns>
        public LoyaltyObject getLoyaltyObject(string Id)
        {
            LoyaltyObject response = null;
            // Uses the Google Pay API for Passes C# client lib to get a Loyalty object
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/loyaltyobject/get
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Loyaltyobject.Get(Id).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }              
        /// <summary>
        /// Insert class with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/eventticketclass/insert
        /// </summary>
        /// <param name="theClass">represents event ticket class resource</param>
        /// <returns>class as was saved</returns>
        public EventTicketClass insertEventTicketClass(EventTicketClass theClass)
        {
            EventTicketClass response = null;
            // Uses the Google Pay API for Passes C# client lib to insert the EventTicket class
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/eventticketclass/insert
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Eventticketclass.Insert(theClass).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }
        /// <summary>
        /// Get a class with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/eventticketclass/get
        /// </summary>
        /// <param name="id">id of the class</param>
        /// <returns>class</returns>
        public EventTicketClass getEventTicketClass(string id)
        {
            EventTicketClass response = null;
            // Uses the Google Pay API for Passes C# client lib to get a EventTicket class
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/eventticketclass/get
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Eventticketclass.Get(id).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }        
        /// <summary>
        /// Insert an object with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/eventticketobject/insert
        /// </summary>
        /// <param name="theObject">represents event ticket object resource</param>
        /// <returns>object as was saved</returns>
        public EventTicketObject insertEventTicketObject(EventTicketObject theObject)
        {
            EventTicketObject response = null;
            // Uses the Google Pay API for Passes C# client lib to insert the EventTicket object
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/eventticketobject/insert
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Eventticketobject.Insert(theObject).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }
        /// <summary>
        /// Get an object with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/eventticketobject/get
        /// </summary>
        /// <param name="id">id of the object</param>
        /// <returns>object as was saved</returns>
        public EventTicketObject getEventTicketObject(string id)
        {
            EventTicketObject response = null;
            // Uses the Google Pay API for Passes C# client lib to get a EventTicket object
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/eventticketobject/get
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Eventticketobject.Get(id).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }           
        /// <summary>
        /// Insert class with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/flightclass/insert
        /// </summary>
        /// <param name="theClass">represents flight class resource</param>
        /// <returns>class as was saved</returns>
        public FlightClass insertFlightClass(FlightClass theClass)
        {
            FlightClass response = null;
            // Uses the Google Pay API for Passes C# client lib to insert the Flight class
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/flightclass/insert
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Flightclass.Insert(theClass).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }
        /// <summary>
        /// Get a class with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/flightclass/get
        /// </summary>
        /// <param name="id">id of the class</param>
        /// <returns>Class</returns>
        public FlightClass getFlightClass(string id)
        {
            FlightClass response = null;
            // Uses the Google Pay API for Passes C# client lib to get a Flight class
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/flightclass/get
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Flightclass.Get(id).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }        
        /// <summary>
        /// Insert an object with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/flightobject/insert
        /// </summary>
        /// <param name="theObject">represents flight object resource</param>
        /// <returns>object as was saved</returns>
        public FlightObject insertFlightObject(FlightObject theObject)
        {
            FlightObject response = null;
            // Uses the Google Pay API for Passes C# client lib to insert the Flight object
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/flightobject/insert
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Flightobject.Insert(theObject).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }
        /// <summary>
        /// Get an object with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/flightobject/get
        /// </summary>
        /// <param name="id">id of the object</param>
        /// <returns>Object</returns>
        public FlightObject getFlightObject(string id)
        {
            FlightObject response = null;
            // Uses the Google Pay API for Passes C# client lib to get a Flight object
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/flightobject/get
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Flightobject.Get(id).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }        
        /// <summary>
        /// Insert class with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/giftcardclass/insert
        /// </summary>
        /// <param name="theClass">represents gift card class resource</param>
        /// <returns>Class</returns>
        public GiftCardClass insertGiftCardClass(GiftCardClass theClass)
        {
            GiftCardClass response = null;
            // Uses the Google Pay API for Passes C# client lib to insert the GiftCard class
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/giftcardclass/insert
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Giftcardclass.Insert(theClass).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }
        /// <summary>
        /// Get a class with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/giftcardclass/get
        /// </summary>
        /// <param name="id">id of the class</param>
        /// <returns>Class</returns>
        public GiftCardClass getGiftCardClass(string id)
        {
            GiftCardClass response = null;
            // Uses the Google Pay API for Passes C# client lib to get a GiftCard class
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/giftcardclass/get
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Giftcardclass.Get(id).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }        
        /// <summary>
        /// Insert an object with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/giftcardobject/insert
        /// </summary>
        /// <param name="theObject">represents gift card object resource</param>
        /// <returns>object as was saved</returns>
        public GiftCardObject insertGiftCardObject(GiftCardObject theObject)
        {
            GiftCardObject response = null;
            // Uses the Google Pay API for Passes C# client lib to insert the GiftCard object
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/giftcardobject/insert
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Giftcardobject.Insert(theObject).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }
        /// <summary>
        /// Get an object with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/giftcardobject/get
        /// </summary>
        /// <param name="id">id of object</param>
        /// <returns>Object</returns>
        public GiftCardObject getGiftCardObject(string id)
        {
            GiftCardObject response = null;
            // Uses the Google Pay API for Passes C# client lib to get a GiftCard object
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/giftcardobject/get
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Giftcardobject.Get(id).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }                
        /// <summary>
        /// Insert class with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/transitclass/insert
        /// </summary>
        /// <param name="theClass">represents transit class resource</param>
        /// <returns>class as was saved</returns>
        public TransitClass insertTransitClass(TransitClass theClass)
        {
            TransitClass response = null;
            // Uses the Google Pay API for Passes C# client lib to insert the Transit class
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/transitclass/insert
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Transitclass.Insert(theClass).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }
        /// <summary>
        /// Get defined class with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/transitclass/get
        /// </summary>
        /// <param name="id">id of class</param>
        /// <returns>Class</returns>
        public TransitClass getTransitClass(string id)
        {
            TransitClass response = null;
            // Uses the Google Pay API for Passes C# client lib to get a Transit class
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/transitclass/get
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Transitclass.Get(id).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }        
        /// <summary>
        /// Insert an object with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/transitobject/insert
        /// </summary>
        /// <param name="theObject">represents transit object resource</param>
        /// <returns>object as was saved</returns>
        public TransitObject insertTransitObject(TransitObject theObject)
        {
            TransitObject response = null;
            // Uses the Google Pay API for Passes C# client lib to insert the Transit object
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/transitobject/insert
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Transitobject.Insert(theObject).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }     
        /// <summary>
        /// Get an object with Google Pay API for Passes REST API
        /// See https://developers.google.com/pay/passes/reference/v1/transitobject/get
        /// </summary>
        /// <param name="id">id of the object</param>
        /// <returns>Object</returns>
        public TransitObject getTransitObject(string id)
        {
            TransitObject response = null;
            // Uses the Google Pay API for Passes C# client lib to get a Transit object
            // check the devsite for newest client lib: https://developers.google.com/pay/passes/support/libraries#libraries
            // check reference API to see the underlying REST call:
            // https://developers.google.com/pay/passes/reference/v1/transitobject/get
            WalletobjectsService service = new WalletobjectsService(new Google.Apis.Services.BaseClientService.Initializer()
            {
                HttpClientInitializer = this.credential
            });
            try
            {
                response = service.Transitobject.Get(id).Execute();
            }
            catch (Google.GoogleApiException ge)
            {
                System.Console.WriteLine(">>>> [START] Google Server Error response:");
                System.Console.WriteLine(ge.Message);
                System.Console.WriteLine(">>>> [END] Google Server Error response\n");
            }
            catch (System.Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
            return response;
        }                 
    }
}