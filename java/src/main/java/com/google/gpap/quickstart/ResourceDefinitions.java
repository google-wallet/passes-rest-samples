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

// These handle formatting the JSON resource definitions
// download the latest client at:  https://developers.google.com/pay/passes/support/libraries#libraries

import com.google.api.services.walletobjects.model.OfferClass;
import com.google.api.services.walletobjects.model.OfferObject;
import com.google.api.services.walletobjects.model.Barcode;
import com.google.api.services.walletobjects.model.Image;
import com.google.api.services.walletobjects.model.Uri;

public class ResourceDefinitions {
    private static ResourceDefinitions resourceDefinitions = new ResourceDefinitions();

    private ResourceDefinitions() {
    }

    public static ResourceDefinitions getInstance() {
        if (resourceDefinitions == null) {
            resourceDefinitions = new ResourceDefinitions();
        }
        return resourceDefinitions;
    }

    /******************************
     *
     *  Define a Class
     *
     *  See https://developers.google.com/pay/passes/reference/v1/offerclass
     *
     * @param String classId - The unique identifier for a class
     * @return OfferClass payload - represents Offer class resource
     *
     *******************************/
    public OfferClass makeOfferClassResource(String classId) {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an offer class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/offerclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/offers/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        OfferClass payload = new OfferClass()
                .setId(classId)
                .setIssuerName("Baconrista Coffee")
                .setProvider("Baconrista Deals")
                .setRedemptionChannel("online")
                .setReviewStatus("underReview")
                .setTitle("20% off one bacon fat latte")
                // optional.  Check design and reference api to decide what's desirable
                .setTitleImage(
                        new Image().setSourceUri(new Uri()
                                .setUri("http://farm4.staticflickr.com/3723/11177041115_6e6a3b6f49_o.jpg")));

        return payload;
    }

    /******************************
     *
     *  Define an Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerobject
     *
     * @param String classId - The unique identifier for a class
     * @param String objectId - The unique identifier for an object
     * @return OfferObject payload - represents Offer object resource
     *
     *******************************/
    public OfferObject makeOfferObjectResource(String classId, String objectId) {
        // Define the resource representation of the Object
        // values should be from your DB/services; here we hardcode information
        // below defines an offer object. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/offerobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/offers/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        // Define Barcode
        Barcode barcode = new Barcode().setType("qrCode").setValue("1234abc")
                .setAlternateText("optional alternate text");

        // Define offer object
        OfferObject payload = new OfferObject()
                // required fields
                .setClassId(classId)
                .setId(objectId)
                .setState("active")
                // optional.  Check design and reference api to decide what's desirable
                .setBarcode(barcode);

        return payload;
    }
}
