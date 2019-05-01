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

###############################
#
# Define a Class
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
    # optional.  Check design and reference api to decide what's desirable
    ,"titleImage" : {
      "sourceUri" : {
        "uri" : "https://farm4.staticflickr.com/3723/11177041115_6e6a3b6f49_o.jpg"
        ,"description" : "titleImage-coffee"
      }
    }
  }

  return payload



###############################
#
# Define an Object
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
    # optional.  Check design and reference api to decide what's desirable
    ,"barcode": {
      "type": "qrCode"  #check reference API for types of barcode
      ,"value": "1234abc"
      ,"alternateText": "optional alternate text"
    }
  }

  return payload
