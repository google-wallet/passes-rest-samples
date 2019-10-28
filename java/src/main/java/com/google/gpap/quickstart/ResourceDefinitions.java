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

import com.google.api.services.walletobjects.model.OfferClass;
import com.google.api.services.walletobjects.model.OfferObject;
import com.google.api.services.walletobjects.model.ReservationInfo;
import com.google.api.services.walletobjects.model.TextModuleData;
import com.google.api.services.walletobjects.model.TicketLeg;
import com.google.api.services.walletobjects.model.TransitClass;
import com.google.api.services.walletobjects.model.TransitObject;
import com.google.api.services.walletobjects.model.TranslatedString;

import java.util.ArrayList;

import com.google.api.services.walletobjects.model.AirportInfo;
import com.google.api.services.walletobjects.model.Barcode;
import com.google.api.services.walletobjects.model.BoardingAndSeatingInfo;
import com.google.api.services.walletobjects.model.Review;
import com.google.api.services.walletobjects.model.DateTime;
import com.google.api.services.walletobjects.model.EventDateTime;
import com.google.api.services.walletobjects.model.EventSeat;
import com.google.api.services.walletobjects.model.EventTicketClass;
import com.google.api.services.walletobjects.model.EventTicketObject;
import com.google.api.services.walletobjects.model.EventVenue;
import com.google.api.services.walletobjects.model.FlightCarrier;
import com.google.api.services.walletobjects.model.FlightClass;
import com.google.api.services.walletobjects.model.FlightHeader;
import com.google.api.services.walletobjects.model.FlightObject;
import com.google.api.services.walletobjects.model.GiftCardClass;
import com.google.api.services.walletobjects.model.GiftCardObject;
import com.google.api.services.walletobjects.model.Image;
import com.google.api.services.walletobjects.model.ImageModuleData;
import com.google.api.services.walletobjects.model.ImageUri;
import com.google.api.services.walletobjects.model.InfoModuleData;
import com.google.api.services.walletobjects.model.LabelValue;
import com.google.api.services.walletobjects.model.LabelValueRow;
import com.google.api.services.walletobjects.model.LatLongPoint;
import com.google.api.services.walletobjects.model.LinksModuleData;
import com.google.api.services.walletobjects.model.LocalizedString;
import com.google.api.services.walletobjects.model.LoyaltyClass;
import com.google.api.services.walletobjects.model.LoyaltyObject;
import com.google.api.services.walletobjects.model.LoyaltyPoints;
import com.google.api.services.walletobjects.model.LoyaltyPointsBalance;
import com.google.api.services.walletobjects.model.Money;
import com.google.api.services.walletobjects.model.Uri;
import com.google.api.services.walletobjects.model.Message;

public class ResourceDefinitions {
    private static ResourceDefinitions resourceDefinitions = new ResourceDefinitions();

    private ResourceDefinitions() {
    }

    public static ResourceDefinitions getInstance() {
        if (resourceDefinitions == null) {
            resourceDefinitions = new ResourceDefinitions();
        }
        return resourceDefinitions;
    }

    /******************************
     *
     * Define an Offer Class
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerclass
     *
     * @param String classId - The unique identifier for a class
     * @return OfferClass payload - represents Offer class resource
     *
     *******************************/
    public OfferClass makeOfferClassResource(String classId) {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an offer class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/offerclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/offers/design

        // There is a client lib to help make the data structure. Newest client is on
        // devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        OfferClass payload = new OfferClass()
                // required
                .setId(classId).setIssuerName("Baconrista Coffee").setProvider("Baconrista Deals")
                .setRedemptionChannel("online").setReviewStatus("underReview").setTitle("20% off one bacon fat latte")
                // optional. Check design and reference api for more
                .setTitleImage( (new Image()).setSourceUri((new ImageUri()).setUri("http://farm4.staticflickr.com/3723/11177041115_6e6a3b6f49_o.jpg")));

        return payload;
    }

