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

import com.google.api.client.util.PemReader;
import com.google.api.client.util.SecurityUtils;

import org.json.JSONObject;

import java.io.Reader;
import java.io.StringReader;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.security.KeyFactory;
import java.security.interfaces.RSAPrivateKey;
import java.security.spec.PKCS8EncodedKeySpec;
import java.util.ArrayList;

/******************************
*
*  Config
*
*  Define constants used to:
*  a) authorize REST calls
*  b) sign JSON Web Token (JWT)
*
********************************/

public class Config {

    private static Config config = new Config();
    private String SERVICE_ACCOUNT_EMAIL_ADDRESS;
    private String SERVICE_ACCOUNT_FILE;
    private String ISSUER_ID;
    private ArrayList<String> ORIGINS;
    private String AUDIENCE;
    private String JWT_TYPE;
    private ArrayList<String> SCOPES;
    private RSAPrivateKey SERVICE_ACCOUNT_PRIVATE_KEY;

    private String APPLICATION_NAME;    // this isn't required


    private Config() {
        // Identifiers of Service account
        this.SERVICE_ACCOUNT_EMAIL_ADDRESS = "ServiceAccountEmail@developer.gserviceaccount.com"; // CHANGEME
        this.SERVICE_ACCOUNT_FILE = String.format("src/main/resources/%s", "privatekey.json"); // CHANGEME. Path to file with private key and Google credential config

        // Used by the Google Pay API for Passes Client library
        this.APPLICATION_NAME = "my_appication_name"; // CHANGEME

        // Identifier of Google Pay API for Passes Merchant Center
        this.ISSUER_ID = "my_issuerId"; // CHANGEME

        // List of origins for save to phone button. Used for JWT // CHANGEME
        //// See https://developers.google.com/pay/passes/reference/s2w-reference
        this.ORIGINS = new ArrayList<String>(){
            /**
             *
             */
            private static final long serialVersionUID = 1L;

            {
                add("http://localhost:8080");
            }
        };


        // Constants that are application agnostic. Used for JWT
        this.AUDIENCE = "google";
        this.JWT_TYPE = "savetoandroidpay";
        this.SCOPES =  new ArrayList<String>(){
            /**
             *
             */
            private static final long serialVersionUID = 1L;

            {
                add("https://www.googleapis.com/auth/wallet_object.issuer");
            }
        };

        // Load the private key as a java RSAPrivateKey object from service account file
        String content = null;
        try {
            content = new String(Files.readAllBytes(Paths.get(this.SERVICE_ACCOUNT_FILE)));
            JSONObject privateKeyJson = new JSONObject(content);
            String privateKeyPkcs8 = (String) privateKeyJson.get("private_key");
            Reader reader = new StringReader(privateKeyPkcs8);
            PemReader.Section section = PemReader.readFirstSectionAndClose(reader, "PRIVATE KEY");
            byte[] bytes = section.getBase64DecodedBytes();
            PKCS8EncodedKeySpec keySpec = new PKCS8EncodedKeySpec(bytes);
            KeyFactory keyFactory = SecurityUtils.getRsaKeyFactory();
            this.SERVICE_ACCOUNT_PRIVATE_KEY = (RSAPrivateKey) keyFactory.generatePrivate(keySpec);

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public static Config getInstance() {
        if (config == null) {
            config = new Config();
        }
        return config;
    }

    public String getServiceAccountEmailAddress() {
        return SERVICE_ACCOUNT_EMAIL_ADDRESS;
    }

    public RSAPrivateKey getServiceAccountPrivateKey() {
        return SERVICE_ACCOUNT_PRIVATE_KEY;
    }

    public String getServiceAccountFile() {
        return SERVICE_ACCOUNT_FILE;
    }

    public String getIssuerId() {
        return ISSUER_ID;
    }

    public ArrayList<String> getOrigins() {
        return ORIGINS;
    }

    public String getAudience() {
        return AUDIENCE;
    }

    public String getJwtType() {
        return JWT_TYPE;
    }

    public ArrayList<String> getScopes() {
        return SCOPES;
    }

    public String getApplicationName() {
        return APPLICATION_NAME;
    }
}