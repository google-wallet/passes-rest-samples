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

// These handle formatting the JSON resource definitions
// download the latest client at:  https://developers.google.com/pay/passes/support/libraries#libraries
using System.Collections.Generic;
using csharp.Data;
namespace csharp
{
    public class ResourceDefinitions
    {
        private static ResourceDefinitions resourceDefinitions = new ResourceDefinitions();

        private ResourceDefinitions()
        {
        }

        public static ResourceDefinitions getInstance()
        {
            if (resourceDefinitions == null)
            {
                resourceDefinitions = new ResourceDefinitions();
            }
            return resourceDefinitions;
        }
        /// <summary>
        //// Generate an offer class
        /// See https://developers.google.com/pay/passes/reference/v1/offerclass
        /// </summary>
        /// <param name="classId"> the unique identifier for a class</param>
        /// <returns>the inserted offer class</returns>
        public OfferClass makeOfferClassResource(string classId)
        {
            // Define the resource representation of the Class
            // values should be from your DB/services; here we hardcode information
            // below defines an offer class. For more properties, check:
            //// https://developers.google.com/pay/passes/reference/v1/offerclass/insert
            //// https://developers.google.com/pay/passes/guides/pass-verticals/offers/design

            // There is a client lib to help make the data structure. Newest client is on
            // devsite:
            //// https://developers.google.com/pay/passes/support/libraries#libraries
            OfferClass payload = new OfferClass();
            //required fields
            payload.Id = classId;
            payload.IssuerName = "Baconrista Coffee";
            payload.Provider = "Baconrista Deals";
            payload.RedemptionChannel = "online";
            payload.ReviewStatus = "underReview";
            payload.Title = "Baconrista Deals";
            //optional fields. See design and reference api for more
            payload.TitleImage = new Image()
            {
                SourceUri = new ImageUri() { Uri = "http://farm4.staticflickr.com/3723/11177041115_6e6a3b6f49_o.jpg" }
            };
            return payload;
        }
        /// <summary>
        /// Generate an offer object
        /// See https://developers.google.com/pay/passes/reference/v1/offerobject
        /// </summary>
        /// <param name="objectId"> the unique identifier for a object</param>
        /// <returns>the inserted offer object</returns>
        public OfferObject makeOfferObjectResource(string objectId, string classId)
        {
            // Define the resource representation of the Object
            // values should be from your DB/services; here we hardcode information
            // below defines an offer object. For more properties, check:
            //// https://developers.google.com/pay/passes/reference/v1/offerobject/insert
            //// https://developers.google.com/pay/passes/guides/pass-verticals/offers/design

            // There is a client lib to help make the data structure. Newest client is on
            // devsite:
            //// https://developers.google.com/pay/passes/support/libraries#libraries
            OfferObject payload = new OfferObject();
            //required fields
            payload.Id = objectId;
            payload.ClassId = classId;
            payload.State = "active";
            //optional fields. See design and reference api for more
            payload.Barcode = new Barcode()
            {
                Type = "qrCode",
                Value = "1234abc",
                AlternateText = "1234abc"
            };
            return payload;
        }
        /// <summary>
        /// Generate a loyalty class
        /// See https://developers.google.com/pay/passes/reference/v1/loyaltyclass
        /// </summary>
        /// <param name="classId"> the unique identifier for a class</param>
        /// <returns>the inserted loyalty class</returns>
        public LoyaltyClass makeLoyaltyClassResource(string classId)
        {
            // Define the resource representation of the Class
            // values should be from your DB/services; here we hardcode information
            // below defines an loyalty class. For more properties, check:
            //// https://developers.google.com/pay/passes/reference/v1/loyaltyclass/insert
            //// https://developers.google.com/pay/passes/guides/pass-verticals/loyalty/design

            // There is a client lib to help make the data structure. Newest client is on
            // devsite:
            //// https://developers.google.com/pay/passes/support/libraries#libraries
            LoyaltyClass payload = new LoyaltyClass();
            //required fields
            payload.Id = classId;
            payload.IssuerName = "Baconrista Coffee";
            payload.ProgramName = "Baconrista Rewards";
            payload.ProgramLogo = new Image()
            {
                SourceUri = new ImageUri() { Uri = "http://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg" }
            };
            payload.ReviewStatus = "underReview";
            //optional fields. See design and reference api for more
            payload.TextModulesData = new List<TextModuleData>(){
                new TextModuleData(){
                    Header="Rewards details",
                    Body="Welcome to Baconrista rewards.  Enjoy your rewards for being a loyal customer. "
                                        + "10 points for ever dollar spent.  Redeem your points for free coffee, bacon and more! "
                }
            };
            payload.LinksModuleData = new LinksModuleData()
            {
                Uris = new List<Uri>(){
                        new Uri(){
                            UriValue="http://maps.google.com/",
                            Description="Nearby Locations"
                        },
                        new Uri(){
                            UriValue="tel:6505555555",
                            Description="Call Customer Service"
                        }
                    }
            };
            payload.ImageModulesData = new List<ImageModuleData>(){
                new ImageModuleData(){
                    MainImage= new Image(){
                        SourceUri = new ImageUri(){
                            Uri="http://farm4.staticflickr.com/3738/12440799783_3dc3c20606_b.jpg",
                            Description="Coffee beans"
                        }
                    }
                }
            };
            payload.Messages = new List<Message>(){
                new Message(){
                    Header="Welcome to Banconrista Rewards!",
                    Body="Featuring our new bacon donuts."
                }
            };
            payload.RewardsTier = "Gold";
            payload.RewardsTierLabel = "Tier";
            payload.Locations = new List<LatLongPoint>(){
                new LatLongPoint(){
                    Latitude=37.424015499999996,
                    Longitude=-122.09259560000001
                },
                new LatLongPoint(){
                    Latitude=37.7901435,
                    Longitude=-122.09508869999999
                },
                new LatLongPoint(){
                    Latitude=37.424354,
                    Longitude=-122.39026709999997
                },
                new LatLongPoint(){
                    Latitude=40.7406578,
                    Longitude=-74.00208940000002
                }
            };
            return payload;
        }
        /// <summary>
        /// Generate a loyalty object
        /// See https://developers.google.com/pay/passes/reference/v1/loyaltyobject
        /// </summary>
        /// <param name="objectId"> the unique identifier for a object</param>
        /// <returns>the inserted loyalty object</returns>
        public LoyaltyObject makeLoyaltyObjectResource(string objectId, string classId)
        {
            // Define the resource representation of the Object
            // values should be from your DB/services; here we hardcode information
            // below defines an loyalty object. For more properties, check:
            //// https://developers.google.com/pay/passes/reference/v1/loyaltyobject/insert
            //// https://developers.google.com/pay/passes/guides/pass-verticals/loyalty/design

            // There is a client lib to help make the data structure. Newest client is on
            // devsite:
            //// https://developers.google.com/pay/passes/support/libraries#libraries
            LoyaltyObject payload = new LoyaltyObject();
            //required fields
            payload.Id = objectId;
            payload.ClassId = classId;
            payload.State = "active";
            //optional fields. See design and reference api for more
            payload.AccountId = "12345678890";
            payload.AccountName = "Jane Doe";
            payload.Barcode = new Barcode()
            {
                Type = "qrCode",
                Value = "1234abc",
                AlternateText = "1234abc"
            };
            payload.TextModulesData = new List<TextModuleData>(){
                new TextModuleData(){
                    Header="Jane\"s Baconrista Rewards",
                    Body="Save more at your local Mountain View store Jane. "
                                        + " You get 1 bacon fat latte for every 5 coffees purchased.  "
                                        + "Also just for you, 10% off all pastries in the Mountain View store."
                }
            };
            payload.LinksModuleData = new LinksModuleData()
            {
                Uris = new List<Uri>(){
                        new Uri(){
                            UriValue="http://www.google.com/",
                            Description="My Baconrista Account"
                        }
                }
            };
            payload.InfoModuleData = new InfoModuleData(){
                LabelValueRows = new List<LabelValueRow>(){
                    new LabelValueRow(){
                        Columns = new List<LabelValue>(){
                            new LabelValue(){
                                Label="Next Reward in",
                                Value="2 coffees"
                            },
                            new LabelValue(){
                                Label="Member Since",
                                Value="01/15/2013"
                            }
                        }
                    },
                    new LabelValueRow(){
                        Columns = new List<LabelValue>(){
                            new LabelValue(){
                                Label="Local Store",
                                Value="Mountain View"
                            }
                        }
                    }
                }
            };
            payload.InfoModuleData.ShowLastUpdateTime =true;
            payload.Messages = new List<Message>(){
                new Message(){
                    Header="Jane, welcome to Banconrista Rewards",
                    Body="Thanks for joining our program. Show this message to "
                        + "our barista for your first free coffee on us!"
                }
            };
            payload.LoyaltyPoints= new LoyaltyPoints(){
                Balance= new LoyaltyPointsBalance(){
                     String__ = "800"
                },
                Label="Points"
            };
            payload.Locations = new List<LatLongPoint>(){
                new LatLongPoint(){
                    Latitude=37.424015499999996,
                    Longitude=-122.09259560000001
                },
                new LatLongPoint(){
                    Latitude=37.7901435,
                    Longitude=-122.09508869999999
                },
                new LatLongPoint(){
                    Latitude=37.424354,
                    Longitude=-122.39026709999997
                },
                new LatLongPoint(){
                    Latitude=40.7406578,
                    Longitude=-74.00208940000002
                }
            };
            return payload;
        }
        /// <summary>
        /// Generate a gift card class
        /// See https://developers.google.com/pay/passes/reference/v1/giftcardclass
        /// </summary>
        /// <param name="classId"> the unique identifier for a class</param>
        /// <returns>the inserted gift card class</returns>
        public GiftCardClass makeGiftCardClassResource(string classId)
        {
            // Define the resource representation of the Class
            // values should be from your DB/services; here we hardcode information
            // below defines an gift card class. For more properties, check:
            //// https://developers.google.com/pay/passes/reference/v1/giftcardclass/insert
            //// https://developers.google.com/pay/passes/guides/pass-verticals/gift-cards/design

            // There is a client lib to help make the data structure. Newest client is on
            // devsite:
            //// https://developers.google.com/pay/passes/support/libraries#libraries
            GiftCardClass payload = new GiftCardClass();
            //required fields
            payload.Id = classId;
            payload.IssuerName = "Baconrista";
            payload.ReviewStatus = "underReview";
            //optional fields. See design and reference api for more
            payload.MerchantName = "Baconrista";
            payload.ProgramLogo = new Image()
            {
                SourceUri = new ImageUri() { Uri = "http://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg" }
            };
            payload.TextModulesData = new List<TextModuleData>(){
                new TextModuleData(){
                    Header="Where to redeem",
                    Body="All US gift cards are redeemable in any US and Puerto Rico"
                        + " Baconrista retail locations, or online at Baconrista.com where"
                        + " available, for merchandise or services."
                }
            };
            payload.LinksModuleData = new LinksModuleData()
            {
                Uris = new List<Uri>(){
                        new Uri(){
                            UriValue="http://maps.google.com/",
                            Description="Baconrista"
                        }
                    }
            };
            payload.Locations = new List<LatLongPoint>(){
                new LatLongPoint(){
                    Latitude=37.424015499999996,
                    Longitude=-122.09259560000001
                }
            };
            return payload;
        }
        /// <summary>
        /// Generate a gift card object
        /// See https://developers.google.com/pay/passes/reference/v1/giftcardobject
        /// </summary>
        /// <param name="objectId"> the unique identifier for an object</param>
        /// <returns>the inserted gift card object</returns>
        public GiftCardObject makeGiftCardObjectResource(string objectId, string classId)
        {
            // Define the resource representation of the Object
            // values should be from your DB/services; here we hardcode information
            // below defines an giftcard object. For more properties, check:
            //// https://developers.google.com/pay/passes/reference/v1/giftcardobject/insert
            //// https://developers.google.com/pay/passes/guides/pass-verticals/gift-cards/design

            // There is a client lib to help make the data structure. Newest client is on
            // devsite:
            //// https://developers.google.com/pay/passes/support/libraries#libraries
            GiftCardObject payload = new GiftCardObject();
            //required fields
            payload.Id = objectId;
            payload.ClassId = classId;
            payload.State = "active";
            payload.CardNumber = "123abc";
            //optional fields. See design and reference api for more
            payload.Barcode = new Barcode()
            {
                Type = "qrCode",
                Value = "1234abc",
                AlternateText = "1234abc"
            };
            payload.Pin = "1111";
            payload.Balance= new Money(){
                    CurrencyCode="USD",
                    Micros=20000000L
            };
            payload.BalanceUpdateTime = new DateTime(){
                Date="2019-09-26T17:08:03.798329Z"
            };
            payload.TextModulesData = new List<TextModuleData>(){
                new TextModuleData(){
                    Header="Earn double points",
                    Body="Save more at your local Mountain View store Jane. "
                        + "Jane, don\"t forget to use your Baconrista Rewards when  "
                        + "paying with this gift card to earn additional points. "
                }
            };
            payload.LinksModuleData = new LinksModuleData()
            {
                Uris = new List<Uri>(){
                        new Uri(){
                            UriValue="http://www.google.com/",
                            Description="My Baconrista Gift Card Purchases"
                        }
                }
            };
            payload.Locations = new List<LatLongPoint>(){
                new LatLongPoint(){
                    Latitude=37.424015499999996,
                    Longitude=-122.09259560000001
                }
            };
            return payload;
        }
        /// <summary>
        /// Generate a event ticket class
        /// See https://developers.google.com/pay/passes/reference/v1/eventticketclass
        /// </summary>
        /// <param name="classId"> the unique identifier for a class</param>
        /// <returns>the inserted event ticket class</returns>
        public EventTicketClass makeEventTicketClassResource(string classId)
        {
            // Define the resource representation of the Class
            // values should be from your DB/services; here we hardcode information
            // below defines an event ticket class. For more properties, check:
            //// https://developers.google.com/pay/passes/reference/v1/eventticketclass/insert
            //// https://developers.google.com/pay/passes/guides/pass-verticals/event-tickets/design

            // There is a client lib to help make the data structure. Newest client is on
            // devsite:
            //// https://developers.google.com/pay/passes/support/libraries#libraries
            EventTicketClass payload = new EventTicketClass();
            //required fields
            payload.Id = classId;
            payload.IssuerName = "Baconrista Stadium";
            payload.ReviewStatus = "underReview";
            payload.EventName = new LocalizedString(){
                DefaultValue= new TranslatedString(){
                    Language="en-US",
                    Value="Bacon Coffee Fun Event"
                }
            };
            //optional fields. See design and reference api for more
            payload.TextModulesData = new List<TextModuleData>(){
                new TextModuleData(){
                    Header="Custom Details",
                    Body="Baconrista events have pushed the limits since its founding."
                }
            };
            payload.LinksModuleData = new LinksModuleData()
            {
                Uris = new List<Uri>(){
                        new Uri(){
                            UriValue="http://maps.google.com/",
                            Description="Nearby Locations"
                        },
                        new Uri(){
                            UriValue="tel:6505555555",
                            Description="Call Customer Service"
                        }
                    }
            };
            payload.ImageModulesData = new List<ImageModuleData>(){
                new ImageModuleData(){
                    MainImage= new Image(){
                        SourceUri = new ImageUri(){
                            Uri="http://farm4.staticflickr.com/3738/12440799783_3dc3c20606_b.jpg",
                            Description="Coffee beans"
                        }
                    }
                }
            };
            payload.Logo = new Image()
            {
                SourceUri = new ImageUri() { Uri = "https://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg", Description="Baconrista stadium logo" }
            };
            payload.Locations = new List<LatLongPoint>(){
                new LatLongPoint(){
                    Latitude=37.424015499999996,
                    Longitude=-122.09259560000001
                }
            };
            payload.Venue = new EventVenue(){
                Name = new LocalizedString(){
                    DefaultValue= new TranslatedString(){
                        Language="en-US",
                        Value="Baconrista Stadium"
                    }
                },
                Address= new LocalizedString(){
                    DefaultValue= new TranslatedString(){
                        Language="en-US",
                        Value="101 Baconrista Dr."
                    }
                }
            };
            payload.DateTime = new EventDateTime(){
                Start="2023-04-12T11:20:50.52Z",
                End="2023-04-12T16:20:50.52Z"
            };
            return payload;
        }
        /// <summary>
        /// Generate an event ticket object
        /// See https://developers.google.com/pay/passes/reference/v1/eventticketobject
        /// </summary>
        /// <param name="objectId"> the unique identifier for an object</param>
        /// <returns>the inserted event ticket object</returns>
        public EventTicketObject makeEventTicketObjectResource(string objectId, string classId)
        {
            // Define the resource representation of the Object
            // values should be from your DB/services; here we hardcode information
            // below defines an eventticket object. For more properties, check:
            //// https://developers.google.com/pay/passes/reference/v1/eventticketobject/insert
            //// https://developers.google.com/pay/passes/guides/pass-verticals/event-tickets/design

            // There is a client lib to help make the data structure. Newest client is on
            // devsite:
            //// https://developers.google.com/pay/passes/support/libraries#libraries
            EventTicketObject payload = new EventTicketObject();
            //required fields
            payload.Id = objectId;
            payload.ClassId = classId;
            payload.State = "active";
            //optional fields. See design and reference api for more
            payload.Barcode = new Barcode()
            {
                Type = "qrCode",
                Value = "1234abc",
                AlternateText = "1234abc"
            };
            payload.TicketHolderName = "Sir Bacon IV";
            payload.TicketNumber = "abc123";
            payload.SeatInfo = new EventSeat(){
                Seat= new LocalizedString(){
                    DefaultValue= new TranslatedString(){
                        Language="en-US",
                        Value="42"
                    }
                },
                Row = new LocalizedString(){
                    DefaultValue= new TranslatedString(){
                        Language="en-US",
                        Value="G3"
                    }
                },
                Section = new LocalizedString(){
                    DefaultValue= new TranslatedString(){
                        Language="en-US",
                        Value="5"
                    }
                },
                Gate = new LocalizedString(){
                    DefaultValue= new TranslatedString(){
                        Language="en-US",
                        Value="A"
                    }
                }
            };
            return payload;
        }
        /// <summary>
        /// Generate a flight class
        /// See https://developers.google.com/pay/passes/reference/v1/flightclass
        /// </summary>
        /// <param name="classId"> the unique identifier for a class</param>
        /// <returns>the inserted flight class</returns>
        public FlightClass makeFlightClassResource(string classId)
        {
            // Define the resource representation of the Class
            // values should be from your DB/services; here we hardcode information
            // below defines an flight class. For more properties, check:
            //// https://developers.google.com/pay/passes/reference/v1/flightclass/insert
            //// https://developers.google.com/pay/passes/guides/pass-verticals/boarding-passes/design

            // There is a client lib to help make the data structure. Newest client is on
            // devsite:
            //// https://developers.google.com/pay/passes/support/libraries#libraries
            FlightClass payload = new FlightClass();
            //required fields
            payload.Id = classId;
            payload.IssuerName = "Baconrista Flights";
            payload.ReviewStatus = "underReview";
            payload.Origin = new AirportInfo(){
                AirportIataCode="LAX",
                Gate="A2",
                Terminal="1"
            };
            payload.Destination = new AirportInfo(){
                AirportIataCode="SFO",
                Gate="C3",
                Terminal="2"
            };
            payload.FlightHeader = new FlightHeader(){
                Carrier= new FlightCarrier(){
                    CarrierIataCode="LX"
                },
                FlightNumber="1234"
            };
            payload.LocalScheduledDepartureDateTime = "2023-07-02T15:30:00";
            //optional fields. See design and reference api for more
            payload.TextModulesData = new List<TextModuleData>(){
                new TextModuleData(){
                    Header="Custom Flight Details",
                    Body="Baconrista flights has served snacks in-flight since its founding."
                }
            };
            payload.LinksModuleData = new LinksModuleData()
            {
                Uris = new List<Uri>(){
                        new Uri(){
                            UriValue="http://maps.google.com/",
                            Description="Nearby Locations"
                        },
                        new Uri(){
                            UriValue="tel:6505555555",
                            Description="Call Customer Service"
                        }
                    }
            };
            payload.ImageModulesData = new List<ImageModuleData>(){
                new ImageModuleData(){
                    MainImage= new Image(){
                        SourceUri = new ImageUri(){
                            Uri="http://farm4.staticflickr.com/3738/12440799783_3dc3c20606_b.jpg",
                            Description="Coffee beans"
                        }
                    }
                }
            };
            return payload;
        }
        /// <summary>
        /// Generate a flight object
        /// See https://developers.google.com/pay/passes/reference/v1/flightobject
        /// </summary>
        /// <param name="objectId"> the unique identifier for a object</param>
        /// <returns>the inserted flight object</returns>
        public FlightObject makeFlightObjectResource(string objectId, string classId)
        {
            // Define the resource representation of the Object
            // values should be from your DB/services; here we hardcode information
            // below defines an flight object. For more properties, check:
            //// https://developers.google.com/pay/passes/reference/v1/flightobject/insert
            //// https://developers.google.com/pay/passes/guides/pass-verticals/boarding-passes/design

            // There is a client lib to help make the data structure. Newest client is on
            // devsite:
            //// https://developers.google.com/pay/passes/support/libraries#libraries
            FlightObject payload = new FlightObject();
            //required fields
            payload.Id = objectId;
            payload.ClassId = classId;
            payload.State = "active";
            payload.PassengerName= "Sir Bacon the IV";
            payload.ReservationInfo = new ReservationInfo(){
                ConfirmationCode="42aQw"
            };
            //optional fields. See design and reference api for more
            payload.Barcode = new Barcode()
            {
                Type = "qrCode",
                Value = "1234abc",
                AlternateText = "1234abc"
            };
            payload.BoardingAndSeatingInfo = new BoardingAndSeatingInfo(){
                SeatNumber="42",
                BoardingGroup="B"
            };
            return payload;
        }
        /// <summary>
        /// Generate a transit class
        /// See https://developers.google.com/pay/passes/reference/v1/transitclass
        /// </summary>
        /// <param name="classId"> the unique identifier for a class</param>
        /// <returns>the inserted transit class</returns>
        public TransitClass makeTransitClassResource(string classId)
        {
            // Define the resource representation of the Class
            // values should be from your DB/services; here we hardcode information
            // below defines an transit class. For more properties, check:
            //// https://developers.google.com/pay/passes/reference/v1/transitclass/insert
            //// https://developers.google.com/pay/passes/guides/pass-verticals/transit-passes/design

            // There is a client lib to help make the data structure. Newest client is on
            // devsite:
            //// https://developers.google.com/pay/passes/support/libraries#libraries
            TransitClass payload = new TransitClass();
            //required fields
            payload.Id = classId;
            payload.IssuerName = "Baconrista Bus";
            payload.ReviewStatus = "underReview";
            payload.Logo = new Image()
            {
                SourceUri = new ImageUri() { Uri = "https://live.staticflickr.com/65535/48690277162_cd05f03f4d_o.png", Description="Baconrista Bus"}
            };
            payload.TransitType="bus";
            //optional fields. See design and reference api for more
            payload.TextModulesData = new List<TextModuleData>(){
                new TextModuleData(){
                    Header="Custom Transit Details",
                    Body="Baconrista Bus has served snacks in-transit since its founding."
                }
            };
            payload.LinksModuleData = new LinksModuleData()
            {
                Uris = new List<Uri>(){
                        new Uri(){
                            UriValue="http://maps.google.com/",
                            Description="Nearby Locations"
                        },
                        new Uri(){
                            UriValue="tel:6505555555",
                            Description="Call Customer Service"
                        }
                    }
            };
            return payload;
        }
        /// <summary>
        /// Generate a transit object
        /// See https://developers.google.com/pay/passes/reference/v1/transitobject
        /// </summary>
        /// <param name="objectId"> the unique identifier for a object</param>
        /// <returns>the inserted transit object</returns>
        public TransitObject makeTransitObjectResource(string objectId, string classId)
        {
            // Define the resource representation of the Object
            // values should be from your DB/services; here we hardcode information
            // below defines an transit object. For more properties, check:
            //// https://developers.google.com/pay/passes/reference/v1/transitobject/insert
            //// https://developers.google.com/pay/passes/guides/pass-verticals/transit-passes/design

            // There is a client lib to help make the data structure. Newest client is on
            // devsite:
            //// https://developers.google.com/pay/passes/support/libraries#libraries
            TransitObject payload = new TransitObject();
            //required fields
            payload.Id = objectId;
            payload.ClassId = classId;
            payload.State = "active";
            payload.TripType= "oneWay";
            payload.TicketLeg = new TicketLeg(){
                OriginStationCode="LA",
                OriginName= new LocalizedString(){
                    DefaultValue= new TranslatedString(){
                        Language="en-US",
                        Value="LA Transit Center"
                    }
                },
                DestinationStationCode="SFO",
                DestinationName = new LocalizedString(){
                    DefaultValue= new TranslatedString(){
                        Language="en-US",
                        Value="SFO Transit Center"
                    }
                },
                DepartureDateTime="2020-04-12T16:20:50.52Z",
                ArrivalDateTime="2020-04-12T20:20:50.52Z"
            };
            //optional fields. See design and reference api for more
            payload.Barcode = new Barcode()
            {
                Type = "qrCode",
                Value = "1234abc",
                AlternateText = "1234abc"
            };

            return payload;
        }        
    }
}