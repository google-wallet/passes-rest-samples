"""
Copyright 2019 Google Inc. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
"""
import datetime
###############################
#
# Define an Offer Class
#
# See https://developers.google.com/pay/passes/reference/v1/offerclass
#
# @param String classId - The unique identifier for a class
# @return Dict payload - represents Offer class resource
#
###############################
def makeOfferClassResource(classId):
  # Define the resource representation of the Class
  # values should be from your DB/services; here we hardcode information

  payload = {}

  # below defines an offer class. For more properties, check:
  # https://developers.google.com/pay/passes/reference/v1/offerclass/insert
  # https://developers.google.com/pay/passes/guides/pass-verticals/offers/design

  payload = {
    # required fields
    "id" : classId
    ,"issuerName" : "Bacon-Rista"
    ,"provider" : "offers-R-us"
    ,"redemptionChannel" : "online"
    ,"reviewStatus" : "underReview"
    ,"title" : "20% lattes"
    # optional
    ,"titleImage" : {
      "sourceUri" : {
        "uri" : "https://farm4.staticflickr.com/3723/11177041115_6e6a3b6f49_o.jpg"
        ,"description" : "titleImage-coffee"
      }
    }
    ,"locations": [{
        "kind": "walletobjects#latLongPoint"
        ,"latitude": 37.424015499999996
        ,"longitude": -122.09259560000001
      },{
        "kind": "walletobjects#latLongPoint"
        ,"latitude": 37.424354
        ,"longitude": -122.09508869999999
      },{
        "kind": "walletobjects#latLongPoint"
        ,"latitude": 37.7901435
        ,"longitude": -122.39026709999997
      },{
        "kind": "walletobjects#latLongPoint"
        ,"latitude": 40.7406578
        ,"longitude": -74.00208940000002
    }]
    ,"textModulesData": [
      {
        "header": "Details"
        ,"body": "20% off one cup of coffee at all Baconrista Coffee locations. " +
                  "Only one can be used per visit."
      },
      {
        "header": "About Baconrista",
        "body": "Since 2013, Baconrista Coffee has been committed to making high " +
                  "quality bacon coffee. Visit us in our stores or online at www.baconrista.com"
      }
    ]
    ,"linksModuleData": {
      "uris": [
        {
          "kind": "walletobjects#uri"
          ,"uri": "https://maps.google.com/"
          ,"description": "Nearby Locations"
        }
        ,{
          "kind": "walletobjects#uri"
          ,"uri": "tel:6505555555"
          ,"description": "Call Customer Service"
        }
      ]
    }
    ,"imageModulesData": [
      {
        "mainImage": {
          "kind": "walletobjects#image"
          ,"sourceUri": {
            "kind": "walletobjects#uri"
            ,"uri": "https://farm4.staticflickr.com/3738/12440799783_3dc3c20606_b.jpg"
            ,"description": "Coffee beans"
          }
        }
      }
    ]
  }

  return payload



###############################
#
# Define an Offer Object
#
# See https://developers.google.com/pay/passes/reference/v1/offerobject
#
# @param String classId - The unique identifier for a class
# @param String objectId - The unique identifier for an object
# @return Dict payload - represents Offer object resource
#
###############################
def makeOfferObjectResource(classId, objectId):
  # Define the resource representation of the Object
  # values should be from your DB/services; here we hardcode information

  payload = {}

  # below defines an offer object. For more properties, check:
  # https://developers.google.com/pay/passes/reference/v1/offerobject/insert
  # https://developers.google.com/pay/passes/guides/pass-verticals/offers/design

  payload = {
    # required fields
    "id" : objectId
    ,"classId" : classId
    ,"state" : "active"
    # optional
    ,"barcode": {
      "type": "qrCode"  #check reference API for types of barcode
      ,"value": "1234abc"
      ,"alternateText": "optional alternate text"
    }
    ,"validTimeInterval": {
      "kind": "walletobjects#timeInterval"
      ,"start": {
        "date": "2023-06-12T23:20:50.52Z"
      }
      ,"end": {
        "date": "2023-12-12T23:20:50.52Z"
      }
    }
  }

  return payload