    /******************************
     *
     * Define an Offer Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerobject
     *
     * @param String classId - The unique identifier for a class
     * @param String objectId - The unique identifier for an object
     * @return OfferObject payload - represents Offer object resource
     *
     *******************************/
    public OfferObject makeOfferObjectResource(String classId, String objectId) {
        // Define the resource representation of the Object
        // values should be from your DB/services; here we hardcode information
        // below defines an offer object. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/offerobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/offers/design

        // There is a client lib to help make the data structure. Newest client is on
        // devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        OfferObject payload = new OfferObject()
                // required
                .setClassId(classId).setId(objectId).setState("active")
                // optional. Check design and reference api for more
                .setBarcode((new Barcode()).setType("qrCode").setValue("1234abc")
                        .setAlternateText("optional alternate text"));

        return payload;
    }

    /******************************
     *
     * Define a Loyalty Class
     *
     * See https://developers.google.com/pay/passes/reference/v1/loyaltyclass
     *
     * @param String classId - The unique identifier for a class
     * @return LoyaltyClass payload - represents Loyalty class resource
     *
     *******************************/
    public LoyaltyClass makeLoyaltyClassResource(String classId) {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an loyalty class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/loyalty/design

        // There is a client lib to help make the data structure. Newest client is on
        // devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        LoyaltyClass payload = new LoyaltyClass()
                // required
                .setId(classId).setIssuerName("Baconrista Coffee").setProgramName("Baconrista Rewards")
                .setProgramLogo(new Image().setSourceUri(
                        new ImageUri().setUri("http://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg")))
                .setReviewStatus("underReview")
                // optional. Check design and reference api for more
                .setTextModulesData((new ArrayList<TextModuleData>() {
                    {
                        add((new TextModuleData()).setHeader("Rewards details").setBody(
                                "Welcome to Baconrista rewards.  Enjoy your rewards for being a loyal customer. "
                                        + "10 points for ever dollar spent.  Redeem your points for free coffee, bacon and more! "));
                    }
                })).setLinksModuleData((new LinksModuleData()).setUris((new ArrayList<Uri>() {
                    {
                        add((new Uri()).setDescription("Nearby Locations").setUri("http://maps.google.com/"));
                        add((new Uri()).setDescription("Call Customer Service").setUri("tel:6505555555"));
                    }
                }))).setImageModulesData((new ArrayList<ImageModuleData>() {
                    {
                        add((new ImageModuleData())
                                .setMainImage((new Image()).setSourceUri((new ImageUri()).setDescription("Coffee beans")
                                        .setUri("http://farm4.staticflickr.com/3738/12440799783_3dc3c20606_b.jpg"))));
                    }
                })).setMessages((new ArrayList<Message>() {
                    {
                        add((new Message()).setHeader("Welcome to Banconrista Rewards!")
                                .setBody("Featuring our new bacon donuts."));
                    }
                })).setRewardsTier("Gold").setRewardsTierLabel("Tier").setLocations((new ArrayList<LatLongPoint>() {
                    {
                        add((new LatLongPoint()).setLatitude(37.424015499999996).setLongitude(-122.09259560000001));
                        add((new LatLongPoint()).setLatitude(37.7901435).setLongitude(-122.09508869999999));
                        add((new LatLongPoint()).setLatitude(37.424354).setLongitude(-122.39026709999997));
                        add((new LatLongPoint()).setLatitude(40.7406578).setLongitude(-74.00208940000002));
                    }
                }));
        return payload;
    }

