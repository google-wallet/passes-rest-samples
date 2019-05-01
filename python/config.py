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
# Config
#
# Define constants used to:
# a) authorize REST calls
# b) sign JSON Web Token (JWT)
#
###############################


# Identifiers of Service account
SERVICE_ACCOUNT_EMAIL_ADDRESS = 'ServiceAccountEmail@developer.gserviceaccount.com' # CHANGEME
SERVICE_ACCOUNT_FILE = 'privatekey.json' # CHANGEME. Path to file with private key and Google credential config

# Identifier of Google Pay API for Passes Merchant Center
ISSUER_ID = 'MY_ISSUER_ID'# CHANGEME

# List of origins for save to phone button. Required for the javascript webbutton only. # CHANGEME
## See https://developers.google.com/pay/passes/reference/s2w-reference
ORIGINS = [
    'http://localhost:8080']

# Constants that are application agnostic. Used for JWT
AUDIENCE = 'google'
JWT_TYPE = 'savetoandroidpay'
SCOPES = ['https://www.googleapis.com/auth/wallet_object.issuer']