###############################
#
# Define a Loyalty Class
#
# See https://developers.google.com/pay/passes/reference/v1/loyaltyclass
#
# @param String classId - The unique identifier for a class
# @return Dict payload - represents Loyalty class resource
#
###############################
def makeLoyaltyClassResource(classId):
  # Define the resource representation of the Class
  # values should be from your DB/services; here we hardcode information

  payload = {}

  # below defines an Loyalty class. For more properties, check:
  # https://developers.google.com/pay/passes/reference/v1/loyaltyclass/insert
  # https://developers.google.com/pay/passes/guides/pass-verticals/loyalty/design

  payload = {
    # required fields
    "id": classId
    ,"issuerName": "Baconrista"
    ,"programName": "Baconrista Rewards"
    ,"programLogo": {
        "kind": "walletobjects#image"
        ,"sourceUri": {
            "kind": "walletobjects#uri"
            ,"uri": "http://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg"
        }
    }
    ,"reviewStatus": "underReview"
    # optional
    ,"textModulesData": [{
        "header": "Rewards details",
        "body": "Welcome to Baconrista rewards.  Enjoy your rewards for being a loyal customer. " +
        "10 points for ever dollar spent.  Redeem your points for free coffee, bacon and more! "
    }]
    ,"linksModuleData": {
        "uris": [
            {
                "kind": "walletobjects#uri"
                ,"uri": "http://maps.google.com/"
                ,"description": "Nearby Locations"
            }, {
                "kind": "walletobjects#uri"
                ,"uri": "tel:6505555555"
                ,"description": "Call Customer Service"
            }]
    }
    ,"imageModulesData": [
        {
            "mainImage": {
                "kind": "walletobjects#image"
                ,"sourceUri": {
                    "kind": "walletobjects#uri"
                    ,"uri":  "http://farm4.staticflickr.com/3738/12440799783_3dc3c20606_b.jpg"
                    ,"description": "Coffee beans"
                }
            }
        }
    ]
    ,"messages": [{
        "header": "Welcome to Banconrista Rewards!"
        ,"body": "Featuring our new bacon donuts."
        ,"kind": "walletobjects#walletObjectMessage"
    }]
    ,"rewardsTier": "Gold"
    ,"rewardsTierLabel": "Tier"
    ,"locations": [{
        "kind": "walletobjects#latLongPoint"
        ,"latitude": 37.424015499999996
        ,"longitude": -122.09259560000001
      },{
        "kind": "walletobjects#latLongPoint"
        ,"latitude": 37.424354
        ,"longitude": -122.09508869999999
      },{
        "kind": "walletobjects#latLongPoint"
        ,"latitude": 37.7901435
        ,"longitude": -122.39026709999997
      },{
        "kind": "walletobjects#latLongPoint"
        ,"latitude": 40.7406578
        ,"longitude": -74.00208940000002
    }]
  }
  return payload



###############################
#
# Define a Loyalty Object
#
# See https://developers.google.com/pay/passes/reference/v1/loyaltyobject
#
# @param String classId - The unique identifier for a class
# @param String objectId - The unique identifier for an object
# @return Dict payload - represents Loyalty object resource
#
###############################
def makeLoyaltyObjectResource(classId, objectId):
  # Define the resource representation of the Object
  # values should be from your DB/services; here we hardcode information

  payload = {}

  # below defines an loyalty object. For more properties, check:
  # https://developers.google.com/pay/passes/reference/v1/loyaltyobject/insert
  # https://developers.google.com/pay/passes/guides/pass-verticals/loyalty/design

  payload = {
    # required fields
    "id" : objectId
    ,"classId" : classId
    ,"state" : "active"
    # optional
    ,"accountId": "1234567890"
    ,"accountName": "Jane Doe"
    ,"barcode": {
        "alternateText": "12345"
        ,"type": "code128"
        ,"value": "28343E3"
    }
    ,"textModulesData": [{
        "header": "Jane\"s Baconrista Rewards"
        ,"body": "Save more at your local Mountain View store Jane. " +
        " You get 1 bacon fat latte for every 5 coffees purchased.  " +
        "Also just for you, 10% off all pastries in the Mountain View store."
    }]
    ,"linksModuleData": {
        "uris": [
            {
                "kind": "walletobjects#uri"
                ,"uri": "http://www.google.com/"
                ,"description": "My Baconrista Account"
            }]
    }
    ,"infoModuleData": {
        "labelValueRows": [{
            "columns": [{
                "label": "Next Reward in"
                ,"value": "2 coffees"
            }, {
                "label": "Member Since"
                ,"value": "01/15/2013"
            }]
        }, {
            "columns": [{
                "label": "Local Store"
                ,"value": "Mountain View"
            }]
        }]
        ,"showLastUpdateTime": "true"
    }
    ,"messages": [{
        "header": "Jane, welcome to Banconrista Rewards"
        ,"body": "Thanks for joining our program. Show this message to " +
        "our barista for your first free coffee on us!"
        ,"kind": "walletobjects#walletObjectMessage"
    }],
    "loyaltyPoints": {
        "balance": {
            "string": "800"
        },
        "label": "Points"
    }
    ,"locations": [{
      "kind": "walletobjects#latLongPoint"
      ,"latitude": 37.793484
      ,"longitude": -122.394380
    }]
  }

  return payload