    /******************************
     *
     * Define a Loyalty Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/loyaltyobject
     *
     * @param String classId - The unique identifier for a class
     * @param String objectId - The unique identifier for an object
     * @return LoyaltyObject payload - represents Loyalty object resource
     *
     *******************************/
    public LoyaltyObject makeLoyaltyObjectResource(String classId, String objectId) {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an loyalty class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/loyalty/design

        // There is a client lib to help make the data structure. Newest client is on
        // devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        LoyaltyObject payload = new LoyaltyObject()
                // required
                .setId(objectId).setClassId(classId).setState("active")
                // optional properties
                .setAccountId("12345678890").setAccountName("Jane Doe")
                .setBarcode((new Barcode()).setType("qrCode").setValue("1234abc")
                        .setAlternateText("optional alternate text"))
                .setTextModulesData((new ArrayList<TextModuleData>() {
                    {
                        add((new TextModuleData()).setHeader("Jane\"s Baconrista Rewards")
                                .setBody("Save more at your local Mountain View store Jane. "
                                        + " You get 1 bacon fat latte for every 5 coffees purchased.  "
                                        + "Also just for you, 10% off all pastries in the Mountain View store."));
                    }
                })).setLinksModuleData((new LinksModuleData()).setUris((new ArrayList<Uri>() {
                    {
                        add((new Uri()).setDescription("My Baconrista Account").setUri("http://www.google.com"));
                    }
                }))).setInfoModuleData((new InfoModuleData()).setLabelValueRows((new ArrayList<LabelValueRow>() {
                    {
                        add((new LabelValueRow()).setColumns((new ArrayList<LabelValue>() {
                            {
                                add((new LabelValue()).setLabel("Next Reward in").setValue("2 coffees"));
                                add((new LabelValue()).setLabel("Member Since").setValue("01/15/2013"));
                            }
                        })));
                        add((new LabelValueRow()).setColumns((new ArrayList<LabelValue>() {
                            {
                                add((new LabelValue()).setLabel("Local Store").setValue("Mountain View"));
                            }
                        })));

                    }
                })).setShowLastUpdateTime(true)).setMessages((new ArrayList<Message>() {
                    {
                        add((new Message()).setHeader("Jane, welcome to Banconrista Rewards")
                                .setBody("Thanks for joining our program. Show this message to "
                                        + "our barista for your first free coffee on us!"));
                    }
                })).setLoyaltyPoints((new LoyaltyPoints()).setBalance((new LoyaltyPointsBalance()).setString("800"))
                        .setLabel("Points"))
                .setLocations((new ArrayList<LatLongPoint>() {
                    {
                        add((new LatLongPoint()).setLatitude(37.793484).setLongitude(-122.394380));
                    }
                }));
        return payload;
    }

    /******************************
     *
     * Define a Gift Card Class
     *
     * See https://developers.google.com/pay/passes/reference/v1/giftcardclass
     *
     * @param String classId - The unique identifier for a class
     * @return GiftCardClass payload - represents gift card class resource
     *
     *******************************/
    public GiftCardClass makeGiftCardClassResource(String classId) {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an giftcard class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/giftcardclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/gift-cards/design

        // There is a client lib to help make the data structure. Newest client is on
        // devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        GiftCardClass payload = new GiftCardClass()
                // required
                .setId(classId).setIssuerName("Baconrista").setReviewStatus("underReview")
                // optional. Check design and reference api for more
                .setMerchantName("Baconrista")
                .setProgramLogo(new Image().setSourceUri(
                        new ImageUri().setUri("http://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg")))
                .setTextModulesData((new ArrayList<TextModuleData>() {
                    {
                        add((new TextModuleData()).setHeader("Where to Redeem")
                                .setBody("All US gift cards are redeemable in any US and Puerto Rico"
                                        + " Baconrista retail locations, or online at Baconrista.com where"
                                        + " available, for merchandise or services."));
                    }
                })).setLinksModuleData((new LinksModuleData()).setUris((new ArrayList<Uri>() {
                    {
                        add((new Uri()).setDescription("Baconrista").setUri("http://www.google.com/"));
                    }
                }))).setLocations((new ArrayList<LatLongPoint>() {
                    {
                        add((new LatLongPoint()).setLatitude(37.793484).setLongitude(-122.394380));
                    }
                }));
        return payload;
    }

