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

import unittest
import restMethods
import resourceDefinitions
import config
import services
import uuid
import json
import warnings

def ignoreSocketWarnings(func):
    def testMethod(self, *args, **kwargs):
        with warnings.catch_warnings():
            warnings.simplefilter("ignore", ResourceWarning)
            func(self, *args, **kwargs)
    return testMethod
#############################
#
#  These are integration tests for this sample application's rest methods.
#
#
#############################
class test_restMethodsTest(unittest.TestCase):
    #############################
    #
    #  Tests saving an offer class and objct
    #
    #############################
    @ignoreSocketWarnings
    def test_insertOfferObjectAndClass(self):
        classResourcePayload = None
        objectResourcePayload = None
        classResponse = None
        objectResponse = None
        classUid = str(services.VerticalType.OFFER).split('.')[1] + '_CLASS_'+ str(uuid.uuid4()) 
        classId = '%s.%s' % (config.ISSUER_ID,classUid)

        objectUid = str(services.VerticalType.OFFER).split('.')[1] + '_OBJECT_'+ str(uuid.uuid4()) 
        objectId = '%s.%s' % (config.ISSUER_ID,objectUid)
        classResourcePayload, objectResourcePayload = services.getClassAndObjectDefinitions(services.VerticalType.OFFER, classId, objectId, classResourcePayload, objectResourcePayload)
        classResponse = restMethods.insertClass(services.VerticalType.OFFER, classResourcePayload)
        objectResponse = restMethods.insertObject(services.VerticalType.OFFER, objectResourcePayload)
        
        self.assertEqual(objectResponse.status_code, 200)
        self.assertEqual(classResponse.status_code, 200)
        
    #############################
    #
    #  Tests saving a loyalty class and object
    #
    #############################
    @ignoreSocketWarnings
    def test_insertLoyaltyObjectAndClass(self):
        classResourcePayload = None
        objectResourcePayload = None
        classResponse = None
        objectResponse = None
        classUid = str(services.VerticalType.LOYALTY).split('.')[1] + '_CLASS_'+ str(uuid.uuid4()) 
        classId = '%s.%s' % (config.ISSUER_ID,classUid)

        objectUid = str(services.VerticalType.LOYALTY).split('.')[1] + '_OBJECT_'+ str(uuid.uuid4()) 
        objectId = '%s.%s' % (config.ISSUER_ID,objectUid)
        classResourcePayload, objectResourcePayload = services.getClassAndObjectDefinitions(services.VerticalType.LOYALTY, classId, objectId, classResourcePayload, objectResourcePayload)
        classResponse = restMethods.insertClass(services.VerticalType.LOYALTY, classResourcePayload)
        objectResponse = restMethods.insertObject(services.VerticalType.LOYALTY, objectResourcePayload)
        
        self.assertEqual(objectResponse.status_code, 200)
        self.assertEqual(classResponse.status_code, 200)

    #############################
    #
    #  Tests saving a transit class and object
    #
    #############################
    @ignoreSocketWarnings
    def test_insertTransitObjectAndClass(self):
        classResourcePayload = None
        objectResourcePayload = None
        classResponse = None
        objectResponse = None
        classUid = str(services.VerticalType.TRANSIT).split('.')[1] + '_CLASS_'+ str(uuid.uuid4()) 
        classId = '%s.%s' % (config.ISSUER_ID,classUid)

        objectUid = str(services.VerticalType.TRANSIT).split('.')[1] + '_OBJECT_'+ str(uuid.uuid4()) 
        objectId = '%s.%s' % (config.ISSUER_ID,objectUid)
        classResourcePayload, objectResourcePayload = services.getClassAndObjectDefinitions(services.VerticalType.TRANSIT, classId, objectId, classResourcePayload, objectResourcePayload)
        classResponse = restMethods.insertClass(services.VerticalType.TRANSIT, classResourcePayload)
        objectResponse = restMethods.insertObject(services.VerticalType.TRANSIT, objectResourcePayload)
        
        self.assertEqual(objectResponse.status_code, 200)
        self.assertEqual(classResponse.status_code, 200)
    
    #############################
    #
    #  Tests saving a giftcard class and object
    #
    #############################
    @ignoreSocketWarnings
    def test_insertGiftCardObjectAndClass(self):
        classResourcePayload = None
        objectResourcePayload = None
        classResponse = None
        objectResponse = None
        classUid = str(services.VerticalType.GIFTCARD).split('.')[1] + '_CLASS_'+ str(uuid.uuid4()) 
        classId = '%s.%s' % (config.ISSUER_ID,classUid)

        objectUid = str(services.VerticalType.GIFTCARD).split('.')[1] + '_OBJECT_'+ str(uuid.uuid4()) 
        objectId = '%s.%s' % (config.ISSUER_ID,objectUid)
        classResourcePayload, objectResourcePayload = services.getClassAndObjectDefinitions(services.VerticalType.GIFTCARD, classId, objectId, classResourcePayload, objectResourcePayload)
        classResponse = restMethods.insertClass(services.VerticalType.GIFTCARD, classResourcePayload)
        objectResponse = restMethods.insertObject(services.VerticalType.GIFTCARD, objectResourcePayload)
        
        self.assertEqual(objectResponse.status_code, 200)
        self.assertEqual(classResponse.status_code, 200)
        
    #############################
    #
    #  Tests saving a event ticket class and object
    #
    #############################
    @ignoreSocketWarnings
    def test_insertEventTicketObjectAndClass(self):
        classResourcePayload = None
        objectResourcePayload = None
        classResponse = None
        objectResponse = None
        classUid = str(services.VerticalType.EVENTTICKET).split('.')[1] + '_CLASS_'+ str(uuid.uuid4()) 
        classId = '%s.%s' % (config.ISSUER_ID,classUid)

        objectUid = str(services.VerticalType.EVENTTICKET).split('.')[1] + '_OBJECT_'+ str(uuid.uuid4()) 
        objectId = '%s.%s' % (config.ISSUER_ID,objectUid)
        classResourcePayload, objectResourcePayload = services.getClassAndObjectDefinitions(services.VerticalType.EVENTTICKET, classId, objectId, classResourcePayload, objectResourcePayload)
        classResponse = restMethods.insertClass(services.VerticalType.EVENTTICKET, classResourcePayload)
        objectResponse = restMethods.insertObject(services.VerticalType.EVENTTICKET, objectResourcePayload)
        
        self.assertEqual(objectResponse.status_code, 200)
        self.assertEqual(classResponse.status_code, 200)
        
    #############################
    #
    #  Tests saving a boarding pass class and object
    #
    #############################
    @ignoreSocketWarnings
    def test_insertBoardingPassObjectAndClass(self):
        classResourcePayload = None
        objectResourcePayload = None
        classResponse = None
        objectResponse = None
        classUid = str(services.VerticalType.FLIGHT).split('.')[1] + '_CLASS_'+ str(uuid.uuid4()) 
        classId = '%s.%s' % (config.ISSUER_ID,classUid)

        objectUid = str(services.VerticalType.FLIGHT).split('.')[1] + '_OBJECT_'+ str(uuid.uuid4()) 
        objectId = '%s.%s' % (config.ISSUER_ID,objectUid)
        classResourcePayload, objectResourcePayload = services.getClassAndObjectDefinitions(services.VerticalType.FLIGHT, classId, objectId, classResourcePayload, objectResourcePayload)
        classResponse = restMethods.insertClass(services.VerticalType.FLIGHT, classResourcePayload)
        objectResponse = restMethods.insertObject(services.VerticalType.FLIGHT, objectResourcePayload)
        
        self.assertEqual(objectResponse.status_code, 200)
        self.assertEqual(classResponse.status_code, 200)

if __name__ == '__main__':
    unittest.main()