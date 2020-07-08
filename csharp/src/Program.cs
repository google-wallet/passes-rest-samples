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
using Newtonsoft.Json;

namespace csharp
{
    class Program
    {
        private static String SAVE_LINK = "https://pay.google.com/gp/v/save/"; // Save link that uses JWT. See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email
        public static void demoFatJwt(Services.VerticalType verticalType, String classId, String objectId)
        {
            System.Console.WriteLine(
                   "#############################\n" +
                   "#\n" +
                   "#  Generates a signed \"fat\" JWT.\n" +
                   "#  No REST calls made.\n" +
                   "#\n" +
                   "#  Use fat JWT in JS web button.\n" +
                   "#  Fat JWT is too long to be used in Android intents.\n" +
                   "#  Possibly might break in redirects.\n" +
                   "#\n" +
                   "#############################\n"
               );

            Services services = new Services();
            String fatJwt = services.makeFatJwt(verticalType, classId, objectId);

            if (fatJwt != null)
            {
                System.Console.WriteLine($"This is a \"fat\" jwt:\n{fatJwt}\n");
                System.Console.WriteLine("you can decode it with a tool to see the unsigned JWT representation:\nhttps://jwt.io\n");
                System.Console.WriteLine($"Try this save link in your browser:\n{SAVE_LINK}{fatJwt}\n");
                System.Console.WriteLine($"However, because a \"fat\" jwt is long, they are not suited for hyperlinks (get truncated). Recommend only using \"fat\" JWt with web-JS button only. Check:\nhttps://developers.google.com/pay/passes/reference/s2w-reference");
            }
            return;
        }
        public static void demoObjectJwt(Services.VerticalType verticalType, String classId, String objectId)
        {
            System.Console.WriteLine(
                "#############################\n" +
                "#\n" +
                "#  Generates a signed \"object\" JWT.\n" +
                "#  1 REST call is made to pre-insert class.\n" +
                "#\n" +
                "#  This JWT can be used in JS web button.\n" +
                "#  If this JWT only contains 1 object, usually isn't too long; can be used in Android intents/redirects.\n" +
                "#\n" +
                "#############################\n"
            );

            Services services = new Services();
            String objectJwt = services.makeObjectJwt(verticalType, classId, objectId);

            if (objectJwt != null)
            {
                System.Console.WriteLine($"This is an \"object\" jwt:\n{objectJwt}\n");
                System.Console.WriteLine($"you can decode it with a tool to see the unsigned JWT representation:\nhttps://jwt.io\n");
                System.Console.WriteLine($"Try this save link in your browser:\n{SAVE_LINK}{objectJwt}\n");
            }
            return;
        }

        public static void demoSkinnyJwt(Services.VerticalType verticalType, String classId, String objectId)
        {
            System.Console.WriteLine(
                "#############################\n" +
                "#\n" +
                "#  Generates a signed \"skinny\" JWT.\n" +
                "#  2 REST calls are made:\n" +
                "#  x1 pre-insert one classes\n" +
                "#  x1 pre-insert one object which uses previously inserted class\n" +
                "#\n" +
                "#  This JWT can be used in JS web button.\n" +
                "#  This is the shortest type of JWT; recommended for Android intents/redirects.\n" +
                "#\n" +
                "#############################\n"
            );

            Services services = new Services();
            String skinnyJwt = services.makeSkinnyJwt(verticalType, classId, objectId);

            if (skinnyJwt != null)
            {
                System.Console.WriteLine($"This is a \"skinny\" jwt:\n{skinnyJwt}\n");
                System.Console.WriteLine("you can decode it with a tool to see the unsigned JWT representation:\nhttps://jwt.io\n");
                System.Console.WriteLine($"Try this save link in your browser:\n{SAVE_LINK}{skinnyJwt}\n");
                System.Console.WriteLine("this is the shortest type of JWT; recommended for Android intents/redirects\n");
            }
            return;
        }
        static void Main(string[] args)
        {
            Config config = Config.getInstance();
            string choice = "z";
            string choices = "beglotq";
            Services.VerticalType verticalType = Services.VerticalType.OFFER;
            while (!choices.Contains(choice))
            {
                System.Console.WriteLine("\n\n*****************************\n" +
                        "Which pass type would you like to demo?\n" +
                        "b - Boarding Pass\n" +
                        "e - Event Ticket\n" +
                        "g - Gift Card\n" +
                        "l - Loyalty\n" +
                        "o - Offer\n" +
                        "t - Transit\n" +
                        "q - Quit\n" +
                        "\n\nEnter your choice:");
                choice = Console.ReadLine();
                switch (choice)
                {
                    case "b":
                        verticalType = Services.VerticalType.FLIGHT;
                        break;
                    case "e":
                        verticalType = Services.VerticalType.EVENTTICKET;
                        break;
                    case "g":
                        verticalType = Services.VerticalType.GIFTCARD;
                        break;
                    case "l":
                        verticalType = Services.VerticalType.LOYALTY;
                        break;
                    case "o":
                        verticalType = Services.VerticalType.OFFER;
                        break;
                    case "t":
                        verticalType = Services.VerticalType.TRANSIT;
                        break;
                    case "q":
                        return;
                    default:
                        System.Console.WriteLine("\n* Invalid choice. Please select one of the pass types by entering it''s related letter.\n");
                        break;
                }
            }

            // your classUid should be a hash based off of pass metadata, for the demo we will use pass-type_class_uniqueid
            string UUID = Guid.NewGuid().ToString();
            string classUid = $"{verticalType.ToString()}_CLASS_{UUID}";

            // check Reference API for format of "id", for example offer: (https://developers.google.com/pay/passes/reference/v1/offerclass/insert).
            // must be alphanumeric characters, ".", "_", or "-".
            string classId = $"{config.getIssuerId()}.{classUid}";

            // your objectUid should be a hash based off of pass metadata, for the demo we will use pass-type_object_uniqueid
            string UUIDobj = Guid.NewGuid().ToString();
            string objectUid = $"{verticalType.ToString()}_OBJECT_{UUIDobj}";

            // check Reference API for format of "id", for example offer:(https://developers.google.com/pay/passes/reference/v1/offerobject/insert).
            // Must be alphanumeric characters, ".", "_", or "-".
            string objectId = $"{config.getIssuerId()}.{objectUid}";

            // demonstrate the different "services" that make links/values for frontend to render a functional "save to phone" button
            demoFatJwt(verticalType, classId, objectId);
            demoObjectJwt(verticalType, classId, objectId);
            demoSkinnyJwt(verticalType, classId, objectId);
        }
        private static string turnIntoJSON(Object obj)
        {
            return JsonConvert.SerializeObject(obj, new JsonSerializerSettings { NullValueHandling = NullValueHandling.Ignore });
        }

    }
}
