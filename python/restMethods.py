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

# For OAuth 2.0
from google.oauth2 import service_account # pip install google-auth

# HTTP client For making REST API call with google-auth package
from google.auth.transport.requests import AuthorizedSession

# constants from config file
import config
import services


###############################
#
# Preparing server-to-server authorized API call with OAuth 2.0
#
# Use Google API client library to prepare credentials used to authorize a http client
# See https://developers.google.com/identity/protocols/OAuth2ServiceAccount?authuser=2#authorizingrequests
#
# @return Credentials credentials - Service Account credential for OAuth 2.0 signed JWT grants.
#
###############################
def makeOauthCredential():
  # the variables are in config file
  credentials = service_account.Credentials.from_service_account_file(
          config.SERVICE_ACCOUNT_FILE, scopes=config.SCOPES)

  return credentials

###############################
#
# Insert class with Google Pay API for Passes REST API
#
# See https://developers.google.com/pay/passes/reference/v1/
#
# @param VerticalType verticalType - type of pass
# @param Dict payload - represents class resource
# @return requests.Response response - response from REST call
#
###############################
def insertClass(verticalType, payload):

  headers = {
    'Accept': 'application/json',
    'Content-Type': 'application/json; charset=UTF-8'
  }
  credentials = makeOauthCredential()
  response = None

  # Define insert() REST call of target vertical
  uri = 'https://walletobjects.googleapis.com/walletobjects/v1'
  postfix = 'Class'
  path = createPath(verticalType, postfix)

  # There is no Google API for Passes Client Library for Python.
  # Authorize a http client with credential generated from Google API client library.
  ## see https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  authed_session = AuthorizedSession(credentials)

  # make the POST request to make an insert(); this returns a response object
  # other methods require different http methods; for example, get() requires authed_Session.get(...)
  # check the reference API to make the right REST call
  ## https://developers.google.com/pay/passes/reference/v1/
  ## https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  response = authed_session.post(
      uri+path          # REST API endpoint
      ,headers=headers  # Header; optional
      ,json=payload    # non-form-encoded Payload for POST. Check rest API for format based on method.
    )


  return response

###############################
#
# Get existing class with Google Pay API for Passes REST API
#
# See https://developers.google.com/pay/passes/reference/v1/
#
# @param VerticalType verticalType - type of pass
# @param String classId - unique identifier for a class
# @return requests.Response response - response from REST call
#
###############################
def getClass(verticalType, classId):

  headers = {
    'Accept': 'application/json',
    'Content-Type': 'application/json; charset=UTF-8'
  }
  credentials = makeOauthCredential()
  response = None

  # Define get() REST call of target vertical
  uri = 'https://walletobjects.googleapis.com/walletobjects/v1'

  postfix = 'Class'
  path = createPath(verticalType, postfix, classId)

  # There is no Google API for Passes Client Library for Python.
  # Authorize a http client with credential generated from Google API client library.
  ## see https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  authed_session = AuthorizedSession(credentials)

  # make the GET request to make an get(); this returns a response object
  # other methods require different http methods; for example, get() requires authed_Session.get(...)
  # check the reference API to make the right REST call
  ## https://developers.google.com/pay/passes/reference/v1/
  ## https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  response = authed_session.get(
      uri+path          # REST API endpoint
      ,headers=headers  # Header; optional
    )


  return response

###############################
#
# Insert defined object with Google Pay API for Passes REST API
#
# See https://developers.google.com/pay/passes/reference/v1/
#
# @param VerticalType verticalType - represents type of pass being generated
# @param Dict payload - represents class resource
# @return requests.Response response - response from REST call
#
###############################
def insertObject(verticalType, payload):

  headers = {
    'Accept': 'application/json',
    'Content-Type': 'application/json; charset=UTF-8'
  }
  credentials = makeOauthCredential()
  response = None

  # Define insert() REST call of target vertical
  uri = 'https://walletobjects.googleapis.com/walletobjects/v1'
  postfix = 'Object'
  path = createPath(verticalType, postfix)
  # There is no Google API for Passes Client Library for Python.
  # Authorize a http client with credential generated from Google API client library.
  ## see https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  authed_session = AuthorizedSession(credentials)

  # make the POST request to make an insert(); this returns a response object
  # other methods require different http methods; for example, get() requires authed_Session.get(...)
  # check the reference API to make the right REST call
  ## https://developers.google.com/pay/passes/reference/v1/
  ## https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  response = authed_session.post(
      uri+path          # REST API endpoint
      ,headers=headers  # Header; optional
      ,json=payload    # non-form-encoded Payload for POST. Check rest API for format based on method.
    )


  return response

###############################
#
# Get defined object with Google Pay API for Passes REST API
#
# See https://developers.google.com/pay/passes/reference/v1/
#
# @param String objectId - The unique identifier for an object.
# @return requests.Response response - response from REST call
#
###############################
def getObject(verticalType, objectId):

  headers = {
    'Accept': 'application/json',
    'Content-Type': 'application/json; charset=UTF-8'
  }
  credentials = makeOauthCredential()
  response = None

  # Define get() REST call of target vertical
  uri = 'https://walletobjects.googleapis.com/walletobjects/v1'
  postfix = 'Object'
  path = createPath(verticalType, postfix, objectId)

  # There is no Google API for Passes Client Library for Python.
  # Authorize a http client with credential generated from Google API client library.
  ## see https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  authed_session = AuthorizedSession(credentials)

  # make the GET request to make an get(); this returns a response object
  # other methods require different http methods; for example, get() requires authed_Session.get(...)
  # check the reference API to make the right REST call
  ## https://developers.google.com/pay/passes/reference/v1/
  ## https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  response = authed_session.get(
      uri+path          # REST API endpoint
      ,headers=headers  # Header; optional
    )


  return response

###############################
#
# Creates path for part of uri
#
# See https://developers.google.com/pay/passes/reference/v1/
#
#
# @param VerticalType verticalType - type of pass
# @param String postfix - postfix to use before passtype (object or class)
# @param String id_to_use - the id part of the path
# @return String path - /[pass type][object or class]/[id]
###############################
def createPath(verticalType, postfix, id_to_use=''):
  if verticalType == services.VerticalType.FLIGHT:
    path = '/%s%s/%s' % ("flight", postfix, id_to_use)
  elif verticalType == services.VerticalType.EVENTTICKET:
    path = '/%s%s/%s' % ("eventTicket", postfix, id_to_use)
  elif verticalType == services.VerticalType.GIFTCARD:
    path = '/%s%s/%s' % ("giftCard", postfix, id_to_use)
  elif verticalType == services.VerticalType.LOYALTY:
    path = '/%s%s/%s' % ("loyalty", postfix, id_to_use)
  elif verticalType == services.VerticalType.OFFER:
    path = '/%s%s/%s' % ("offer", postfix, id_to_use)      
  elif verticalType == services.VerticalType.TRANSIT:
    path = '/%s%s/%s' % ("transit", postfix, id_to_use)
  return path