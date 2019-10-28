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
using System.IO;
using System.Text;
using csharp.Data;
using Google.Apis.Auth.OAuth2;
using Newtonsoft.Json;
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
namespace csharp
{
    /// <summary>
    /// class that defines JWT format for a Google Pay Pass.
    /// to check the JWT protocol for Google Pay Passes, check:
    /// https://developers.google.com/pay/passes/reference/s2w-reference#google-pay-api-for-passes-jwt
    /// also demonstrates RSA-SHA256 signing implementation to make the signed JWT used
    /// in links and buttons. Learn more:
    /// https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay
    /// </summary>
    public class Jwt
    {
        public string aud;
        public string typ;
        public string iss;
        public List<string> origins;
        public int iat;

        public JwtPayload payload;
        private ServiceAccountCredential credential;

        public Jwt()
        {
            Config config = Config.getInstance();
            this.aud = config.getAudience();
            this.iat = (int)(System.DateTime.UtcNow - new System.DateTime(1970, 1, 1)).TotalSeconds;
            this.typ = config.getJwtType();
            this.iss = config.getServiceAccountEmailAddress();
            this.origins = config.getOrigins();
            this.payload = new JwtPayload();
            string serviceAccountFile = config.getServiceAccountFile();
            using (FileStream fs = new FileStream(serviceAccountFile, FileMode.Open, FileAccess.Read, FileShare.Read))
            {
                this.credential = ServiceAccountCredential.FromServiceAccountData(fs);
            }

        }
        public void addOfferClass(OfferClass offerClass)
        {
            if (this.payload.offerClasses == null)
            {
                this.payload.offerClasses = new List<OfferClass>();
            }
            this.payload.offerClasses.Add(offerClass);
        }
        public void addOfferObject(OfferObject offerObject)
        {
            if (this.payload.offerObjects == null)
            {
                this.payload.offerObjects = new List<OfferObject>();
            }
            this.payload.offerObjects.Add(offerObject);
        }
        public void addLoyaltyClass(LoyaltyClass loyaltyClass)
        {
            if (this.payload.loyaltyClasses == null)
            {
                this.payload.loyaltyClasses = new List<LoyaltyClass>();
            }
            this.payload.loyaltyClasses.Add(loyaltyClass);
        }
        public void addLoyaltyObject(LoyaltyObject loyaltyObject)
        {
            if (this.payload.loyaltyObjects == null)
            {
                this.payload.loyaltyObjects = new List<LoyaltyObject>();
            }
            this.payload.loyaltyObjects.Add(loyaltyObject);
        }
        public void addGiftCardClass(GiftCardClass giftCardClass)
        {
            if (this.payload.giftCardClasses == null)
            {
                this.payload.giftCardClasses = new List<GiftCardClass>();
            }
            this.payload.giftCardClasses.Add(giftCardClass);
        }
        public void addGiftCardObject(GiftCardObject giftCardObject)
        {
            if (this.payload.giftCardObjects == null)
            {
                this.payload.giftCardObjects = new List<GiftCardObject>();
            }
            this.payload.giftCardObjects.Add(giftCardObject);
        }
        public void addEventTicketClass(EventTicketClass eventTicketClass)
        {
            if (this.payload.eventTicketClasses == null)
            {
                this.payload.eventTicketClasses = new List<EventTicketClass>();
            }
            this.payload.eventTicketClasses.Add(eventTicketClass);
        }
        public void addEventTicketObject(EventTicketObject eventTicketObject)
        {
            if (this.payload.eventTicketObjects == null)
            {
                this.payload.eventTicketObjects = new List<EventTicketObject>();
            }
            this.payload.eventTicketObjects.Add(eventTicketObject);
        }
        public void addFlightClass(FlightClass flightClass)
        {
            if (this.payload.flightClasses == null)
            {
                this.payload.flightClasses = new List<FlightClass>();
            }
            this.payload.flightClasses.Add(flightClass);
        }
        public void addFlightObject(FlightObject flightObject)
        {
            if (this.payload.flightObjects == null)
            {
                this.payload.flightObjects = new List<FlightObject>();
            }
            this.payload.flightObjects.Add(flightObject);
        }
        public void addTransitClass(TransitClass transitClass)
        {
            if (this.payload.transitClasses == null)
            {
                this.payload.transitClasses = new List<TransitClass>();
            }
            this.payload.transitClasses.Add(transitClass);
        }
        public void addTransitObject(TransitObject transitObject)
        {
            if (this.payload.transitObjects == null)
            {
                this.payload.transitObjects = new List<TransitObject>();
            }
            this.payload.transitObjects.Add(transitObject);
        }
        public string generateSignedJwt()
        {

            string header = "{\"alg\":\"RS256\",\"typ\":\"JWT\"}";
            string payload = JsonConvert.SerializeObject(this, new JsonSerializerSettings{NullValueHandling=NullValueHandling.Ignore});

            string encodedSafeHeader = Convert.ToBase64String(Encoding.UTF8.GetBytes(header)).Replace('+', '-').Replace('/', '_').Replace("=", "");
            string encodedSafePayload = Convert.ToBase64String(Encoding.UTF8.GetBytes(payload)).Replace('+', '-').Replace('/', '_').Replace("=", ""); ;
            string signature = credential.CreateSignature(Encoding.UTF8.GetBytes($"{encodedSafeHeader}.{encodedSafePayload}")).Replace('+', '-').Replace('/', '_').Replace("=", "");

            string token = $"{encodedSafeHeader}.{encodedSafePayload}.{signature}";
            return token;
        }
        public class JwtPayload
        {
            public List<OfferClass> offerClasses;
            public List<OfferObject> offerObjects;
            public List<LoyaltyClass> loyaltyClasses;
            public List<LoyaltyObject> loyaltyObjects;
            public List<GiftCardClass> giftCardClasses;
            public List<GiftCardObject> giftCardObjects;
            public List<EventTicketClass> eventTicketClasses;
            public List<EventTicketObject> eventTicketObjects;
            public List<FlightClass> flightClasses;
            public List<FlightObject> flightObjects;
            public List<TransitClass> transitClasses;
            public List<TransitObject> transitObjects;
        }

    }
}