    /******************************
     *
     * Define a Gift Card Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/giftcardobject
     *
     * @param String classId - The unique identifier for a class
     * @param String objectId - The unique identifier for an object
     * @return GiftCardObject payload - represents gift card object resource
     *
     *******************************/
    public GiftCardObject makeGiftCardObjectResource(String classId, String objectId) {
        // Define the resource representation of the Object
        // values should be from your DB/services; here we hardcode information
        // below defines an giftcard object. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/giftcardobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/gift-cards/design

        // There is a client lib to help make the data structure. Newest client is on
        // devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        GiftCardObject payload = new GiftCardObject()
                // required
                .setClassId(classId).setId(objectId).setState("active").setCardNumber("123abc")
                // optional. Check design and reference api for more
                .setBarcode((new Barcode()).setType("qrCode").setValue("1234abc")
                        .setAlternateText("optional alternate text"))
                .setPin("1111").setBalance((new Money()).setCurrencyCode("USD").setMicros(20000000L))
                .setBalanceUpdateTime((new DateTime()).setDate("2019-09-26T17:08:03.798329Z"))
                .setTextModulesData((new ArrayList<TextModuleData>() {
                    {
                        add((new TextModuleData()).setHeader("Earn double points")
                                .setBody("Jane, don\"t forget to use your Baconrista Rewards when  "
                                        + "paying with this gift card to earn additional points. "));
                    }
                })).setLinksModuleData((new LinksModuleData()).setUris((new ArrayList<Uri>() {
                    {
                        add((new Uri()).setDescription("My Baconrista Gift Card Purchases")
                                .setUri("http://www.google.com/"));
                    }
                })));

        return payload;
    }

    /******************************
     *
     * Define an Event Ticket Class
     *
     * See https://developers.google.com/pay/passes/reference/v1/eventticketclass
     *
     * @param String classId - The unique identifier for a class
     * @return EventTicketClass payload - represents event ticket class resource
     *
     *******************************/
    public EventTicketClass makeEventTicketClassResource(String classId) {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an eventticket class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/eventticketclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/event-tickets/design

        // There is a client lib to help make the data structure. Newest client is on
        // devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        EventTicketClass payload = new EventTicketClass()
                // required
                .setId(classId).setIssuerName("Baconrista Stadium").setReviewStatus("underReview")
                .setEventName((new LocalizedString()).setDefaultValue(
                        (new TranslatedString()).setLanguage("en-US").setValue("Bacon Coffee Fun Event")))
                // optional. Check design and reference api for more
                .setLocations((new ArrayList<LatLongPoint>() {
                    {
                        add((new LatLongPoint()).setLatitude(37.424015499999996).setLongitude(-122.09259560000001));
                    }
                })).setReview((new Review()).setComments("Real Auto Approval by system"))
                .setTextModulesData((new ArrayList<TextModuleData>() {
                    {
                        add((new TextModuleData()).setHeader("Custom Details")
                                .setBody("Baconrista events have pushed the limits since its founding."));
                    }
                })).setLinksModuleData((new LinksModuleData()).setUris((new ArrayList<Uri>() {
                    {
                        add((new Uri()).setDescription("Nearby Locations").setUri("http://maps.google.com/"));
                        add((new Uri()).setDescription("Call Customer Service").setUri("tel:6505555555"));
                    }
                }))).setImageModulesData((new ArrayList<ImageModuleData>() {
                    {
                        add((new ImageModuleData())
                                .setMainImage((new Image()).setSourceUri((new ImageUri()).setDescription("Coffee beans")
                                        .setUri("http://farm4.staticflickr.com/3738/12440799783_3dc3c20606_b.jpg"))));
                    }
                }))
                .setLogo((new Image()).setSourceUri(
                        (new ImageUri()).setUri("https://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg")
                                .setDescription("Baconrista stadium logo")))
                .setVenue((new EventVenue())
                        .setName((new LocalizedString()).setDefaultValue(
                                (new TranslatedString()).setLanguage("en-US").setValue("Baconrista Stadium")))
                        .setAddress((new LocalizedString()).setDefaultValue(
                                (new TranslatedString()).setLanguage("en-US").setValue("101 Baconrista Dr."))))
                .setDateTime(
                        (new EventDateTime()).setStart("2023-04-12T11:20:50.52Z").setEnd("2023-04-12T16:20:50.52Z"));

        return payload;
    }