###############################
#
# Define a Gift Card Class
#
# See https://developers.google.com/pay/passes/reference/v1/giftcardclass
#
# @param String classId - The unique identifier for a class
# @return Dict payload - represents Gift Card class resource
#
###############################
def makeGiftCardClassResource(classId):
  # Define the resource representation of the Class
  # values should be from your DB/services; here we hardcode information

  payload = {}

  # below defines an gift card class. For more properties, check:
  # https://developers.google.com/pay/passes/reference/v1/giftcardclass/insert
  # https://developers.google.com/pay/passes/guides/pass-verticals/gift-cards/design

  payload = {
    # required fields
    "id" : classId
    ,"issuerName" : "Baconrista"
    ,"reviewStatus" : "underReview"
    # optional
    ,"merchantName": "Baconrista"
    ,"programLogo": {
        "kind": "walletobjects#image"
        ,"sourceUri": {
            "kind": "walletobjects#uri"
            ,"uri": "http://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg"
        }
    }
    ,"textModulesData": [{
      "header": "Where to Redeem"
      ,"body": "All US gift cards are redeemable in any US and Puerto Rico" +
              " Baconrista retail locations, or online at Baconrista.com where"
              " available, for merchandise or services."
    }]
    ,"linksModuleData": {
      "uris": [
        {
          "kind": "walletobjects#uri"
          ,"uri": "http://google.com"
          ,"description": "Baconrista"
        }]
    }
    ,"locations": [{
        "kind": "walletobjects#latLongPoint"
        ,"latitude": 37.793484
        ,"longitude": -122.394380
    }]
    ,"allowMultipleUsersPerObject": True
  }

  return payload



###############################
#
# Define a Gift Card Object
#
# See https://developers.google.com/pay/passes/reference/v1/giftcardobject
#
# @param String classId - The unique identifier for a class
# @param String objectId - The unique identifier for an object
# @return Dict payload - represents Gift Card object resource
#
###############################
def makeGiftCardObjectResource(classId, objectId):
  # Define the resource representation of the Object
  # values should be from your DB/services; here we hardcode information

  payload = {}

  # below defines an gift card object. For more properties, check:
  # https://developers.google.com/pay/passes/reference/v1/giftcardobject/insert
  # https://developers.google.com/pay/passes/guides/pass-verticals/gift-cards/design

  payload = {
    # required fields
    "id" : objectId
    ,"classId" : classId
    ,"state" : "active"
    ,"cardNumber" : "123jkl4889"
    # optional
    ,"barcode": {
      "type": "qrCode"  #check reference API for types of barcode
      ,"value": "1234abc"
      ,"alternateText": "optional alternate text"
    },
    "pin" : "1111"
    ,"balance" : {
      "kind" : "walletobjects#money"
      ,"micros" : 20000000
      ,"currencyCode" : "USD"
    }
    ,"balanceUpdateTime" : {
      "date" : datetime.datetime.utcnow().isoformat("T") + "Z"
    }
    ,"textModulesData": [{
      "header": "Earn double points"
      ,"body": "Jane, don\"t forget to use your Baconrista Rewards when  " +
              "paying with this gift card to earn additional points. "
    }]
    ,"linksModuleData": {
      "uris": [
        {
          "kind": "walletobjects#uri"
          ,"uri": "http://google.com"
          ,"description": "My Baconrista Gift Card Purchases"
        }]
    }
  }

  return payload

