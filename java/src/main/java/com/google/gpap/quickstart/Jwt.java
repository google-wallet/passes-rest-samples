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

import com.google.gson.Gson;

import com.google.gson.JsonObject;
import com.google.gson.JsonElement;
import com.google.gson.JsonArray;

import net.oauth.jsontoken.JsonToken;
import net.oauth.jsontoken.crypto.RsaSHA256Signer;

import org.joda.time.Instant;

import java.security.InvalidKeyException;
import java.security.SignatureException;
import java.util.ArrayList;
import java.util.Calendar;

/*******************************
*
* class that defines JWT format for a Google Pay Pass.
*
* to check the JWT protocol for Google Pay Passes, check:
* https://developers.google.com/pay/passes/reference/s2w-reference#google-pay-api-for-passes-jwt
*
* also demonstrates RSA-SHA256 signing implementation to make the signed JWT used
* in links and buttons. Learn more:
* https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay
*
*******************************/
public class Jwt {
    private String audience;
    private String type;
    private String iss;
    private ArrayList<String> origins;
    private Instant iat;
    private JsonObject payload;
    private RsaSHA256Signer signer;

    public Jwt(){

        Config config = Config.getInstance();

        this.audience = config.getAudience();
        this.type = config.getJwtType();
        this.iss = config.getServiceAccountEmailAddress();
        this.origins = config.getOrigins();
        this.iat = new Instant(
                Calendar.getInstance().getTimeInMillis() - 5000L);
        this.payload = new JsonObject();


        try {
            this.signer = new RsaSHA256Signer(this.iss,
                    null, config.getServiceAccountPrivateKey());
        } catch (InvalidKeyException e) {
            e.printStackTrace();
        }
    }

    public void addOfferClass(JsonElement resourcePayload){
        if( this.payload.get("offerClasses") == null ){
            JsonArray offerObjects = new JsonArray();
            this.payload.add("offerClasses",offerObjects);

        }
        JsonArray newPayload = (JsonArray)this.payload.get("offerClasses");
        newPayload.add(resourcePayload);
        this.payload.add("offerClasses",newPayload);

        return;
    }

    public void addOfferObject(JsonElement resourcePayload){
        if( this.payload.get("offerObjects") == null ){
            JsonArray offerObjects = new JsonArray();
            this.payload.add("offerObjects",offerObjects);
        }
        JsonArray newPayload = (JsonArray)this.payload.get("offerObjects");
        newPayload.add(resourcePayload);
        this.payload.add("offerObjects",newPayload);

        return;
    }

    public void addLoyaltyClass(JsonElement resourcePayload){
        if( this.payload.get("loyaltyClasses") == null ){
            JsonArray loyaltyObjects = new JsonArray();
            this.payload.add("loyaltyClasses",loyaltyObjects);

        }
        JsonArray newPayload = (JsonArray)this.payload.get("loyaltyClasses");
        newPayload.add(resourcePayload);
        this.payload.add("loyaltyClasses",newPayload);

        return;
    }

    public void addLoyaltyObject(JsonElement resourcePayload){
        if( this.payload.get("loyaltyObjects") == null ){
            JsonArray loyaltyObjects = new JsonArray();
            this.payload.add("loyaltyObjects",loyaltyObjects);
        }
        JsonArray newPayload = (JsonArray)this.payload.get("loyaltyObjects");
        newPayload.add(resourcePayload);
        this.payload.add("loyaltyObjects",newPayload);

        return;
    }

    public void addGiftcardClass(JsonElement resourcePayload){
        if( this.payload.get("giftCardClasses") == null ){
            JsonArray giftcardObjects = new JsonArray();
            this.payload.add("giftCardClasses",giftcardObjects);

        }
        JsonArray newPayload = (JsonArray)this.payload.get("giftCardClasses");
        newPayload.add(resourcePayload);
        this.payload.add("giftCardClasses",newPayload);

        return;
    }

    public void addGiftcardObject(JsonElement resourcePayload){
        if( this.payload.get("giftCardObjects") == null ){
            JsonArray giftcardObjects = new JsonArray();
            this.payload.add("giftCardObjects",giftcardObjects);
        }
        JsonArray newPayload = (JsonArray)this.payload.get("giftCardObjects");
        newPayload.add(resourcePayload);
        this.payload.add("giftCardObjects",newPayload);

        return;
    }

    public void addEventTicketClass(JsonElement resourcePayload){
        if( this.payload.get("eventTicketClasses") == null ){
            JsonArray eventTicketObjects = new JsonArray();
            this.payload.add("eventTicketClasses",eventTicketObjects);

        }
        JsonArray newPayload = (JsonArray)this.payload.get("eventTicketClasses");
        newPayload.add(resourcePayload);
        this.payload.add("eventTicketClasses",newPayload);

        return;
    }

    public void addEventTicketObject(JsonElement resourcePayload){
        if( this.payload.get("eventTicketObjects") == null ){
            JsonArray eventTicketObjects = new JsonArray();
            this.payload.add("eventTicketObjects",eventTicketObjects);
        }
        JsonArray newPayload = (JsonArray)this.payload.get("eventTicketObjects");
        newPayload.add(resourcePayload);
        this.payload.add("eventTicketObjects",newPayload);

        return;
    }

    public void addFlightClass(JsonElement resourcePayload){
        if( this.payload.get("flightClasses") == null ){
            JsonArray flightObjects = new JsonArray();
            this.payload.add("flightClasses",flightObjects);

        }
        JsonArray newPayload = (JsonArray)this.payload.get("flightClasses");
        newPayload.add(resourcePayload);
        this.payload.add("flightClasses",newPayload);

        return;
    }

    public void addFlightObject(JsonElement resourcePayload){
        if( this.payload.get("flightObjects") == null ){
            JsonArray flightObjects = new JsonArray();
            this.payload.add("flightObjects",flightObjects);
        }
        JsonArray newPayload = (JsonArray)this.payload.get("flightObjects");
        newPayload.add(resourcePayload);
        this.payload.add("flightObjects",newPayload);

        return;
    }

    public void addTransitClass(JsonElement resourcePayload){
        if( this.payload.get("transitClasses") == null ){
            JsonArray transitClasses = new JsonArray();
            this.payload.add("transitClasses",transitClasses);

        }
        JsonArray newPayload = (JsonArray)this.payload.get("transitClasses");
        newPayload.add(resourcePayload);
        this.payload.add("transitClasses",newPayload);

        return;
    }

    public void addTransitObject(JsonElement resourcePayload){
        if( this.payload.get("transitObjects") == null ){
            JsonArray transitObjects = new JsonArray();
            this.payload.add("transitObjects",transitObjects);

        }
        JsonArray newPayload = (JsonArray)this.payload.get("transitObjects");
        newPayload.add(resourcePayload);
        this.payload.add("transitObjects",newPayload);

        return;
    }

    public JsonToken generateUnsignedJwt(){
        JsonToken token = new JsonToken(this.signer);
        token.setAudience(this.audience);
        token.setParam("typ", this.type);
        token.setIssuedAt(this.iat);

        Gson gson = new Gson();
        token.getPayloadAsJsonObject().add("payload", this.payload);
        token.getPayloadAsJsonObject().add("origins", gson.toJsonTree(this.origins));

        return token;
    }

    public String generateSignedJwt() {
        JsonToken jwtToSign = this.generateUnsignedJwt();
        String signedJwt = null;

        try {
            signedJwt = jwtToSign.serializeAndSign();
        } catch (SignatureException e) {
            e.printStackTrace();
        }

        return signedJwt;
    }

}