    /******************************
     *
     * Define an Event Ticket Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/eventticketobject
     *
     * @param String classId - The unique identifier for a class
     * @param String objectId - The unique identifier for an object
     * @return EventTicketObject payload - represents event ticket object resource
     *
     *******************************/
    public EventTicketObject makeEventTicketObjectResource(String classId, String objectId) {
        // Define the resource representation of the Object
        // values should be from your DB/services; here we hardcode information
        // below defines an eventticket object. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/eventticketobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/event-tickets/design

        // There is a client lib to help make the data structure. Newest client is on
        // devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        EventTicketObject payload = new EventTicketObject()
                // required fields
                .setClassId(classId).setId(objectId).setState("active")
                // optional. Check design and reference api for more
                .setTicketHolderName("Sir Bacon IV").setTicketNumber("123abc")
                .setSeatInfo((new EventSeat())
                        .setSeat((new LocalizedString())
                                .setDefaultValue((new TranslatedString()).setLanguage("en-US").setValue("42")))
                        .setRow((new LocalizedString())
                                .setDefaultValue((new TranslatedString()).setLanguage("en-US").setValue("G3")))
                        .setSection((new LocalizedString())
                                .setDefaultValue((new TranslatedString()).setLanguage("en-US").setValue("5")))
                        .setGate((new LocalizedString())
                                .setDefaultValue((new TranslatedString()).setLanguage("en-US").setValue("A"))));
        return payload;
    }

    /******************************
     *
     * Define an Boarding Pass/Flight Class
     *
     * See https://developers.google.com/pay/passes/reference/v1/flightclass
     *
     * @param String classId - The unique identifier for a class
     * @return FlightClass payload - represents boarding pass/flight class resource
     *
     *******************************/
    public FlightClass makeFlightClassResource(String classId) {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an flight class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/flightclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/boarding-passes/design

        // There is a client lib to help make the data structure. Newest client is on
        // devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        FlightClass payload = new FlightClass()
                // required
                .setId(classId).setIssuerName("Baconrista Flights").setReviewStatus("underReview")
                .setOrigin((new AirportInfo()).setAirportIataCode("LAX").setGate("A2").setTerminal("1"))
                .setDestination((new AirportInfo()).setAirportIataCode("SFO").setGate("C3").setTerminal("2"))
                .setFlightHeader((new FlightHeader()).setCarrier((new FlightCarrier().setCarrierIataCode("LX")))
                        .setFlightNumber("1234"))
                .setLocalScheduledDepartureDateTime("2023-07-02T15:30:00")
                // optional. Check design and reference api for more
                .setLocations((new ArrayList<LatLongPoint>() {
                    {
                        add((new LatLongPoint()).setLatitude(37.424015499999996).setLongitude(-122.09259560000001));
                    }
                })).setReview((new Review()).setComments("Real Auto Approval by system"))
                .setTextModulesData((new ArrayList<TextModuleData>() {
                    {
                        add((new TextModuleData()).setHeader("Custom Flight Details")
                                .setBody("Baconrista flights has served snacks in-flight since its founding."));
                    }
                })).setLinksModuleData((new LinksModuleData()).setUris((new ArrayList<Uri>() {
                    {
                        add((new Uri()).setDescription("Nearby Locations").setUri("http://maps.google.com/"));
                        add((new Uri()).setDescription("Call Customer Service").setUri("tel:6505555555"));
                    }
                }))).setImageModulesData((new ArrayList<ImageModuleData>() {
                    {
                        add((new ImageModuleData())
                                .setMainImage((new Image()).setSourceUri((new ImageUri()).setDescription("Coffee beans")
                                        .setUri("http://farm4.staticflickr.com/3738/12440799783_3dc3c20606_b.jpg"))));
                    }
                }));

        return payload;
    }

