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
import time

# for jwt signing. see https://google-auth.readthedocs.io/en/latest/reference/google.auth.jwt.html#module-google.auth.jwt
from google.auth import crypt as cryptGoogle
from google.auth import jwt as jwtGoogle

#############################
#
# class that defines JWT format for a Google Pay Pass.
#
# to check the JWT protocol for Google Pay Passes, check:
# https://developers.google.com/pay/passes/reference/s2w-reference#google-pay-api-for-passes-jwt
#
# also demonstrates RSA-SHA256 signing implementation to make the signed JWT used
# in links and buttons. Learn more:
# https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay
#
#############################

class googlePassJwt:
  def __init__(self):
    self.audience = config.AUDIENCE
    self.type = config.JWT_TYPE
    self.iss = config.SERVICE_ACCOUNT_EMAIL_ADDRESS
    self.origins = config.ORIGINS
    self.iat = int(time.time())
    self.payload = {}

    # signer for RSA-SHA256. Uses same private key used in OAuth2.0
    self.signer = cryptGoogle.RSASigner.from_service_account_file(config.SERVICE_ACCOUNT_FILE)

  def addOfferClass(self, resourcePayload):
    self.payload.setdefault('offerClasses',[])
    self.payload['offerClasses'].append(resourcePayload)

  def addOfferObject(self, resourcePayload):
    self.payload.setdefault('offerObjects',[])
    self.payload['offerObjects'].append(resourcePayload)

  def addLoyaltyClass(self, resourcePayload):
    self.payload.setdefault('loyaltyClasses',[])
    self.payload['loyaltyClasses'].append(resourcePayload)

  def addLoyaltyObject(self, resourcePayload):
    self.payload.setdefault('loyaltyObjects',[])
    self.payload['loyaltyObjects'].append(resourcePayload)

  def addGiftcardClass(self, resourcePayload):
    self.payload.setdefault('giftCardClasses',[])
    self.payload['giftCardClasses'].append(resourcePayload)

  def addGiftcardObject(self, resourcePayload):
    self.payload.setdefault('giftCardObjects',[])
    self.payload['giftCardObjects'].append(resourcePayload)

  def addEventTicketClass(self, resourcePayload):
    self.payload.setdefault('eventTicketClasses',[])
    self.payload['eventTicketClasses'].append(resourcePayload)

  def addEventTicketObject(self, resourcePayload):
    self.payload.setdefault('eventTicketObjects',[])
    self.payload['eventTicketObjects'].append(resourcePayload)

  def addFlightClass(self, resourcePayload):
    self.payload.setdefault('flightClasses',[])
    self.payload['flightClasses'].append(resourcePayload)

  def addFlightObject(self, resourcePayload):
    self.payload.setdefault('flightObjects',[])
    self.payload['flightObjects'].append(resourcePayload)

  def addTransitClass(self, resourcePayload):
    self.payload.setdefault('transitClasses',[])
    self.payload['transitClasses'].append(resourcePayload)

  def addTransitObject(self, resourcePayload):
    self.payload.setdefault('transitObjects',[])
    self.payload['transitObjects'].append(resourcePayload)

  def generateUnsignedJwt(self):
    unsignedJwt = {}
    unsignedJwt['iss'] = self.iss
    unsignedJwt['aud'] = self.audience
    unsignedJwt['typ'] = self.type
    unsignedJwt['iat'] = self.iat
    unsignedJwt['payload'] = self.payload
    unsignedJwt['origins'] = self.origins

    return unsignedJwt

  def generateSignedJwt(self):
    jwtToSign = self.generateUnsignedJwt()
    signedJwt = jwtGoogle.encode(self.signer, jwtToSign)

    return signedJwt


