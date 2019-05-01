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
# Insert defined class with Google Pay API for Passes REST API
#
# See https://developers.google.com/pay/passes/reference/v1/offerclass/insert
#
# @param Dict payload - represents offer class resource.
# @return requests.Response response - response from REST call
#
###############################
def insertOfferClass(payload):

  headers = {
    'Accept': 'application/json',
    'Content-Type': 'application/json; charset=UTF-8'
  }
  credentials = makeOauthCredential()
  response = None

  # Define insert() REST call of target vertical
  uri = 'https://www.googleapis.com/walletobjects/v1'
  path = '/%sClass' % ("offer") # Resource representation is for an Offer, so endpoint for offerClass

  # There is no Google API for Passes Client Library for Python.
  # Authorize a http client with credential generated from Google API client library.
  ## see https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  authed_session = AuthorizedSession(credentials)

  # make the POST request to make an insert(); this returns a response object
  # other methods require different http methods; for example, get() requires authed_Session.get(...)
  # check the reference API to make the right REST call
  ## https://developers.google.com/pay/passes/reference/v1/offerclass/insert
  ## https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  response = authed_session.post(
      uri+path          # REST API endpoint
      ,headers=headers  # Header; optional
      ,json=payload    # non-form-encoded Payload for POST. Check rest API for format based on method.
    )


  return response

###############################
#
# Get defined class with Google Pay API for Passes REST API
#
# See https://developers.google.com/pay/passes/reference/v1/offerclass/get
#
# @param String classId - The unique identifier for a class.
# @return requests.Response response - response from REST call
#
###############################
def getOfferClass(classId):

  headers = {
    'Accept': 'application/json',
    'Content-Type': 'application/json; charset=UTF-8'
  }
  credentials = makeOauthCredential()
  response = None

  # Define get() REST call of target vertical
  uri = 'https://www.googleapis.com/walletobjects/v1'
  path = '/%sClass/%s' % ("offer", classId) # Resource representation is for an Offer, so endpoint for offerClass

  # There is no Google API for Passes Client Library for Python.
  # Authorize a http client with credential generated from Google API client library.
  ## see https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  authed_session = AuthorizedSession(credentials)

  # make the GET request to make an get(); this returns a response object
  # other methods require different http methods; for example, get() requires authed_Session.get(...)
  # check the reference API to make the right REST call
  ## https://developers.google.com/pay/passes/reference/v1/offerclass/get
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
# See https://developers.google.com/pay/passes/reference/v1/offerobject/insert
#
# @param Dict payload - represents offer object resource.
# @return requests.Response response - response from REST call
#
###############################
def insertOfferObject(payload):

  headers = {
    'Accept': 'application/json',
    'Content-Type': 'application/json; charset=UTF-8'
  }
  credentials = makeOauthCredential()
  response = None

  # Define insert() REST call of target vertical
  uri = 'https://www.googleapis.com/walletobjects/v1'
  path = '/%sObject' % ("offer") # Resource representation is for an Offer, so endpoint for offerClass

  # There is no Google API for Passes Client Library for Python.
  # Authorize a http client with credential generated from Google API client library.
  ## see https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  authed_session = AuthorizedSession(credentials)

  # make the POST request to make an insert(); this returns a response object
  # other methods require different http methods; for example, get() requires authed_Session.get(...)
  # check the reference API to make the right REST call
  ## https://developers.google.com/pay/passes/reference/v1/offerobject/insert
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
# See https://developers.google.com/pay/passes/reference/v1/offerobject/get
#
# @param String objectId - The unique identifier for an object.
# @return requests.Response response - response from REST call
#
###############################
def getOfferObject(objectId):

  headers = {
    'Accept': 'application/json',
    'Content-Type': 'application/json; charset=UTF-8'
  }
  credentials = makeOauthCredential()
  response = None

  # Define get() REST call of target vertical
  uri = 'https://www.googleapis.com/walletobjects/v1'
  path = '/%sObject/%s' % ("offer", objectId) # Resource representation is for an Offer, so endpoint for offerObject

  # There is no Google API for Passes Client Library for Python.
  # Authorize a http client with credential generated from Google API client library.
  ## see https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  authed_session = AuthorizedSession(credentials)

  # make the GET request to make an get(); this returns a response object
  # other methods require different http methods; for example, get() requires authed_Session.get(...)
  # check the reference API to make the right REST call
  ## https://developers.google.com/pay/passes/reference/v1/offerobject/get
  ## https://google-auth.readthedocs.io/en/latest/user-guide.html#making-authenticated-requests
  response = authed_session.get(
      uri+path          # REST API endpoint
      ,headers=headers  # Header; optional
    )


  return response