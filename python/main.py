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
import services # methods that returns JWTs to be used to rend "save to phone" button
import uuid # std library for unique identifier generation

SAVE_LINK = "https://pay.google.com/gp/v/save/" # Save link that uses JWT. See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email

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
    print('This is an "object" jwt:\n%s\n' % (objectJwt.decode('UTF-8')) )
    print('you can decode it with a tool to see the unsigned JWT representation:\n%s\n' % ('https://jwt.io') )
    print('Try this save link in your browser:\n%s%s' % (SAVE_LINK, objectJwt.decode('UTF-8')))

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
    print('This is a "fat" jwt:\n%s\n' % (fatJwt.decode('UTF-8')) )
    print('you can decode it with a tool to see the unsigned JWT representation:\n%s\n' % ('https://jwt.io') )
    print('Try this save link in your browser:\n%s%s\n' % (SAVE_LINK, fatJwt.decode('UTF-8')))
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
    print('This is an "skinny" jwt:\n%s\n' % (skinnyJwt.decode('UTF-8')) )
    print('you can decode it with a tool to see the unsigned JWT representation:\n%s\n' % ('https://jwt.io') )
    print('Try this save link in your browser:\n%s%s\n' % (SAVE_LINK, skinnyJwt.decode('UTF-8')))
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
# 1) Get credentials and check prerequisistes in: https://developers.google.com/pay/passes/samples/quickstart-python.
# 2) Modify config.py so the credentials are correct.
# 3) Try running it: python main.py . Check terminal output for server response, JWT, and save links.
#
#############################

choice = ''

while choice not in ['b', 'e', 'g', 'l', 'o', 't', 'q']: 
  choice = input(('\n\n*****************************\n'
                        'Which pass type would you like to demo?\n'
                        'b - Boarding Pass\n'
                        'e - Event Ticket\n'
                        'g - Gift Card\n'
                        'l - Loyalty\n'
                        'o - Offer\n'
                        't - Transit\n'
                        'q - Quit\n'
                        '\n\nEnter your choice:'))
  if choice == 'b':
    verticalType = services.VerticalType.FLIGHT
  elif choice == 'e':
    verticalType = services.VerticalType.EVENTTICKET
  elif choice == 'g':
    verticalType = services.VerticalType.GIFTCARD
  elif choice == 'l':
    verticalType = services.VerticalType.LOYALTY
  elif choice == 'o':
    verticalType = services.VerticalType.OFFER
  elif choice == 't':
    verticalType = services.VerticalType.TRANSIT
  elif choice == 'q':
    quit()
  else:
    print('\n* Invalid choice. Please select one of the pass types by entering it''s related letter.\n')

# your classUid should be a hash based off of pass metadata, for the demo we will use pass-type_class_uniqueid
classUid = str(verticalType).split('.')[1] + '_CLASS_'+ str(uuid.uuid4()) # CHANGEME
# check Reference API for format of "id" (https://developers.google.com/pay/passes/reference/v1/o).
# must be alphanumeric characters, '.', '_', or '-'.
classId = '%s.%s' % (config.ISSUER_ID,classUid)

# your objectUid should be a hash based off of pass metadata, for the demo we will use pass-type_object_uniqueid
objectUid = str(verticalType).split('.')[1] + '_OBJECT_'+ str(uuid.uuid4()) # CHANGEME
# check Reference API for format of "id" (https://developers.google.com/pay/passes/reference/v1/).
# Must be alphanumeric characters, '.', '_', or '-'.
objectId = '%s.%s' % (config.ISSUER_ID,objectUid)

# demonstrate the different "services" that make links/values for frontend to render a functional "save to phone" button
demoFatJwt(verticalType, classId, objectId)
demoObjectJwt(verticalType, classId, objectId)
demoSkinnyJwt(verticalType, classId, objectId)