###############################
#
# Define an Event Ticket Class
#
# See https://developers.google.com/pay/passes/reference/v1/eventticketclass
#
# @param String classId - The unique identifier for a class
# @return Dict payload - represents Event Ticket class resource
#
###############################

def makeEventTicketClassResource(classId):
  # Define the resource representation of the Class
  # values should be from your DB/services; here we hardcode information

  payload = {}

  # below defines an event ticket class. For more properties, check:
  # https://developers.google.com/pay/passes/reference/v1/eventticketclass/insert
  # https://developers.google.com/pay/passes/guides/pass-verticals/event-tickets/design

  payload = {
    # required fields
    "id": classId
    ,"issuerName": "Baconrista Stadium"
    ,"eventName": {
      "defaultValue": {
        "language": "en-US",
        "value": "Bacon Coffee Fun Event"
      }
    }
    ,"reviewStatus": "underReview"
    # optional
    ,"locations": [{
        "kind": "walletobjects#latLongPoint"
        ,"latitude": 37.424015499999996
        ,"longitude": -122.09259560000001
    }]
    ,"review": {
        "comments": "Real auto approval by system"
    }
    ,"textModulesData": [{
        "header": "Custom Details"
        ,"body": "Baconrista events have pushed the limits since its founding."
    }]
    ,"linksModuleData": {
        "uris": [{
            "kind": "walletobjects#uri"
            ,"uri": "http://maps.google.com/"
            ,"description": "Nearby Locations"
        }, {
            "kind": "walletobjects#uri"
            ,"uri": "tel:6505555555",
            "description": "Call Customer Service"
        }]
    }
    ,"imageModulesData": [{
        "mainImage": {
            "kind": "walletobjects#image"
            ,"sourceUri": {
                "kind": "walletobjects#uri"
                ,"uri": "http://farm4.staticflickr.com/3738/12440799783_3dc3c20606_b.jpg"
                ,"description": "Coffee beans"
            }
        }
    }],
    "logo": {
        "kind": "walletobjects#image"
          ,"sourceUri": {
            "kind": "walletobjects#uri"
            ,"uri": "https://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg"
            ,"description": "Baconrista stadium logo"
        }
    }
    ,"venue": {
        "kind": "walletobjects#eventVenue"
          ,"name": {
            "kind": "walletobjects#localizedString"
            ,"defaultValue": {
              "kind": "walletobjects#translatedString"
              ,"language": "en-us"
              ,"value": "Baconrista Stadium"
            }
        },
          "address": {
            "kind": "walletobjects#localizedString"
            ,"defaultValue": {
              "kind": "walletobjects#translatedString"
              ,"language": "en-us"
              ,"value": "101 Baconrista Dr."
            }
        }
    }
    ,"dateTime": {
      "kind": "walletobjects#eventDateTime"
      ,"start": "2023-04-12T11:20:50.52Z"
      ,"end": "2023-04-12T16:20:50.52Z"
    }
  }
  return payload



