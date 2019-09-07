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

import config
import restMethods
import resourceDefinitions
import jwt

from enum import Enum

EXISTS_MESSAGE = "No changes will be made when saved by link. To update info, use update() or patch(). For an example, see https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/engage-through-google-pay#update-state\n"
NOT_EXIST_MESSAGE = "Will be inserted when user saves by link/button for first time\n"

#############################
#
#  These are services that you would expose to front end so they can generate save links or buttons.
#
#  Depending on your needs, you only need to implement 1 of the services.
#
#############################

#############################
#
#
#  See all the verticals: https://developers.google.com/pay/passes/guides/overview/basics/about-google-pay-api-for-passes
#
#############################
class VerticalType(Enum):
  OFFER = 1
  EVENTTICKET = 2
  FLIGHT = 3     # also referred to as Boarding Passes
  GIFTCARD = 4
  LOYALTY =5
  TRANSIT = 6

#############################
#
#  Output to explain various status codes from a get API call
#
#  @param requests.Response getCallResponse - response from a get call
#  @param String idType - identifier of type of get call.  "object" or "class"
#  @param String id - unique identifier of Pass for given idType
#  @param String checkClassId - optional. ClassId to check for if objectId exists, and idType == 'object'
#  @return void
#
#############################
def handleGetCallStatusCode(getCallResponse, idType, id, checkClassId=None):
  if getCallResponse.status_code == 200:  # id resource exists for this issuer account
    print('%sId: (%s) already exists. %s' % (idType, id, EXISTS_MESSAGE) )

    # for object get, do additional check
    if idType == "object":
      # check if object's classId matches target classId
      classIdOfObjectId = getCallResponse.json()['classId']
      if classIdOfObjectId != checkClassId and checkClassId is not None:
        raise ValueError('the classId of inserted object is (%s). It does not match the target classId (%s). The saved object will not have the class properties you expect.' % (classIdOfObjectId, checkClassId))
  elif getCallResponse.status_code == 404:  # id resource does not exist for this issuer account
    print('%sId: (%s) does not exist. %s' % (idType, id , NOT_EXIST_MESSAGE) )
  else:
    raise ValueError('Issue with getting %s.' % (idType), getCallResponse.text)

  return

#############################
#
#  Output to explain various status codes from a insert API call
#
#  @param requests.Response insertCallResponse - response from an insert call
#  @param String idType - identifier of type of get call.  "object" or "class"
#  @param String id - unique identifier of Pass for given idType
#  @param String checkClassId - optional. ClassId to check for if objectId exists, and idType == 'object'
#  @param VerticalType verticalType - optional. VerticalType to fetch ClassId of existing objectId.
#  @return void
#
#############################
def handleInsertCallStatusCode(insertCallResponse, idType, id, checkClassId=None, verticalType=None):
  if insertCallResponse.status_code == 200:
    print('%sId (%s) insertion success!\n' % (idType, id) )
  elif insertCallResponse.status_code == 409:  # id resource exists for this issuer account
    print('%sId: (%s) already exists. %s' % (idType, id, EXISTS_MESSAGE) )

    # for object insert, do additional check
    if idType == "object":
      getCallResponse = None
      # get existing object Id data
      getCallResponse = restMethods.getObject(verticalType, id) # if it is a new object Id, expected status is 409
      # check if object's classId matches target classId
      classIdOfObjectId = getCallResponse.json()['classId']
      if classIdOfObjectId != checkClassId and checkClassId is not None:
        raise ValueError('the classId of inserted object is (%s). It does not match the target classId (%s). The saved object will not have the class properties you expect.' % (classIdOfObjectId, checkClassId))
  else:
    raise ValueError('%s insert issue.' % (idType), insertCallResponse.text)

  return

#############################
#
#  Generates a signed "fat" JWT.
#  No REST calls made.
#
#  Use fat JWT in JS web button.
#  Fat JWT is too long to be used in Android intents.
#  Possibly might break in redirects.
#
# See https://developers.google.com/pay/passes/reference/v1/
#
#  @param VerticalType verticalType - type of pass
#  @param String classId - unique identifier for an class
#  @param String objectId - unique identifier for an object
#  @return String signedJwt - a signed JWT
#
#############################