    /******************************
     *
     * Define an Boarding Pass Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/flightobject
     *
     * @param String classId - The unique identifier for a class
     * @param String objectId - The unique identifier for an object
     * @return FlightObject payload - represents boarding pass object resource
     *
     *******************************/
    public FlightObject makeFlightObjectResource(String classId, String objectId) {
        // Define the resource representation of the Object
        // values should be from your DB/services; here we hardcode information
        // below defines an boardingpass object. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/flightobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/boarding-passes/design

        // There is a client lib to help make the data structure. Newest client is on
        // devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        FlightObject payload = new FlightObject()
                // required fields
                .setClassId(classId).setId(objectId).setState("active").setPassengerName("Sir Bacon the IV")
                .setReservationInfo((new ReservationInfo()).setConfirmationCode("42aQw"))
                // optional. Check design and reference api for more
                .setBoardingAndSeatingInfo((new BoardingAndSeatingInfo()).setSeatNumber("42").setBoardingGroup("B"));
        return payload;
    }

    /******************************
     *
     * Define an Transit Class
     *
     * See https://developers.google.com/pay/passes/reference/v1/transitclass
     *
     * @param String classId - The unique identifier for a class
     * @return TransitClass payload - represents transit class resource
     *
     *******************************/
    public TransitClass makeTransitClassResource(String classId) {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an transit class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/transitclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/transit-passes/design

        // There is a client lib to help make the data structure. Newest client is on
        // devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        TransitClass payload = new TransitClass()
                // required
                .setId(classId).setIssuerName("Baconrista Bus").setReviewStatus("underReview").setTransitType("bus")
                .setLogo((new Image()).setSourceUri(
                        (new ImageUri()).setUri("https://live.staticflickr.com/65535/48690277162_cd05f03f4d_o.png")
                                .setDescription("Baconrista Bus")));
        return payload;
    }

    /******************************
     *
     * Define an Transit Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/transitobject
     *
     * @param String classId - The unique identifier for a class
     * @param String objectId - The unique identifier for an object
     * @return TransitObject payload - represents transit pass object resource
     *
     *******************************/
    public TransitObject makeTransitObjectResource(String classId, String objectId) {
        // Define the resource representation of the Object
        // values should be from your DB/services; here we hardcode information
        // below defines an transitpass object. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/transitobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/transit-passes/design

        // There is a client lib to help make the data structure. Newest client is on
        // devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        TransitObject payload = new TransitObject()
                // required fields
                .setClassId(classId).setId(objectId).setState("active").setTripType("oneWay")
                .setTicketLeg((new TicketLeg()).setOriginStationCode("LA")
                    .setOriginName((new LocalizedString()).setDefaultValue(
                            (new TranslatedString()).setLanguage("en-US").setValue("LA Transit Center")))
                    .setDepartureDateTime("2020-04-12T16:20:50.52Z")
                    .setArrivalDateTime("2020-04-12T20:20:50.52Z")
                    .setDestinationStationCode("SFO").setDestinationName((new LocalizedString()).setDefaultValue(
                            (new TranslatedString()).setLanguage("en-US").setValue("SFO Transit Center"))))
                // optional
                .setPassengerType("singlePassenger").setPassengerNames("Sir Bacon the IV")
                .setBarcode((new Barcode()).setType("qrCode").setValue("1234abc")
                        .setAlternateText("optional alternate text"));
        return payload;
    }
}