###############################
#
# Define an Event Ticket Object
#
# See https://developers.google.com/pay/passes/reference/v1/eventticketobject
#
# @param String classId - The unique identifier for a class
# @param String objectId - The unique identifier for an object
# @return Dict payload - represents Event Ticket object resource
#
###############################
def makeEventTicketObjectResource(classId, objectId):
  # Define the resource representation of the Object
  # values should be from your DB/services; here we hardcode information

  payload = {}

  # below defines an event ticket object. For more properties, check:
  # https://developers.google.com/pay/passes/reference/v1/eventticketobject/insert
  # https://developers.google.com/pay/passes/guides/pass-verticals/event-tickets/design

  payload = {
    # required fields
    "id" : objectId
    ,"classId" : classId
    ,"state" : "active"
    # optional
    ,"barcode": {
      "kind": "walletobjects#barcode"
      ,"type": "upcA"
      ,"value": "123456789012"
      ,"alternateText": "12345"
    }
    ,"seatInfo": {
        "kind": "walletobjects#eventSeat"
        ,"seat": {
            "kind": "walletobjects#localizedString"
            ,"defaultValue": {
                "kind": "walletobjects#translatedString",
                "language": "en-us",
                "value": "42"
            }
        }
        ,"row": {
            "kind": "walletobjects#localizedString"
            ,"defaultValue": {
                "kind": "walletobjects#translatedString"
                ,"language": "en-us"
                ,"value": "G3"
            }
        }
        ,"section": {
            "kind": "walletobjects#localizedString"
            ,"defaultValue": {
                "kind": "walletobjects#translatedString"
                ,"language": "en-us"
                ,"value": "5"
            }
        }
        ,"gate": {
            "kind": "walletobjects#localizedString"
            ,"defaultValue": {
                "kind": "walletobjects#translatedString"
                ,"language": "en-us"
                ,"value": "A"
            }
        }
    }
    ,"ticketHolderName": "Sir Bacon IV"
    ,"ticketNumber": "123abc"
  }

  return payload

###############################
#
# Define a Boarding Pass (Flight) Class
#
# See https://developers.google.com/pay/passes/reference/v1/flightclass
#
# @param String classId - The unique identifier for a class
# @return Dict payload - represents Flight class resource
#
###############################
def makeFlightClassResource(classId):
  # Define the resource representation of the Class
  # values should be from your DB/services; here we hardcode information

  payload = {}

  # below defines a flight class. For more properties, check:
  # https://developers.google.com/pay/passes/reference/v1/flightclass/insert
  # https://developers.google.com/pay/passes/guides/pass-verticals/boarding-passes/design

  payload = {
    # required fields
    "id": classId
    ,"issuerName": "Baconrista Flights"
    ,"destination" : {
      "airportIataCode" : "SFO"
      ,"gate" : "C3"
      ,"terminal" : "2"
    }
    ,"flightHeader" : {
      "carrier" : {
        "carrierIataCode" : "LX"
      }
      ,"flightNumber" : "123"
    },
    "origin" : {
      "airportIataCode" : "LAX"
      ,"gate" : "A2"
      ,"terminal" : "1"
    }
    ,"localScheduledDepartureDateTime" : "2023-07-02T15:30:00"
    ,"reviewStatus": "underReview"
    # optional
    ,"locations": [{
        "kind": "walletobjects#latLongPoint"
        ,"latitude": 37.424015499999996
        ,"longitude": -122.09259560000001
    }],
    "review": {
        "comments": "Real auto approval by system"
    },
    "textModulesData": [
        {
        "header": "Custom Flight Details"
        ,"body": "Baconrista flights has served snacks in-flight since its founding."
        }
      ]
    ,"linksModuleData": {
      "uris": [
        {
          "kind": "walletobjects#uri"
          ,"uri": "http://maps.google.com/"
          ,"description": "Nearby Locations"
        },{
          "kind": "walletobjects#uri"
          ,"uri": "tel:6505555555"
          ,"description": "Call Customer Service"
        }]
    }
    ,"imageModulesData": [
      {
        "mainImage": {
          "kind": "walletobjects#image"
          ,"sourceUri": {
            "kind": "walletobjects#uri"
            ,"uri":  "http://farm4.staticflickr.com/3738/12440799783_3dc3c20606_b.jpg"
            ,"description": "Flight perks"
          }
        }
      }
    ]
  }
  return payload



###############################
#
# Define an Boarding Pass(Flight) Object
#
# See https://developers.google.com/pay/passes/reference/v1/flightobject
#
# @param String classId - The unique identifier for a class
# @param String objectId - The unique identifier for an object
# @return Dict payload - represents flight object resource
#
###############################
def makeFlightObjectResource(classId, objectId):
  # Define the resource representation of the Object
  # values should be from your DB/services; here we hardcode information

  payload = {}

  # below defines an flight object. For more properties, check:
  # https://developers.google.com/pay/passes/reference/v1/flightobject/insert
  # https://developers.google.com/pay/passes/guides/pass-verticals/boarding-passes/design

  payload = {
    # required fields
    "classId": classId
    ,"id": objectId
    ,"state": "active"
    ,"passengerName" : "Sir Bacon the IV"
    ,"reservationInfo" : {
      "confirmationCode" : "42aQw"
    },
    # optional
    "boardingAndSeatingInfo" : {
      "seatNumber" : "42"
      ,"boardingGroup" : "B"
    }
  }

  return payload