def makeFatJwt(verticalType, classId, objectId):
  signedJwt = None
  classResourcePayload = None
  objectResourcePayload = None
  classResponse = None
  objectResponse = None

  try:
    # get class definition and object definition
    classResourcePayload, objectResourcePayload = getClassAndObjectDefinitions(verticalType, classId, objectId, classResourcePayload, objectResourcePayload)

    # see if Ids exist in Google backend
    ## for a Fat JWT, the first time a user hits the save button, the class and object are inserted
    classResponse = restMethods.getClass(verticalType, classId)
    objectResponse = restMethods.getObject(verticalType, objectId)

    # check response status. Check https://developers.google.com/pay/passes/reference/v1/statuscodes
    # check class get response. Will print out if class exists or not. Throws error if class resource is malformed.
    handleGetCallStatusCode(classResponse, "class", classId, None)

    # check object get response. Will print out if object exists or not. Throws error if object resource is malformed, or if existing objectId's classId does not match the expected classId
    handleGetCallStatusCode(objectResponse, "object", objectId, classId)

    # put into JSON Web Token (JWT) format for Google Pay API for Passes
    googlePassJwt = jwt.googlePassJwt()
    # need to add both class and object resource definitions into JWT because no REST calls made to pre-insert
    loadClassIntoJWT(verticalType, googlePassJwt, classResourcePayload)

    loadObjectIntoJWT(verticalType, googlePassJwt, objectResourcePayload)

    # sign JSON to make signed JWT
    signedJwt = googlePassJwt.generateSignedJwt()

  except ValueError as err:
      print(err.args)

  # return "fat" JWT. Try putting it into JS web button
  # note button needs to be rendered in local web server who's domain matched the ORIGINS
  # defined in the JWT. See https://developers.google.com/pay/passes/reference/s2w-reference
  return signedJwt


#############################
#
#  Generates a signed "object" JWT.
#  1 REST call is made to pre-insert class.
#
#  This JWT can be used in JS web button.
#  If this JWT only contains 1 object, usually isn't too long; can be used in Android intents/redirects.
#
#  See https://developers.google.com/pay/passes/reference/v1/
#
#  @param VerticalType verticalType - type of pass
#  @param String classId - unique identifier for an class
#  @param String objectId - unique identifier for an object
#  @return String signedJwt - a signed JWT
#
#############################

def makeObjectJwt(verticalType, classId, objectId):
  signedJwt = None
  classResourcePayload = None
  objectResourcePayload = None
  classResponse = None
  objectResponse = None

  try:
  # get class definition and object definition
    classResourcePayload, objectResourcePayload = getClassAndObjectDefinitions(verticalType, classId, objectId, classResourcePayload, objectResourcePayload)

    print('\nMaking REST call to insert class')
    # make authorized REST call to explicitly insert class into Google server.
    # if this is successful, you can check/update class definitions in Merchant Center GUI: https://pay.google.com/gp/m/issuer/list
    classResponse = restMethods.insertClass(verticalType, classResourcePayload)

    # check if object ID exist
    objectResponse = restMethods.getObject(verticalType, objectId) # if it is a new object Id, expected status is 409
  
    # continue based on response status. Check https://developers.google.com/pay/passes/reference/v1/statuscodes
    # check class insert response. Will print out if class insert succeeds or not. Throws error if class resource is malformed.
    handleInsertCallStatusCode(classResponse, "class", classId, None, verticalType)

    # check object get response. Will print out if object exists or not. Throws error if object resource is malformed, or if existing objectId's classId does not match the expected classId
    handleGetCallStatusCode(objectResponse, "object", objectId, classId)

    # put into JSON Web Token (JWT) format for Google Pay API for Passes
    googlePassJwt = jwt.googlePassJwt()
    loadObjectIntoJWT(verticalType, googlePassJwt, objectResourcePayload)

    # sign JSON to make signed JWT
    signedJwt = googlePassJwt.generateSignedJwt()

  except ValueError as err:
      print(err.args)

  # return "object" JWT. Try putting it into save link.
  # See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email
  return signedJwt

#############################
#
#  Generates a signed "skinny" JWT.
#  2 REST calls are made:
#    x1 pre-insert one classes
#    x1 pre-insert one object which uses previously inserted class
#
#  This JWT can be used in JS web button.
#  This is the shortest type of JWT; recommended for Android intents/redirects.
#
#  See https://developers.google.com/pay/passes/reference/v1/
#
#  @param VerticalType verticalType - type of pass
#  @param String classId - unique identifier for an class
#  @param String objectId - unique identifier for an object
#  @return String signedJwt - a signed JWT
#
#############################

def makeSkinnyJwt(verticalType, classId, objectId):

  signedJwt = None
  classResourcePayload = None
  objectResourcePayload = None
  classResponse = None
  objectResponse = None

  try:
    # get class definition and object definition
    classResourcePayload, objectResourcePayload = getClassAndObjectDefinitions(verticalType, classId, objectId, classResourcePayload, objectResourcePayload)

    print('\nMaking REST call to insert class: (%s)' % (classId))
    # make authorized REST call to explicitly insert class into Google server.
    # if this is successful, you can check/update class definitions in Merchant Center GUI: https://pay.google.com/gp/m/issuer/list
    classResponse = restMethods.insertClass(verticalType, classResourcePayload)

    print('\nMaking REST call to insert object')
    # make authorized REST call to explicitly insert object into Google server.
    objectResponse = restMethods.insertObject(verticalType, objectResourcePayload)

    # continue based on insert response status. Check https://developers.google.com/pay/passes/reference/v1/statuscodes
    # check class insert response. Will print out if class insert succeeds or not. Throws error if class resource is malformed.
    handleInsertCallStatusCode(classResponse, "class", classId, None, None)

    # check object insert response. Will print out if object insert succeeds or not. Throws error if object resource is malformed, or if existing objectId's classId does not match the expected classId
    handleInsertCallStatusCode(objectResponse, "object", objectId, classId, verticalType)

    # put into JSON Web Token (JWT) format for Google Pay API for Passes
    googlePassJwt = jwt.googlePassJwt()
    
    # only need to add objectId in JWT because class and object definitions were pre-inserted via REST call
    loadObjectIntoJWT(verticalType, googlePassJwt, {"id": objectId})

    # sign JSON to make signed JWT
    signedJwt = googlePassJwt.generateSignedJwt()

  except ValueError as err:
      print(err.args)

  # return "skinny" JWT. Try putting it into save link.
  # See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email
  return signedJwt


