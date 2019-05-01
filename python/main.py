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

import config # contains constants
import services # methods that returns JWTs to be used to rend "save to phone" button or update specific pass data

SAVE_LINK = "https://www.android.com/payapp/savetoandroidpay/"; # Save link that uses JWT. See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email

def demoObjectJwt(verticalType ,classId, objectId):
  print('''

  #############################
  #
  #  Generates a signed "object" JWT.
  #  1 REST call is made to pre-insert class.
  #
  #  This JWT can be used in JS web button.
  #  If this JWT only contains 1 object, usually isn't too long; can be used in Android intents/redirects.
  #
  #############################

  ''')
  objectJwt = services.makeObjectJwt(verticalType, classId, objectId)

  if objectJwt is not None:
    print('This is an "object" jwt:\n%s\n' % (objectJwt) )
    print('you can decode it with a tool to see the unsigned JWT representation:\n%s\n' % ('https://developers.google.com/pay/passes/support/testing#test-and-debug-a-jwt') )
    print('Try this save link in your browser:\n%s%s' % (SAVE_LINK, objectJwt))

  return



def demoFatJwt(verticalType, classId, objectId):
  print('''

  #############################
  #
  #  Generates a signed "fat" JWT.
  #  No REST calls made.
  #
  #  Use fat JWT in JS web button.
  #  Fat JWT is too long to be used in Android intents.
  #  Possibly might break in redirects.
  #
  #############################

  ''')
  fatJwt = services.makeFatJwt(verticalType, classId, objectId)

  if fatJwt is not None:
    print('This is an "fat" jwt:\n%s\n' % (fatJwt) )
    print('you can decode it with a tool to see the unsigned JWT representation:\n%s\n' % ('https://developers.google.com/pay/passes/support/testing#test-and-debug-a-jwt') )
    print('Try this save link in your browser:\n%s%s\n' % (SAVE_LINK, fatJwt))
    print('However, because a "fat" jwt is long, they are not suited for hyperlinks (get truncated). Recommend only using "fat" JWt with web-JS button only. Check:\n%s' % ('https://developers.google.com/pay/passes/reference/s2w-reference'))

  return


def demoSkinnyJwt(verticalType, classId, objectId):
  print('''

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
  #############################

  ''')
  skinnyJwt = services.makeSkinnyJwt(verticalType, classId, objectId)

  if skinnyJwt is not None:
    print('This is an "skinny" jwt:\n%s\n' % (skinnyJwt) )
    print('you can decode it with a tool to see the unsigned JWT representation:\n%s\n' % ('https://developers.google.com/pay/passes/support/testing#test-and-debug-a-jwt') )
    print('Try this save link in your browser:\n%s%s\n' % (SAVE_LINK, skinnyJwt))
    print('this is the shortest type of JWT; recommended for Android intents/redirects\n')

  return



#############################
#
# RUNNER
#
# This script demonstrates using your services which make JWTs
#
# The JWTs are used to generate save links or JS Web buttons to save Pass(es)
#
# 1) Get credentials and check prerequisistes in: https://developers.google.com/pay/passes/samples/quickstart-python
# 2) Modify config.py so the credentials are correct
# 3) Try running it: python main.py . Check terminal output for server response, JWT, and save links.
#
#############################

# your classUid should be a hash based off of pass metadata. here we hardcode
classUid = 'my_class_id_01' # CHANGEME
# check Reference API for format of "id" (https://developers.google.com/pay/passes/reference/v1/offerclass/insert).
# must be alphanumeric characters, '.', '_', or '-'.
classId = '%s.%s' % (config.ISSUER_ID,classUid)

# your objectUid should be a hash based off of pass metadata. Here we hardcode
objectUid = 'my_object_Id_01' # CHANGEME
# check Reference API for format of "id" (https://developers.google.com/pay/passes/reference/v1/offerobject/insert).
# Must be alphanumeric characters, '.', '_', or '-'.
objectId = '%s.%s' % (config.ISSUER_ID,objectUid)

# demonstrate the different "services" that make links/values for frontend to render a functional "save to phone" button
verticalType = services.VerticalType.OFFER
demoFatJwt(verticalType, classId, objectId)
demoObjectJwt(verticalType, classId, objectId)
demoSkinnyJwt(verticalType, classId, objectId)