###############################
#
# Define a Transit Pass Class
#
# See https://developers.google.com/pay/passes/reference/v1/transitclass
#
# @param String classId - The unique identifier for a class
# @return Dict payload - represents Transit class resource
#
###############################
def makeTransitClassResource(classId):
  # Define the resource representation of the Class
  # values should be from your DB/services; here we hardcode information

  payload = {}

  # below defines a transit class. For more properties, check:
  # https://developers.google.com/pay/passes/reference/v1/transitclass/insert
  # https://developers.google.com/pay/passes/guides/pass-verticals/transit-passes/design

  payload = {
    # required fields
    "id": classId
    ,"issuerName": "Baconrista Bus"
    ,"reviewStatus": "underReview"
    ,"transitType": "bus"
    ,"logo": {
        "kind": "walletobjects#image",
        "sourceUri": {
            "kind": "walletobjects#uri",
            "uri": "https://live.staticflickr.com/65535/48690277162_cd05f03f4d_o.png",
            "description": "super duper logo"
        }
    }
  }
  return payload



###############################
# 
# Define an Transit Pass Object
#
# See https://developers.google.com/pay/passes/reference/v1/transitobject
#
# @param String classId - The unique identifier for a class
# @param String objectId - The unique identifier for an object
# @return Dict payload - represents transit object resource
#
###############################
def makeTransitObjectResource(classId, objectId):
  # Define the resource representation of the Object
  # values should be from your DB/services; here we hardcode information

  payload = {}

  # below defines an transit object. For more properties, check:
  # https://developers.google.com/pay/passes/reference/v1/transitobject/insert
  # https://developers.google.com/pay/passes/guides/pass-verticals/transit-passes/design

  payload = {
    # required fields
    "classId": classId
    ,"id": objectId
    ,"state": "active"
    ,"tripType":"oneWay"
    # optional
    ,"barcode": {
      "type": "qrCode"  #check reference API for types of barcode
      ,"value": "1234abc"
      ,"alternateText": "optional alternate text"
    }    
    ,"passengerType" : "singlePassenger"
    ,"passengerNames": "Sir Bacon the IV"
    ,"ticketLeg": {
      "originStationCode": "LA"
      ,"originName": {
        "kind": "walletobjects#localizedString"
        ,"translatedValues": [
            {
              "kind": "walletobjects#translatedString"
              ,"language": "en-us"
              ,"value": "LA Transit Center"
            }
          ]
        ,"defaultValue": {
          "kind": "walletobjects#translatedString"
          ,"language": "en-us"
          ,"value": "LA Transit Center"
        }
      }
      ,"destinationStationCode": "SFO"
      ,"destinationName": {
        "kind": "walletobjects#localizedString"
        ,"translatedValues": [
          {
            "kind": "walletobjects#translatedString"
            ,"language": "en-us"
            ,"value": "SFO Transit Center"
          }
        ]
        ,"defaultValue": {
          "kind": "walletobjects#translatedString"
          ,"language": "en-us"
          ,"value": "SFO Transit Center"
        }
      }
      ,"departureDateTime": "2020-04-12T16:20:50.52Z"
      ,"arrivalDateTime": "2020-04-12T20:20:50.52Z"
      ,"fareName": {
        "kind": "walletobjects#localizedString"
        ,"translatedValues": [
          {
            "kind": "walletobjects#translatedString"
          ,"language": "en-us"
          ,"value": "Anytime Single Use"
          }
        ],
        "defaultValue": {
          "kind": "walletobjects#translatedString"
          ,"language": "en-us"
          ,"value": "Anytime Single Use"
        }
      }
    }
  }
  return payload

