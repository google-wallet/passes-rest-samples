/**
* Copyright 2019 Google Inc. All Rights Reserved.
*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
*     http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/
using System;
using System.Collections.Generic;
using System.Security.Cryptography;


namespace csharp
{
    /// <summary>
    /// Config
    /// Used to define constants for:
    /// a) authorizing REST calls
    /// b) sign JSON Web Token (JWT)
    /// </summary>
    public class Config
    {
        private static Config config = new Config();
        private string SERVICE_ACCOUNT_EMAIL_ADDRESS;
        private string SERVICE_ACCOUNT_FILE;
        private string ISSUER_ID;
        private List<string> ORIGINS;
        private string AUDIENCE;
        private string JWT_TYPE;
        private List<string> SCOPES;

        private string APPLICATION_NAME;    // this isn't required

        private Config()
        {
            try
            {
                // Identifiers of Service account
                this.SERVICE_ACCOUNT_EMAIL_ADDRESS = "ServiceAccountEmail@developer.gserviceaccount.com"; // CHANGEME
                this.SERVICE_ACCOUNT_FILE = "privatekey.json"; // CHANGEME. Path to file with private key and Google credential config

                // Used by the Google Pay API for Passes Client library
                this.APPLICATION_NAME = "my_appication_name"; // CHANGEME

                // Identifier of Google Pay API for Passes Merchant Center
                this.ISSUER_ID = "my_issuerId"; // CHANGEME

                // List of origins for save to phone button. Used for JWT
                // See https://developers.google.com/pay/passes/reference/s2w-reference
                this.ORIGINS = new List<string>() { "http://localhost:8080" };  // CHANGEME

                // Constants that are application agnostic. Used for JWT
                this.AUDIENCE = "google";
                this.JWT_TYPE = "savetoandroidpay";
                this.SCOPES = new List<string>(){"https://www.googleapis.com/auth/wallet_object.issuer"};
            }
            catch (Exception e)
            {
                System.Console.WriteLine(e.StackTrace);
            }
        }
        public string getServiceAccountEmailAddress()
        {
            return this.SERVICE_ACCOUNT_EMAIL_ADDRESS;
        }

        public string getServiceAccountFile()
        {
            return this.SERVICE_ACCOUNT_FILE;
        }

        public string getIssuerId()
        {
            return this.ISSUER_ID;
        }

        public List<string> getOrigins()
        {
            return this.ORIGINS;
        }

        public string getAudience()
        {
            return this.AUDIENCE;
        }

        public string getJwtType()
        {
            return this.JWT_TYPE;
        }

        public List<string> getScopes()
        {
            return this.SCOPES;
        }

        public string getApplicationName()
        {
            return this.APPLICATION_NAME;
        }

        public static Config getInstance()
        {
            if (config == null)
            {
                config = new Config();
            }
            return config;
        }
    }
}