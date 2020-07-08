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
import java.util.UUID;

public class Main {
    private static String SAVE_LINK = "https://pay.google.com/gp/v/save/"; // Save link that uses JWT. See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email

    public static void demoFatJwt(Services.VerticalType verticalType, String classId, String objectId){
       System.out.println(
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

        if (fatJwt != null){
            System.out.println(String.format("This is a \"fat\" jwt:\n%s\n" , fatJwt));
            System.out.println(String.format("you can decode it with a tool to see the unsigned JWT representation:\n%s\n" , "https://jwt.io"));
            System.out.println(String.format("Try this save link in your browser:\n%s%s\n", SAVE_LINK, fatJwt));
            System.out.println(String.format("However, because a \"fat\" jwt is long, they are not suited for hyperlinks (get truncated). Recommend only using \"fat\" JWt with web-JS button only. Check:\n%s" ,"https://developers.google.com/pay/passes/reference/s2w-reference"));
        }
        return;
    }

    public static void demoObjectJwt(Services.VerticalType verticalType, String classId, String objectId){
        System.out.println(
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

        if (objectJwt != null){
            System.out.println(String.format("This is an \"object\" jwt:\n%s\n" , objectJwt));
            System.out.println(String.format("you can decode it with a tool to see the unsigned JWT representation:\n%s\n" , "https://jwt.io"));
            System.out.println(String.format("Try this save link in your browser:\n%s%s\n", SAVE_LINK, objectJwt));
        }
        return;
    }

    public static void demoSkinnyJwt(Services.VerticalType verticalType, String classId, String objectId){
        System.out.println(
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

        if (skinnyJwt  != null){
            System.out.println(String.format("This is a \"skinny\" jwt:\n%s\n" , skinnyJwt ));
            System.out.println(String.format("you can decode it with a tool to see the unsigned JWT representation:\n%s\n" , "https://jwt.io"));
            System.out.println(String.format("Try this save link in your browser:\n%s%s\n", SAVE_LINK, skinnyJwt ));
            System.out.println("this is the shortest type of JWT; recommended for Android intents/redirects\n");
        }
        return;
    }

    /*******************************
     *
     * Demonstrates using your services which make JWTs
     *
     * The JWTs are used to generate save links or JS Web buttons to save Pass(es)
     *
     * 1) Get credentials and check prerequisistes in: https://developers.google.com/pay/passes/samples/quickstart-java.
     * 2) Modify Config.java so the credentials are correct.
     * 3) Try running it:  ./gradlew run . Check terminal output for server response, JWT, and save links.
     *
     *******************************/
    public static void main(String[] args) throws Exception {
        Config config = Config.getInstance();

        // change VerticalType.OFFER to your pass type
        Services.VerticalType verticalType = Services.VerticalType.OFFER; // CHANGEME

        // your classUid should be a hash based off of pass metadata, for the demo we will use pass-type_class_uniqueid
        String classUid = String.format("%s_CLASS_%s", verticalType.toString(), UUID.randomUUID().toString()); 

        // check Reference API for format of "id", for example offer: (https://developers.google.com/pay/passes/reference/v1/offerclass/insert).
        // must be alphanumeric characters, ".", "_", or "-".
        String classId = String.format("%s.%s" , config.getIssuerId(), classUid);

        // your objectUid hould be a hash based off of pass metadata, for the demo we will use pass-type_object_uniqueid
        String objectUid = String.format("%s_OBJECT_%s", verticalType.toString(), UUID.randomUUID().toString()); 
        
        // check Reference API for format of "id", for example offer:(https://developers.google.com/pay/passes/reference/v1/offerobject/insert).
        // Must be alphanumeric characters, ".", "_", or "-".
        String objectId = String.format("%s.%s", config.getIssuerId(), objectUid);

        // demonstrate the different "services" that make links/values for frontend to render a functional "save to phone" button
        demoFatJwt(verticalType, classId, objectId);
        demoObjectJwt(verticalType, classId, objectId);
        demoSkinnyJwt(verticalType, classId, objectId);
    }
}