#############################
#
#  Gets a passes's class and object definitions and loads into payload objects
#
#  @param VerticalType verticalType - type of pass
#  @param String classId - unique identifier for an class
#  @param String classResourcePayload - payload for the class
#  @param String objectResourcePayload - payload for the object
#
#############################
def getClassAndObjectDefinitions(verticalType, classId, objectId, classResourcePayload, objectResourcePayload):
  # get class definition and object definition
  if verticalType == VerticalType.FLIGHT:
    classResourcePayload = resourceDefinitions.makeFlightClassResource(classId)
    objectResourcePayload = resourceDefinitions.makeFlightObjectResource(classId, objectId)
  elif verticalType == VerticalType.EVENTTICKET:
    classResourcePayload = resourceDefinitions.makeEventTicketClassResource(classId)
    objectResourcePayload = resourceDefinitions.makeEventTicketObjectResource(classId, objectId)
  elif verticalType == VerticalType.GIFTCARD:
    classResourcePayload = resourceDefinitions.makeGiftCardClassResource(classId)
    objectResourcePayload = resourceDefinitions.makeGiftCardObjectResource(classId, objectId)
  elif verticalType == VerticalType.LOYALTY:
    classResourcePayload = resourceDefinitions.makeLoyaltyClassResource(classId)
    objectResourcePayload = resourceDefinitions.makeLoyaltyObjectResource(classId, objectId)
  elif verticalType == VerticalType.OFFER:
    classResourcePayload = resourceDefinitions.makeOfferClassResource(classId)
    objectResourcePayload = resourceDefinitions.makeOfferObjectResource(classId, objectId)          
  elif verticalType == VerticalType.TRANSIT:
    classResourcePayload = resourceDefinitions.makeTransitClassResource(classId)
    objectResourcePayload = resourceDefinitions.makeTransitObjectResource(classId, objectId)
  return classResourcePayload, objectResourcePayload


#############################
#
#  Loads an object into a JWT
#
#  @param VerticalType verticalType - type of pass
#  @param googlePassJwt googlePassJwt - JWT object
#  @param String objectResourcePayload - object to insert
#
#############################
def loadObjectIntoJWT(verticalType, googlePassJwt, objectResourcePayload):
  if verticalType == VerticalType.FLIGHT:
    googlePassJwt.addFlightObject(objectResourcePayload)
  elif verticalType == VerticalType.EVENTTICKET:
    googlePassJwt.addEventTicketObject(objectResourcePayload)
  elif verticalType == VerticalType.GIFTCARD:
    googlePassJwt.addGiftcardObject(objectResourcePayload)
  elif verticalType == VerticalType.LOYALTY:
    googlePassJwt.addLoyaltyObject(objectResourcePayload)
  elif verticalType == VerticalType.OFFER:
    googlePassJwt.addOfferObject(objectResourcePayload)        
  elif verticalType == VerticalType.TRANSIT:
    googlePassJwt.addTransitObject(objectResourcePayload)

#############################
#
#  Loads a class into a JWT
#
#  @param VerticalType verticalType - type of pass
#  @param googlePassJwt googlePassJwt - JWT object
#  @param String classResourcePayload - class to insert
#
#############################
def loadClassIntoJWT(verticalType, googlePassJwt, classResourcePayload):
  if verticalType == VerticalType.FLIGHT:
    googlePassJwt.addFlightClass(classResourcePayload)
  elif verticalType == VerticalType.EVENTTICKET:
    googlePassJwt.addEventTicketClass(classResourcePayload)
  elif verticalType == VerticalType.GIFTCARD:
    googlePassJwt.addGiftcardClass(classResourcePayload)
  elif verticalType == VerticalType.LOYALTY:
    googlePassJwt.addLoyaltyClass(classResourcePayload)
  elif verticalType == VerticalType.OFFER:
    googlePassJwt.addOfferClass(classResourcePayload)       
  elif verticalType == VerticalType.TRANSIT:
    googlePassJwt.addTransitClass(classResourcePayload)