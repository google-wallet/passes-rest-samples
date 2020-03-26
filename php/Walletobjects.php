<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Walletobjects (v1).
 *
 * <p>
 * API for issuers to save and manage Google Wallet Objects.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/pay/passes" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Walletobjects extends Google_Service
{
  /** You should never encounter this message. Please do not approve the access request.. */
  const WALLET_OBJECT_ISSUER =
      "https://www.googleapis.com/auth/wallet_object.issuer";

  public $eventticketclass;
  public $eventticketobject;
  public $flightclass;
  public $flightobject;
  public $giftcardclass;
  public $giftcardobject;
  public $issuer;
  public $jwt;
  public $loyaltyclass;
  public $loyaltyobject;
  public $offerclass;
  public $offerobject;
  public $permissions;
  public $smarttap;
  public $transitclass;
  public $transitobject;
  

  /**
   * Constructs the internal representation of the Walletobjects service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://walletobjects.googleapis.com/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v1';
    $this->serviceName = 'walletobjects';

    $this->eventticketclass = new Google_Service_Walletobjects_Eventticketclass_Resource(
        $this,
        $this->serviceName,
        'eventticketclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'walletobjects/v1/eventTicketClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'walletobjects/v1/eventTicketClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/eventTicketClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/eventTicketClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'walletobjects/v1/eventTicketClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/eventTicketClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->eventticketobject = new Google_Service_Walletobjects_Eventticketobject_Resource(
        $this,
        $this->serviceName,
        'eventticketobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'walletobjects/v1/eventTicketObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'walletobjects/v1/eventTicketObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/eventTicketObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/eventTicketObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'modifylinkedofferobjects' => array(
              'path' => 'walletobjects/v1/eventTicketObject/{resourceId}/modifyLinkedOfferObjects',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'walletobjects/v1/eventTicketObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/eventTicketObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->flightclass = new Google_Service_Walletobjects_Flightclass_Resource(
        $this,
        $this->serviceName,
        'flightclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'walletobjects/v1/flightClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'walletobjects/v1/flightClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/flightClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/flightClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'walletobjects/v1/flightClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/flightClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->flightobject = new Google_Service_Walletobjects_Flightobject_Resource(
        $this,
        $this->serviceName,
        'flightobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'walletobjects/v1/flightObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'walletobjects/v1/flightObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/flightObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/flightObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'walletobjects/v1/flightObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/flightObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->giftcardclass = new Google_Service_Walletobjects_Giftcardclass_Resource(
        $this,
        $this->serviceName,
        'giftcardclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'walletobjects/v1/giftCardClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/giftCardClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/giftCardClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->giftcardobject = new Google_Service_Walletobjects_Giftcardobject_Resource(
        $this,
        $this->serviceName,
        'giftcardobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'walletobjects/v1/giftCardObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/giftCardObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/giftCardObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->issuer = new Google_Service_Walletobjects_Issuer_Resource(
        $this,
        $this->serviceName,
        'issuer',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'walletobjects/v1/issuer/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/issuer',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/issuer',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'walletobjects/v1/issuer/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/issuer/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->jwt = new Google_Service_Walletobjects_Jwt_Resource(
        $this,
        $this->serviceName,
        'jwt',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'walletobjects/v1/jwt',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->loyaltyclass = new Google_Service_Walletobjects_Loyaltyclass_Resource(
        $this,
        $this->serviceName,
        'loyaltyclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'walletobjects/v1/loyaltyClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/loyaltyClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/loyaltyClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->loyaltyobject = new Google_Service_Walletobjects_Loyaltyobject_Resource(
        $this,
        $this->serviceName,
        'loyaltyobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'walletobjects/v1/loyaltyObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/loyaltyObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/loyaltyObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'modifylinkedofferobjects' => array(
              'path' => 'walletobjects/v1/loyaltyObject/{resourceId}/modifyLinkedOfferObjects',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->offerclass = new Google_Service_Walletobjects_Offerclass_Resource(
        $this,
        $this->serviceName,
        'offerclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'walletobjects/v1/offerClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'walletobjects/v1/offerClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/offerClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/offerClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'walletobjects/v1/offerClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/offerClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->offerobject = new Google_Service_Walletobjects_Offerobject_Resource(
        $this,
        $this->serviceName,
        'offerobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'walletobjects/v1/offerObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'walletobjects/v1/offerObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/offerObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/offerObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'walletobjects/v1/offerObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/offerObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->permissions = new Google_Service_Walletobjects_Permissions_Resource(
        $this,
        $this->serviceName,
        'permissions',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'walletobjects/v1/permissions/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/permissions/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->smarttap = new Google_Service_Walletobjects_Smarttap_Resource(
        $this,
        $this->serviceName,
        'smarttap',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'walletobjects/v1/smartTap',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->transitclass = new Google_Service_Walletobjects_Transitclass_Resource(
        $this,
        $this->serviceName,
        'transitclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'walletobjects/v1/transitClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'walletobjects/v1/transitClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/transitClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/transitClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'walletobjects/v1/transitClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/transitClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->transitobject = new Google_Service_Walletobjects_Transitobject_Resource(
        $this,
        $this->serviceName,
        'transitobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'walletobjects/v1/transitObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'walletobjects/v1/transitObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'walletobjects/v1/transitObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'walletobjects/v1/transitObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'walletobjects/v1/transitObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'walletobjects/v1/transitObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "eventticketclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $eventticketclass = $walletobjectsService->eventticketclass;
 *  </code>
 */
class Google_Service_Walletobjects_Eventticketclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the event ticket class referenced by the given class ID.
   * (eventticketclass.addmessage)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_AddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_EventTicketClassAddMessageResponse");
  }

  /**
   * Returns the event ticket class with the given class ID.
   * (eventticketclass.get)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_EventTicketClass");
  }

  /**
   * Inserts an event ticket class with the given ID and properties.
   * (eventticketclass.insert)
   *
   * @param Google_EventTicketClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketClass
   */
  public function insert(Google_Service_Walletobjects_EventTicketClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_EventTicketClass");
  }

  /**
   * Returns a list of all event ticket classes for a given issuer ID.
   * (eventticketclass.listEventticketclass)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string issuerId The ID of the issuer authorized to list classes.
   * @opt_param string token Used to get the next set of results if `maxResults`
   * is specified, but more than `maxResults` classes are available in a list. For
   * example, if you have a list of 200 classes and you call list with
   * `maxResults` set to 20, list will return the first 20 classes and a token.
   * Call list again with `maxResults` set to 20 and the token to get the next 20
   * classes.
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if `maxResults` isn't defined.
   * @return Google_Service_Walletobjects_EventTicketClassListResponse
   */
  public function listEventticketclass($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_EventTicketClassListResponse");
  }

  /**
   * Updates the event ticket class referenced by the given class ID. This method
   * supports patch semantics. (eventticketclass.patch)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_EventTicketClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_EventTicketClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_EventTicketClass");
  }

  /**
   * Updates the event ticket class referenced by the given class ID.
   * (eventticketclass.update)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_EventTicketClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketClass
   */
  public function update($resourceId, Google_Service_Walletobjects_EventTicketClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_EventTicketClass");
  }
}

/**
 * The "eventticketobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $eventticketobject = $walletobjectsService->eventticketobject;
 *  </code>
 */
class Google_Service_Walletobjects_Eventticketobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the event ticket object referenced by the given object ID.
   * (eventticketobject.addmessage)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_AddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_EventTicketObjectAddMessageResponse");
  }

  /**
   * Returns the event ticket object with the given object ID.
   * (eventticketobject.get)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_EventTicketObject");
  }

  /**
   * Inserts an event ticket object with the given ID and properties.
   * (eventticketobject.insert)
   *
   * @param Google_EventTicketObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketObject
   */
  public function insert(Google_Service_Walletobjects_EventTicketObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_EventTicketObject");
  }

  /**
   * Returns a list of all event ticket objects for a given issuer ID.
   * (eventticketobject.listEventticketobject)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string classId The ID of the class whose objects will be listed.
   * @opt_param string token Used to get the next set of results if `maxResults`
   * is specified, but more than `maxResults` objects are available in a list. For
   * example, if you have a list of 200 objects and you call list with
   * `maxResults` set to 20, list will return the first 20 objects and a token.
   * Call list again with `maxResults` set to 20 and the token to get the next 20
   * objects.
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if `maxResults` isn't defined.
   * @return Google_Service_Walletobjects_EventTicketObjectListResponse
   */
  public function listEventticketobject($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_EventTicketObjectListResponse");
  }

  /**
   * Modifies linked offer objects for the event ticket object with the given ID.
   * (eventticketobject.modifylinkedofferobjects)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_ModifyLinkedOfferObjectsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketObject
   */
  public function modifylinkedofferobjects($resourceId, Google_Service_Walletobjects_ModifyLinkedOfferObjectsRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modifylinkedofferobjects', array($params), "Google_Service_Walletobjects_EventTicketObject");
  }

  /**
   * Updates the event ticket object referenced by the given object ID. This
   * method supports patch semantics. (eventticketobject.patch)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_EventTicketObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_EventTicketObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_EventTicketObject");
  }

  /**
   * Updates the event ticket object referenced by the given object ID.
   * (eventticketobject.update)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_EventTicketObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketObject
   */
  public function update($resourceId, Google_Service_Walletobjects_EventTicketObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_EventTicketObject");
  }
}

/**
 * The "flightclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $flightclass = $walletobjectsService->flightclass;
 *  </code>
 */
class Google_Service_Walletobjects_Flightclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the flight class referenced by the given class ID.
   * (flightclass.addmessage)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_AddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_FlightClassAddMessageResponse");
  }

  /**
   * Returns the flight class with the given class ID. (flightclass.get)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_FlightClass");
  }

  /**
   * Inserts an flight class with the given ID and properties.
   * (flightclass.insert)
   *
   * @param Google_FlightClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightClass
   */
  public function insert(Google_Service_Walletobjects_FlightClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_FlightClass");
  }

  /**
   * Returns a list of all flight classes for a given issuer ID.
   * (flightclass.listFlightclass)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string issuerId The ID of the issuer authorized to list classes.
   * @opt_param string token Used to get the next set of results if `maxResults`
   * is specified, but more than `maxResults` classes are available in a list. For
   * example, if you have a list of 200 classes and you call list with
   * `maxResults` set to 20, list will return the first 20 classes and a token.
   * Call list again with `maxResults` set to 20 and the token to get the next 20
   * classes.
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if `maxResults` isn't defined.
   * @return Google_Service_Walletobjects_FlightClassListResponse
   */
  public function listFlightclass($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_FlightClassListResponse");
  }

  /**
   * Updates the flight class referenced by the given class ID. This method
   * supports patch semantics. (flightclass.patch)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_FlightClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_FlightClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_FlightClass");
  }

  /**
   * Updates the flight class referenced by the given class ID.
   * (flightclass.update)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_FlightClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightClass
   */
  public function update($resourceId, Google_Service_Walletobjects_FlightClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_FlightClass");
  }
}

/**
 * The "flightobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $flightobject = $walletobjectsService->flightobject;
 *  </code>
 */
class Google_Service_Walletobjects_Flightobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the flight object referenced by the given object ID.
   * (flightobject.addmessage)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_AddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_FlightObjectAddMessageResponse");
  }

  /**
   * Returns the flight object with the given object ID. (flightobject.get)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_FlightObject");
  }

  /**
   * Inserts an flight object with the given ID and properties.
   * (flightobject.insert)
   *
   * @param Google_FlightObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightObject
   */
  public function insert(Google_Service_Walletobjects_FlightObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_FlightObject");
  }

  /**
   * Returns a list of all flight objects for a given issuer ID.
   * (flightobject.listFlightobject)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string classId The ID of the class whose objects will be listed.
   * @opt_param string token Used to get the next set of results if `maxResults`
   * is specified, but more than `maxResults` objects are available in a list. For
   * example, if you have a list of 200 objects and you call list with
   * `maxResults` set to 20, list will return the first 20 objects and a token.
   * Call list again with `maxResults` set to 20 and the token to get the next 20
   * objects.
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if `maxResults` isn't defined.
   * @return Google_Service_Walletobjects_FlightObjectListResponse
   */
  public function listFlightobject($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_FlightObjectListResponse");
  }

  /**
   * Updates the flight object referenced by the given object ID. This method
   * supports patch semantics. (flightobject.patch)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_FlightObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_FlightObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_FlightObject");
  }

  /**
   * Updates the flight object referenced by the given object ID.
   * (flightobject.update)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_FlightObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightObject
   */
  public function update($resourceId, Google_Service_Walletobjects_FlightObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_FlightObject");
  }
}

/**
 * The "giftcardclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $giftcardclass = $walletobjectsService->giftcardclass;
 *  </code>
 */
class Google_Service_Walletobjects_Giftcardclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the gift card class referenced by the given class ID.
   * (giftcardclass.addmessage)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_AddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_GiftCardClassAddMessageResponse");
  }

  /**
   * Returns the gift card class with the given class ID. (giftcardclass.get)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_GiftCardClass");
  }

  /**
   * Inserts an gift card class with the given ID and properties.
   * (giftcardclass.insert)
   *
   * @param Google_GiftCardClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClass
   */
  public function insert(Google_Service_Walletobjects_GiftCardClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_GiftCardClass");
  }

  /**
   * Returns a list of all gift card classes for a given issuer ID.
   * (giftcardclass.listGiftcardclass)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string issuerId The ID of the issuer authorized to list classes.
   * @opt_param string token Used to get the next set of results if `maxResults`
   * is specified, but more than `maxResults` classes are available in a list. For
   * example, if you have a list of 200 classes and you call list with
   * `maxResults` set to 20, list will return the first 20 classes and a token.
   * Call list again with `maxResults` set to 20 and the token to get the next 20
   * classes.
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if `maxResults` isn't defined.
   * @return Google_Service_Walletobjects_GiftCardClassListResponse
   */
  public function listGiftcardclass($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_GiftCardClassListResponse");
  }

  /**
   * Updates the gift card class referenced by the given class ID. This method
   * supports patch semantics. (giftcardclass.patch)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_GiftCardClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_GiftCardClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_GiftCardClass");
  }

  /**
   * Updates the gift card class referenced by the given class ID.
   * (giftcardclass.update)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_GiftCardClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClass
   */
  public function update($resourceId, Google_Service_Walletobjects_GiftCardClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_GiftCardClass");
  }
}

/**
 * The "giftcardobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $giftcardobject = $walletobjectsService->giftcardobject;
 *  </code>
 */
class Google_Service_Walletobjects_Giftcardobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the gift card object referenced by the given object ID.
   * (giftcardobject.addmessage)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_AddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_GiftCardObjectAddMessageResponse");
  }

  /**
   * Returns the gift card object with the given object ID. (giftcardobject.get)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_GiftCardObject");
  }

  /**
   * Inserts an gift card object with the given ID and properties.
   * (giftcardobject.insert)
   *
   * @param Google_GiftCardObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObject
   */
  public function insert(Google_Service_Walletobjects_GiftCardObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_GiftCardObject");
  }

  /**
   * Returns a list of all gift card objects for a given issuer ID.
   * (giftcardobject.listGiftcardobject)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string classId The ID of the class whose objects will be listed.
   * @opt_param string token Used to get the next set of results if `maxResults`
   * is specified, but more than `maxResults` objects are available in a list. For
   * example, if you have a list of 200 objects and you call list with
   * `maxResults` set to 20, list will return the first 20 objects and a token.
   * Call list again with `maxResults` set to 20 and the token to get the next 20
   * objects.
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if `maxResults` isn't defined.
   * @return Google_Service_Walletobjects_GiftCardObjectListResponse
   */
  public function listGiftcardobject($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_GiftCardObjectListResponse");
  }

  /**
   * Updates the gift card object referenced by the given object ID. This method
   * supports patch semantics. (giftcardobject.patch)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_GiftCardObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_GiftCardObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_GiftCardObject");
  }

  /**
   * Updates the gift card object referenced by the given object ID.
   * (giftcardobject.update)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_GiftCardObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObject
   */
  public function update($resourceId, Google_Service_Walletobjects_GiftCardObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_GiftCardObject");
  }
}

/**
 * The "issuer" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $issuer = $walletobjectsService->issuer;
 *  </code>
 */
class Google_Service_Walletobjects_Issuer_Resource extends Google_Service_Resource
{

  /**
   * Returns the issuer with the given issuer ID. (issuer.get)
   *
   * @param string $resourceId The unique identifier for an issuer. This ID must
   * be unique across all issuers.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Issuer
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_Issuer");
  }

  /**
   * Inserts an issuer with the given ID and properties. (issuer.insert)
   *
   * @param Google_Issuer $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Issuer
   */
  public function insert(Google_Service_Walletobjects_Issuer $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_Issuer");
  }

  /**
   * Returns a list of all issuers shared to the caller. (issuer.listIssuer)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_IssuerListResponse
   */
  public function listIssuer($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_IssuerListResponse");
  }

  /**
   * Updates the issuer referenced by the given issuer ID. This method supports
   * patch semantics. (issuer.patch)
   *
   * @param string $resourceId The unique identifier for an issuer. This ID must
   * be unique across all issuers.
   * @param Google_Issuer $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Issuer
   */
  public function patch($resourceId, Google_Service_Walletobjects_Issuer $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_Issuer");
  }

  /**
   * Updates the issuer referenced by the given issuer ID. (issuer.update)
   *
   * @param string $resourceId The unique identifier for an issuer. This ID must
   * be unique across all issuers.
   * @param Google_Issuer $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Issuer
   */
  public function update($resourceId, Google_Service_Walletobjects_Issuer $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_Issuer");
  }
}

/**
 * The "jwt" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $jwt = $walletobjectsService->jwt;
 *  </code>
 */
class Google_Service_Walletobjects_Jwt_Resource extends Google_Service_Resource
{

  /**
   * Inserts the resources in the JWT. (jwt.insert)
   *
   * @param Google_JwtResource $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_JwtInsertResponse
   */
  public function insert(Google_Service_Walletobjects_JwtResource $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_JwtInsertResponse");
  }
}

/**
 * The "loyaltyclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $loyaltyclass = $walletobjectsService->loyaltyclass;
 *  </code>
 */
class Google_Service_Walletobjects_Loyaltyclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the loyalty class referenced by the given class ID.
   * (loyaltyclass.addmessage)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_AddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_LoyaltyClassAddMessageResponse");
  }

  /**
   * Returns the loyalty class with the given class ID. (loyaltyclass.get)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_LoyaltyClass");
  }

  /**
   * Inserts an loyalty class with the given ID and properties.
   * (loyaltyclass.insert)
   *
   * @param Google_LoyaltyClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClass
   */
  public function insert(Google_Service_Walletobjects_LoyaltyClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_LoyaltyClass");
  }

  /**
   * Returns a list of all loyalty classes for a given issuer ID.
   * (loyaltyclass.listLoyaltyclass)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string issuerId The ID of the issuer authorized to list classes.
   * @opt_param string token Used to get the next set of results if `maxResults`
   * is specified, but more than `maxResults` classes are available in a list. For
   * example, if you have a list of 200 classes and you call list with
   * `maxResults` set to 20, list will return the first 20 classes and a token.
   * Call list again with `maxResults` set to 20 and the token to get the next 20
   * classes.
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if `maxResults` isn't defined.
   * @return Google_Service_Walletobjects_LoyaltyClassListResponse
   */
  public function listLoyaltyclass($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_LoyaltyClassListResponse");
  }

  /**
   * Updates the loyalty class referenced by the given class ID. This method
   * supports patch semantics. (loyaltyclass.patch)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_LoyaltyClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_LoyaltyClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_LoyaltyClass");
  }

  /**
   * Updates the loyalty class referenced by the given class ID.
   * (loyaltyclass.update)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_LoyaltyClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClass
   */
  public function update($resourceId, Google_Service_Walletobjects_LoyaltyClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_LoyaltyClass");
  }
}

/**
 * The "loyaltyobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $loyaltyobject = $walletobjectsService->loyaltyobject;
 *  </code>
 */
class Google_Service_Walletobjects_Loyaltyobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the loyalty object referenced by the given object ID.
   * (loyaltyobject.addmessage)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_AddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_LoyaltyObjectAddMessageResponse");
  }

  /**
   * Returns the loyalty object with the given object ID. (loyaltyobject.get)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }

  /**
   * Inserts an loyalty object with the given ID and properties.
   * (loyaltyobject.insert)
   *
   * @param Google_LoyaltyObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function insert(Google_Service_Walletobjects_LoyaltyObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }

  /**
   * Returns a list of all loyalty objects for a given issuer ID.
   * (loyaltyobject.listLoyaltyobject)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string classId The ID of the class whose objects will be listed.
   * @opt_param string token Used to get the next set of results if `maxResults`
   * is specified, but more than `maxResults` objects are available in a list. For
   * example, if you have a list of 200 objects and you call list with
   * `maxResults` set to 20, list will return the first 20 objects and a token.
   * Call list again with `maxResults` set to 20 and the token to get the next 20
   * objects.
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if `maxResults` isn't defined.
   * @return Google_Service_Walletobjects_LoyaltyObjectListResponse
   */
  public function listLoyaltyobject($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_LoyaltyObjectListResponse");
  }

  /**
   * Modifies linked offer objects for the loyalty object with the given ID.
   * (loyaltyobject.modifylinkedofferobjects)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_ModifyLinkedOfferObjectsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function modifylinkedofferobjects($resourceId, Google_Service_Walletobjects_ModifyLinkedOfferObjectsRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modifylinkedofferobjects', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }

  /**
   * Updates the loyalty object referenced by the given object ID. This method
   * supports patch semantics. (loyaltyobject.patch)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_LoyaltyObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_LoyaltyObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }

  /**
   * Updates the loyalty object referenced by the given object ID.
   * (loyaltyobject.update)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_LoyaltyObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function update($resourceId, Google_Service_Walletobjects_LoyaltyObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }
}

/**
 * The "offerclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $offerclass = $walletobjectsService->offerclass;
 *  </code>
 */
class Google_Service_Walletobjects_Offerclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the offer class referenced by the given class ID.
   * (offerclass.addmessage)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_AddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_OfferClassAddMessageResponse");
  }

  /**
   * Returns the offer class with the given class ID. (offerclass.get)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_OfferClass");
  }

  /**
   * Inserts an offer class with the given ID and properties. (offerclass.insert)
   *
   * @param Google_OfferClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClass
   */
  public function insert(Google_Service_Walletobjects_OfferClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_OfferClass");
  }

  /**
   * Returns a list of all offer classes for a given issuer ID.
   * (offerclass.listOfferclass)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string issuerId The ID of the issuer authorized to list classes.
   * @opt_param string token Used to get the next set of results if `maxResults`
   * is specified, but more than `maxResults` classes are available in a list. For
   * example, if you have a list of 200 classes and you call list with
   * `maxResults` set to 20, list will return the first 20 classes and a token.
   * Call list again with `maxResults` set to 20 and the token to get the next 20
   * classes.
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if `maxResults` isn't defined.
   * @return Google_Service_Walletobjects_OfferClassListResponse
   */
  public function listOfferclass($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_OfferClassListResponse");
  }

  /**
   * Updates the offer class referenced by the given class ID. This method
   * supports patch semantics. (offerclass.patch)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_OfferClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_OfferClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_OfferClass");
  }

  /**
   * Updates the offer class referenced by the given class ID. (offerclass.update)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_OfferClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClass
   */
  public function update($resourceId, Google_Service_Walletobjects_OfferClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_OfferClass");
  }
}

/**
 * The "offerobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $offerobject = $walletobjectsService->offerobject;
 *  </code>
 */
class Google_Service_Walletobjects_Offerobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the offer object referenced by the given object ID.
   * (offerobject.addmessage)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_AddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_OfferObjectAddMessageResponse");
  }

  /**
   * Returns the offer object with the given object ID. (offerobject.get)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_OfferObject");
  }

  /**
   * Inserts an offer object with the given ID and properties.
   * (offerobject.insert)
   *
   * @param Google_OfferObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObject
   */
  public function insert(Google_Service_Walletobjects_OfferObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_OfferObject");
  }

  /**
   * Returns a list of all offer objects for a given issuer ID.
   * (offerobject.listOfferobject)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string classId The ID of the class whose objects will be listed.
   * @opt_param string token Used to get the next set of results if `maxResults`
   * is specified, but more than `maxResults` objects are available in a list. For
   * example, if you have a list of 200 objects and you call list with
   * `maxResults` set to 20, list will return the first 20 objects and a token.
   * Call list again with `maxResults` set to 20 and the token to get the next 20
   * objects.
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if `maxResults` isn't defined.
   * @return Google_Service_Walletobjects_OfferObjectListResponse
   */
  public function listOfferobject($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_OfferObjectListResponse");
  }

  /**
   * Updates the offer object referenced by the given object ID. This method
   * supports patch semantics. (offerobject.patch)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_OfferObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_OfferObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_OfferObject");
  }

  /**
   * Updates the offer object referenced by the given object ID.
   * (offerobject.update)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_OfferObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObject
   */
  public function update($resourceId, Google_Service_Walletobjects_OfferObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_OfferObject");
  }
}

/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $permissions = $walletobjectsService->permissions;
 *  </code>
 */
class Google_Service_Walletobjects_Permissions_Resource extends Google_Service_Resource
{

  /**
   * Returns the permissions for the given issuer id. (permissions.get)
   *
   * @param string $resourceId The unique identifier for an issuer. This ID must
   * be unique across all issuers.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Permissions
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_Permissions");
  }

  /**
   * Updates the permissions for the given issuer. (permissions.update)
   *
   * @param string $resourceId The unique identifier for an issuer. This ID must
   * be unique across all issuers.
   * @param Google_Permissions $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Permissions
   */
  public function update($resourceId, Google_Service_Walletobjects_Permissions $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_Permissions");
  }
}

/**
 * The "smarttap" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $smarttap = $walletobjectsService->smarttap;
 *  </code>
 */
class Google_Service_Walletobjects_Smarttap_Resource extends Google_Service_Resource
{

  /**
   * Inserts the smart tap. (smarttap.insert)
   *
   * @param Google_SmartTap $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_SmartTap
   */
  public function insert(Google_Service_Walletobjects_SmartTap $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_SmartTap");
  }
}

/**
 * The "transitclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $transitclass = $walletobjectsService->transitclass;
 *  </code>
 */
class Google_Service_Walletobjects_Transitclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the transit class referenced by the given class ID.
   * (transitclass.addmessage)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_AddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_TransitClassAddMessageResponse");
  }

  /**
   * Returns the transit class with the given class ID. (transitclass.get)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_TransitClass");
  }

  /**
   * Inserts a transit class with the given ID and properties.
   * (transitclass.insert)
   *
   * @param Google_TransitClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitClass
   */
  public function insert(Google_Service_Walletobjects_TransitClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_TransitClass");
  }

  /**
   * Returns a list of all transit classes for a given issuer ID.
   * (transitclass.listTransitclass)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string issuerId The ID of the issuer authorized to list classes.
   * @opt_param string token Used to get the next set of results if `maxResults`
   * is specified, but more than `maxResults` classes are available in a list. For
   * example, if you have a list of 200 classes and you call list with
   * `maxResults` set to 20, list will return the first 20 classes and a token.
   * Call list again with `maxResults` set to 20 and the token to get the next 20
   * classes.
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if `maxResults` isn't defined.
   * @return Google_Service_Walletobjects_TransitClassListResponse
   */
  public function listTransitclass($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_TransitClassListResponse");
  }

  /**
   * Updates the transit class referenced by the given class ID. This method
   * supports patch semantics. (transitclass.patch)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_TransitClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_TransitClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_TransitClass");
  }

  /**
   * Updates the transit class referenced by the given class ID.
   * (transitclass.update)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_TransitClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitClass
   */
  public function update($resourceId, Google_Service_Walletobjects_TransitClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_TransitClass");
  }
}

/**
 * The "transitobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $transitobject = $walletobjectsService->transitobject;
 *  </code>
 */
class Google_Service_Walletobjects_Transitobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the transit object referenced by the given object ID.
   * (transitobject.addmessage)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_AddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_AddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_TransitObjectAddMessageResponse");
  }

  /**
   * Returns the transit object with the given object ID. (transitobject.get)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_TransitObject");
  }

  /**
   * Inserts an transit object with the given ID and properties.
   * (transitobject.insert)
   *
   * @param Google_TransitObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitObject
   */
  public function insert(Google_Service_Walletobjects_TransitObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_TransitObject");
  }

  /**
   * Returns a list of all transit objects for a given issuer ID.
   * (transitobject.listTransitobject)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string classId The ID of the class whose objects will be listed.
   * @opt_param string token Used to get the next set of results if `maxResults`
   * is specified, but more than `maxResults` objects are available in a list. For
   * example, if you have a list of 200 objects and you call list with
   * `maxResults` set to 20, list will return the first 20 objects and a token.
   * Call list again with `maxResults` set to 20 and the token to get the next 20
   * objects.
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if `maxResults` isn't defined.
   * @return Google_Service_Walletobjects_TransitObjectListResponse
   */
  public function listTransitobject($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_TransitObjectListResponse");
  }

  /**
   * Updates the transit object referenced by the given object ID. This method
   * supports patch semantics. (transitobject.patch)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_TransitObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_TransitObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_TransitObject");
  }

  /**
   * Updates the transit object referenced by the given object ID.
   * (transitobject.update)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_TransitObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitObject
   */
  public function update($resourceId, Google_Service_Walletobjects_TransitObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_TransitObject");
  }
}




class Google_Service_Walletobjects_AddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_Message';
  protected $messageDataType = '';


  public function setMessage(Google_Service_Walletobjects_Message $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Google_Service_Walletobjects_AirportInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $airportIataCode;
  protected $airportNameOverrideType = 'Google_Service_Walletobjects_LocalizedString';
  protected $airportNameOverrideDataType = '';
  public $gate;
  public $kind;
  public $terminal;


  public function setAirportIataCode($airportIataCode)
  {
    $this->airportIataCode = $airportIataCode;
  }
  public function getAirportIataCode()
  {
    return $this->airportIataCode;
  }
  public function setAirportNameOverride(Google_Service_Walletobjects_LocalizedString $airportNameOverride)
  {
    $this->airportNameOverride = $airportNameOverride;
  }
  public function getAirportNameOverride()
  {
    return $this->airportNameOverride;
  }
  public function setGate($gate)
  {
    $this->gate = $gate;
  }
  public function getGate()
  {
    return $this->gate;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setTerminal($terminal)
  {
    $this->terminal = $terminal;
  }
  public function getTerminal()
  {
    return $this->terminal;
  }
}

class Google_Service_Walletobjects_AppLinkData extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $androidAppLinkInfoType = 'Google_Service_Walletobjects_AppLinkDataAppLinkInfo';
  protected $androidAppLinkInfoDataType = '';
  protected $iosAppLinkInfoType = 'Google_Service_Walletobjects_AppLinkDataAppLinkInfo';
  protected $iosAppLinkInfoDataType = '';
  protected $webAppLinkInfoType = 'Google_Service_Walletobjects_AppLinkDataAppLinkInfo';
  protected $webAppLinkInfoDataType = '';


  public function setAndroidAppLinkInfo(Google_Service_Walletobjects_AppLinkDataAppLinkInfo $androidAppLinkInfo)
  {
    $this->androidAppLinkInfo = $androidAppLinkInfo;
  }
  public function getAndroidAppLinkInfo()
  {
    return $this->androidAppLinkInfo;
  }
  public function setIosAppLinkInfo(Google_Service_Walletobjects_AppLinkDataAppLinkInfo $iosAppLinkInfo)
  {
    $this->iosAppLinkInfo = $iosAppLinkInfo;
  }
  public function getIosAppLinkInfo()
  {
    return $this->iosAppLinkInfo;
  }
  public function setWebAppLinkInfo(Google_Service_Walletobjects_AppLinkDataAppLinkInfo $webAppLinkInfo)
  {
    $this->webAppLinkInfo = $webAppLinkInfo;
  }
  public function getWebAppLinkInfo()
  {
    return $this->webAppLinkInfo;
  }
}

class Google_Service_Walletobjects_AppLinkDataAppLinkInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $appLogoImageType = 'Google_Service_Walletobjects_Image';
  protected $appLogoImageDataType = '';
  protected $appTargetType = 'Google_Service_Walletobjects_AppLinkDataAppLinkInfoAppTarget';
  protected $appTargetDataType = '';
  protected $descriptionType = 'Google_Service_Walletobjects_LocalizedString';
  protected $descriptionDataType = '';
  protected $titleType = 'Google_Service_Walletobjects_LocalizedString';
  protected $titleDataType = '';


  public function setAppLogoImage(Google_Service_Walletobjects_Image $appLogoImage)
  {
    $this->appLogoImage = $appLogoImage;
  }
  public function getAppLogoImage()
  {
    return $this->appLogoImage;
  }
  public function setAppTarget(Google_Service_Walletobjects_AppLinkDataAppLinkInfoAppTarget $appTarget)
  {
    $this->appTarget = $appTarget;
  }
  public function getAppTarget()
  {
    return $this->appTarget;
  }
  public function setDescription(Google_Service_Walletobjects_LocalizedString $description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setTitle(Google_Service_Walletobjects_LocalizedString $title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
}

class Google_Service_Walletobjects_AppLinkDataAppLinkInfoAppTarget extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $targetUriType = 'Google_Service_Walletobjects_Uri';
  protected $targetUriDataType = '';


  public function setTargetUri(Google_Service_Walletobjects_Uri $targetUri)
  {
    $this->targetUri = $targetUri;
  }
  public function getTargetUri()
  {
    return $this->targetUri;
  }
}

class Google_Service_Walletobjects_AuthenticationKey extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $publicKeyPem;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setPublicKeyPem($publicKeyPem)
  {
    $this->publicKeyPem = $publicKeyPem;
  }
  public function getPublicKeyPem()
  {
    return $this->publicKeyPem;
  }
}

class Google_Service_Walletobjects_Barcode extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $alternateText;
  public $kind;
  public $renderEncoding;
  protected $showCodeTextType = 'Google_Service_Walletobjects_LocalizedString';
  protected $showCodeTextDataType = '';
  public $type;
  public $value;


  public function setAlternateText($alternateText)
  {
    $this->alternateText = $alternateText;
  }
  public function getAlternateText()
  {
    return $this->alternateText;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRenderEncoding($renderEncoding)
  {
    $this->renderEncoding = $renderEncoding;
  }
  public function getRenderEncoding()
  {
    return $this->renderEncoding;
  }
  public function setShowCodeText(Google_Service_Walletobjects_LocalizedString $showCodeText)
  {
    $this->showCodeText = $showCodeText;
  }
  public function getShowCodeText()
  {
    return $this->showCodeText;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Google_Service_Walletobjects_BarcodeSectionDetail extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $fieldSelectorType = 'Google_Service_Walletobjects_FieldSelector';
  protected $fieldSelectorDataType = '';


  public function setFieldSelector(Google_Service_Walletobjects_FieldSelector $fieldSelector)
  {
    $this->fieldSelector = $fieldSelector;
  }
  public function getFieldSelector()
  {
    return $this->fieldSelector;
  }
}

class Google_Service_Walletobjects_BoardingAndSeatingInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $boardingDoor;
  public $boardingGroup;
  public $boardingPosition;
  protected $boardingPrivilegeImageType = 'Google_Service_Walletobjects_Image';
  protected $boardingPrivilegeImageDataType = '';
  public $kind;
  protected $seatAssignmentType = 'Google_Service_Walletobjects_LocalizedString';
  protected $seatAssignmentDataType = '';
  public $seatClass;
  public $seatNumber;
  public $sequenceNumber;


  public function setBoardingDoor($boardingDoor)
  {
    $this->boardingDoor = $boardingDoor;
  }
  public function getBoardingDoor()
  {
    return $this->boardingDoor;
  }
  public function setBoardingGroup($boardingGroup)
  {
    $this->boardingGroup = $boardingGroup;
  }
  public function getBoardingGroup()
  {
    return $this->boardingGroup;
  }
  public function setBoardingPosition($boardingPosition)
  {
    $this->boardingPosition = $boardingPosition;
  }
  public function getBoardingPosition()
  {
    return $this->boardingPosition;
  }
  public function setBoardingPrivilegeImage(Google_Service_Walletobjects_Image $boardingPrivilegeImage)
  {
    $this->boardingPrivilegeImage = $boardingPrivilegeImage;
  }
  public function getBoardingPrivilegeImage()
  {
    return $this->boardingPrivilegeImage;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setSeatAssignment(Google_Service_Walletobjects_LocalizedString $seatAssignment)
  {
    $this->seatAssignment = $seatAssignment;
  }
  public function getSeatAssignment()
  {
    return $this->seatAssignment;
  }
  public function setSeatClass($seatClass)
  {
    $this->seatClass = $seatClass;
  }
  public function getSeatClass()
  {
    return $this->seatClass;
  }
  public function setSeatNumber($seatNumber)
  {
    $this->seatNumber = $seatNumber;
  }
  public function getSeatNumber()
  {
    return $this->seatNumber;
  }
  public function setSequenceNumber($sequenceNumber)
  {
    $this->sequenceNumber = $sequenceNumber;
  }
  public function getSequenceNumber()
  {
    return $this->sequenceNumber;
  }
}

class Google_Service_Walletobjects_BoardingAndSeatingPolicy extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $boardingPolicy;
  public $kind;
  public $seatClassPolicy;


  public function setBoardingPolicy($boardingPolicy)
  {
    $this->boardingPolicy = $boardingPolicy;
  }
  public function getBoardingPolicy()
  {
    return $this->boardingPolicy;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setSeatClassPolicy($seatClassPolicy)
  {
    $this->seatClassPolicy = $seatClassPolicy;
  }
  public function getSeatClassPolicy()
  {
    return $this->seatClassPolicy;
  }
}

class Google_Service_Walletobjects_CallbackOptions extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $updateRequestUrl;
  public $url;


  public function setUpdateRequestUrl($updateRequestUrl)
  {
    $this->updateRequestUrl = $updateRequestUrl;
  }
  public function getUpdateRequestUrl()
  {
    return $this->updateRequestUrl;
  }
  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }
}

class Google_Service_Walletobjects_CardBarcodeSectionDetails extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $firstBottomDetailType = 'Google_Service_Walletobjects_BarcodeSectionDetail';
  protected $firstBottomDetailDataType = '';
  protected $firstTopDetailType = 'Google_Service_Walletobjects_BarcodeSectionDetail';
  protected $firstTopDetailDataType = '';
  protected $secondTopDetailType = 'Google_Service_Walletobjects_BarcodeSectionDetail';
  protected $secondTopDetailDataType = '';


  public function setFirstBottomDetail(Google_Service_Walletobjects_BarcodeSectionDetail $firstBottomDetail)
  {
    $this->firstBottomDetail = $firstBottomDetail;
  }
  public function getFirstBottomDetail()
  {
    return $this->firstBottomDetail;
  }
  public function setFirstTopDetail(Google_Service_Walletobjects_BarcodeSectionDetail $firstTopDetail)
  {
    $this->firstTopDetail = $firstTopDetail;
  }
  public function getFirstTopDetail()
  {
    return $this->firstTopDetail;
  }
  public function setSecondTopDetail(Google_Service_Walletobjects_BarcodeSectionDetail $secondTopDetail)
  {
    $this->secondTopDetail = $secondTopDetail;
  }
  public function getSecondTopDetail()
  {
    return $this->secondTopDetail;
  }
}

class Google_Service_Walletobjects_CardRowOneItem extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $itemType = 'Google_Service_Walletobjects_TemplateItem';
  protected $itemDataType = '';


  public function setItem(Google_Service_Walletobjects_TemplateItem $item)
  {
    $this->item = $item;
  }
  public function getItem()
  {
    return $this->item;
  }
}

class Google_Service_Walletobjects_CardRowTemplateInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $oneItemType = 'Google_Service_Walletobjects_CardRowOneItem';
  protected $oneItemDataType = '';
  protected $threeItemsType = 'Google_Service_Walletobjects_CardRowThreeItems';
  protected $threeItemsDataType = '';
  protected $twoItemsType = 'Google_Service_Walletobjects_CardRowTwoItems';
  protected $twoItemsDataType = '';


  public function setOneItem(Google_Service_Walletobjects_CardRowOneItem $oneItem)
  {
    $this->oneItem = $oneItem;
  }
  public function getOneItem()
  {
    return $this->oneItem;
  }
  public function setThreeItems(Google_Service_Walletobjects_CardRowThreeItems $threeItems)
  {
    $this->threeItems = $threeItems;
  }
  public function getThreeItems()
  {
    return $this->threeItems;
  }
  public function setTwoItems(Google_Service_Walletobjects_CardRowTwoItems $twoItems)
  {
    $this->twoItems = $twoItems;
  }
  public function getTwoItems()
  {
    return $this->twoItems;
  }
}

class Google_Service_Walletobjects_CardRowThreeItems extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $endItemType = 'Google_Service_Walletobjects_TemplateItem';
  protected $endItemDataType = '';
  protected $middleItemType = 'Google_Service_Walletobjects_TemplateItem';
  protected $middleItemDataType = '';
  protected $startItemType = 'Google_Service_Walletobjects_TemplateItem';
  protected $startItemDataType = '';


  public function setEndItem(Google_Service_Walletobjects_TemplateItem $endItem)
  {
    $this->endItem = $endItem;
  }
  public function getEndItem()
  {
    return $this->endItem;
  }
  public function setMiddleItem(Google_Service_Walletobjects_TemplateItem $middleItem)
  {
    $this->middleItem = $middleItem;
  }
  public function getMiddleItem()
  {
    return $this->middleItem;
  }
  public function setStartItem(Google_Service_Walletobjects_TemplateItem $startItem)
  {
    $this->startItem = $startItem;
  }
  public function getStartItem()
  {
    return $this->startItem;
  }
}

class Google_Service_Walletobjects_CardRowTwoItems extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $endItemType = 'Google_Service_Walletobjects_TemplateItem';
  protected $endItemDataType = '';
  protected $startItemType = 'Google_Service_Walletobjects_TemplateItem';
  protected $startItemDataType = '';


  public function setEndItem(Google_Service_Walletobjects_TemplateItem $endItem)
  {
    $this->endItem = $endItem;
  }
  public function getEndItem()
  {
    return $this->endItem;
  }
  public function setStartItem(Google_Service_Walletobjects_TemplateItem $startItem)
  {
    $this->startItem = $startItem;
  }
  public function getStartItem()
  {
    return $this->startItem;
  }
}

class Google_Service_Walletobjects_CardTemplateOverride extends Google_Collection
{
  protected $collection_key = 'cardRowTemplateInfos';
  protected $internal_gapi_mappings = array(
  );
  protected $cardRowTemplateInfosType = 'Google_Service_Walletobjects_CardRowTemplateInfo';
  protected $cardRowTemplateInfosDataType = 'array';


  public function setCardRowTemplateInfos($cardRowTemplateInfos)
  {
    $this->cardRowTemplateInfos = $cardRowTemplateInfos;
  }
  public function getCardRowTemplateInfos()
  {
    return $this->cardRowTemplateInfos;
  }
}

class Google_Service_Walletobjects_ClassTemplateInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $cardBarcodeSectionDetailsType = 'Google_Service_Walletobjects_CardBarcodeSectionDetails';
  protected $cardBarcodeSectionDetailsDataType = '';
  protected $cardTemplateOverrideType = 'Google_Service_Walletobjects_CardTemplateOverride';
  protected $cardTemplateOverrideDataType = '';
  protected $detailsTemplateOverrideType = 'Google_Service_Walletobjects_DetailsTemplateOverride';
  protected $detailsTemplateOverrideDataType = '';
  protected $listTemplateOverrideType = 'Google_Service_Walletobjects_ListTemplateOverride';
  protected $listTemplateOverrideDataType = '';


  public function setCardBarcodeSectionDetails(Google_Service_Walletobjects_CardBarcodeSectionDetails $cardBarcodeSectionDetails)
  {
    $this->cardBarcodeSectionDetails = $cardBarcodeSectionDetails;
  }
  public function getCardBarcodeSectionDetails()
  {
    return $this->cardBarcodeSectionDetails;
  }
  public function setCardTemplateOverride(Google_Service_Walletobjects_CardTemplateOverride $cardTemplateOverride)
  {
    $this->cardTemplateOverride = $cardTemplateOverride;
  }
  public function getCardTemplateOverride()
  {
    return $this->cardTemplateOverride;
  }
  public function setDetailsTemplateOverride(Google_Service_Walletobjects_DetailsTemplateOverride $detailsTemplateOverride)
  {
    $this->detailsTemplateOverride = $detailsTemplateOverride;
  }
  public function getDetailsTemplateOverride()
  {
    return $this->detailsTemplateOverride;
  }
  public function setListTemplateOverride(Google_Service_Walletobjects_ListTemplateOverride $listTemplateOverride)
  {
    $this->listTemplateOverride = $listTemplateOverride;
  }
  public function getListTemplateOverride()
  {
    return $this->listTemplateOverride;
  }
}

class Google_Service_Walletobjects_DateTime extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $date;


  public function setDate($date)
  {
    $this->date = $date;
  }
  public function getDate()
  {
    return $this->date;
  }
}

class Google_Service_Walletobjects_DetailsItemInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $itemType = 'Google_Service_Walletobjects_TemplateItem';
  protected $itemDataType = '';


  public function setItem(Google_Service_Walletobjects_TemplateItem $item)
  {
    $this->item = $item;
  }
  public function getItem()
  {
    return $this->item;
  }
}

class Google_Service_Walletobjects_DetailsTemplateOverride extends Google_Collection
{
  protected $collection_key = 'detailsItemInfos';
  protected $internal_gapi_mappings = array(
  );
  protected $detailsItemInfosType = 'Google_Service_Walletobjects_DetailsItemInfo';
  protected $detailsItemInfosDataType = 'array';


  public function setDetailsItemInfos($detailsItemInfos)
  {
    $this->detailsItemInfos = $detailsItemInfos;
  }
  public function getDetailsItemInfos()
  {
    return $this->detailsItemInfos;
  }
}

class Google_Service_Walletobjects_DiscoverableProgram extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $merchantSigninInfoType = 'Google_Service_Walletobjects_DiscoverableProgramMerchantSigninInfo';
  protected $merchantSigninInfoDataType = '';
  protected $merchantSignupInfoType = 'Google_Service_Walletobjects_DiscoverableProgramMerchantSignupInfo';
  protected $merchantSignupInfoDataType = '';
  public $state;


  public function setMerchantSigninInfo(Google_Service_Walletobjects_DiscoverableProgramMerchantSigninInfo $merchantSigninInfo)
  {
    $this->merchantSigninInfo = $merchantSigninInfo;
  }
  public function getMerchantSigninInfo()
  {
    return $this->merchantSigninInfo;
  }
  public function setMerchantSignupInfo(Google_Service_Walletobjects_DiscoverableProgramMerchantSignupInfo $merchantSignupInfo)
  {
    $this->merchantSignupInfo = $merchantSignupInfo;
  }
  public function getMerchantSignupInfo()
  {
    return $this->merchantSignupInfo;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}

class Google_Service_Walletobjects_DiscoverableProgramMerchantSigninInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $signinWebsiteType = 'Google_Service_Walletobjects_Uri';
  protected $signinWebsiteDataType = '';


  public function setSigninWebsite(Google_Service_Walletobjects_Uri $signinWebsite)
  {
    $this->signinWebsite = $signinWebsite;
  }
  public function getSigninWebsite()
  {
    return $this->signinWebsite;
  }
}

class Google_Service_Walletobjects_DiscoverableProgramMerchantSignupInfo extends Google_Collection
{
  protected $collection_key = 'signupSharedDatas';
  protected $internal_gapi_mappings = array(
  );
  public $signupSharedDatas;
  protected $signupWebsiteType = 'Google_Service_Walletobjects_Uri';
  protected $signupWebsiteDataType = '';


  public function setSignupSharedDatas($signupSharedDatas)
  {
    $this->signupSharedDatas = $signupSharedDatas;
  }
  public function getSignupSharedDatas()
  {
    return $this->signupSharedDatas;
  }
  public function setSignupWebsite(Google_Service_Walletobjects_Uri $signupWebsite)
  {
    $this->signupWebsite = $signupWebsite;
  }
  public function getSignupWebsite()
  {
    return $this->signupWebsite;
  }
}

class Google_Service_Walletobjects_EventDateTime extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $customDoorsOpenLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customDoorsOpenLabelDataType = '';
  public $doorsOpen;
  public $doorsOpenLabel;
  public $end;
  public $kind;
  public $start;


  public function setCustomDoorsOpenLabel(Google_Service_Walletobjects_LocalizedString $customDoorsOpenLabel)
  {
    $this->customDoorsOpenLabel = $customDoorsOpenLabel;
  }
  public function getCustomDoorsOpenLabel()
  {
    return $this->customDoorsOpenLabel;
  }
  public function setDoorsOpen($doorsOpen)
  {
    $this->doorsOpen = $doorsOpen;
  }
  public function getDoorsOpen()
  {
    return $this->doorsOpen;
  }
  public function setDoorsOpenLabel($doorsOpenLabel)
  {
    $this->doorsOpenLabel = $doorsOpenLabel;
  }
  public function getDoorsOpenLabel()
  {
    return $this->doorsOpenLabel;
  }
  public function setEnd($end)
  {
    $this->end = $end;
  }
  public function getEnd()
  {
    return $this->end;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setStart($start)
  {
    $this->start = $start;
  }
  public function getStart()
  {
    return $this->start;
  }
}

class Google_Service_Walletobjects_EventReservationInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $confirmationCode;
  public $kind;


  public function setConfirmationCode($confirmationCode)
  {
    $this->confirmationCode = $confirmationCode;
  }
  public function getConfirmationCode()
  {
    return $this->confirmationCode;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_Walletobjects_EventSeat extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $gateType = 'Google_Service_Walletobjects_LocalizedString';
  protected $gateDataType = '';
  public $kind;
  protected $rowType = 'Google_Service_Walletobjects_LocalizedString';
  protected $rowDataType = '';
  protected $seatType = 'Google_Service_Walletobjects_LocalizedString';
  protected $seatDataType = '';
  protected $sectionType = 'Google_Service_Walletobjects_LocalizedString';
  protected $sectionDataType = '';


  public function setGate(Google_Service_Walletobjects_LocalizedString $gate)
  {
    $this->gate = $gate;
  }
  public function getGate()
  {
    return $this->gate;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRow(Google_Service_Walletobjects_LocalizedString $row)
  {
    $this->row = $row;
  }
  public function getRow()
  {
    return $this->row;
  }
  public function setSeat(Google_Service_Walletobjects_LocalizedString $seat)
  {
    $this->seat = $seat;
  }
  public function getSeat()
  {
    return $this->seat;
  }
  public function setSection(Google_Service_Walletobjects_LocalizedString $section)
  {
    $this->section = $section;
  }
  public function getSection()
  {
    return $this->section;
  }
}

class Google_Service_Walletobjects_EventTicketClass extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $allowMultipleUsersPerObject;
  protected $callbackOptionsType = 'Google_Service_Walletobjects_CallbackOptions';
  protected $callbackOptionsDataType = '';
  protected $classTemplateInfoType = 'Google_Service_Walletobjects_ClassTemplateInfo';
  protected $classTemplateInfoDataType = '';
  public $confirmationCodeLabel;
  public $countryCode;
  protected $customConfirmationCodeLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customConfirmationCodeLabelDataType = '';
  protected $customGateLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customGateLabelDataType = '';
  protected $customRowLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customRowLabelDataType = '';
  protected $customSeatLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customSeatLabelDataType = '';
  protected $customSectionLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customSectionLabelDataType = '';
  protected $dateTimeType = 'Google_Service_Walletobjects_EventDateTime';
  protected $dateTimeDataType = '';
  public $enableSmartTap;
  public $eventId;
  protected $eventNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $eventNameDataType = '';
  protected $finePrintType = 'Google_Service_Walletobjects_LocalizedString';
  protected $finePrintDataType = '';
  public $gateLabel;
  protected $heroImageType = 'Google_Service_Walletobjects_Image';
  protected $heroImageDataType = '';
  public $hexBackgroundColor;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedIssuerNameDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $logoType = 'Google_Service_Walletobjects_Image';
  protected $logoDataType = '';
  protected $messagesType = 'Google_Service_Walletobjects_Message';
  protected $messagesDataType = 'array';
  public $multipleDevicesAndHoldersAllowedStatus;
  public $redemptionIssuers;
  protected $reviewType = 'Google_Service_Walletobjects_Review';
  protected $reviewDataType = '';
  public $reviewStatus;
  public $rowLabel;
  public $seatLabel;
  public $sectionLabel;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $venueType = 'Google_Service_Walletobjects_EventVenue';
  protected $venueDataType = '';
  public $version;
  protected $wordMarkType = 'Google_Service_Walletobjects_Image';
  protected $wordMarkDataType = '';


  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  public function setCallbackOptions(Google_Service_Walletobjects_CallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  public function setClassTemplateInfo(Google_Service_Walletobjects_ClassTemplateInfo $classTemplateInfo)
  {
    $this->classTemplateInfo = $classTemplateInfo;
  }
  public function getClassTemplateInfo()
  {
    return $this->classTemplateInfo;
  }
  public function setConfirmationCodeLabel($confirmationCodeLabel)
  {
    $this->confirmationCodeLabel = $confirmationCodeLabel;
  }
  public function getConfirmationCodeLabel()
  {
    return $this->confirmationCodeLabel;
  }
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setCustomConfirmationCodeLabel(Google_Service_Walletobjects_LocalizedString $customConfirmationCodeLabel)
  {
    $this->customConfirmationCodeLabel = $customConfirmationCodeLabel;
  }
  public function getCustomConfirmationCodeLabel()
  {
    return $this->customConfirmationCodeLabel;
  }
  public function setCustomGateLabel(Google_Service_Walletobjects_LocalizedString $customGateLabel)
  {
    $this->customGateLabel = $customGateLabel;
  }
  public function getCustomGateLabel()
  {
    return $this->customGateLabel;
  }
  public function setCustomRowLabel(Google_Service_Walletobjects_LocalizedString $customRowLabel)
  {
    $this->customRowLabel = $customRowLabel;
  }
  public function getCustomRowLabel()
  {
    return $this->customRowLabel;
  }
  public function setCustomSeatLabel(Google_Service_Walletobjects_LocalizedString $customSeatLabel)
  {
    $this->customSeatLabel = $customSeatLabel;
  }
  public function getCustomSeatLabel()
  {
    return $this->customSeatLabel;
  }
  public function setCustomSectionLabel(Google_Service_Walletobjects_LocalizedString $customSectionLabel)
  {
    $this->customSectionLabel = $customSectionLabel;
  }
  public function getCustomSectionLabel()
  {
    return $this->customSectionLabel;
  }
  public function setDateTime(Google_Service_Walletobjects_EventDateTime $dateTime)
  {
    $this->dateTime = $dateTime;
  }
  public function getDateTime()
  {
    return $this->dateTime;
  }
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  public function getEventId()
  {
    return $this->eventId;
  }
  public function setEventName(Google_Service_Walletobjects_LocalizedString $eventName)
  {
    $this->eventName = $eventName;
  }
  public function getEventName()
  {
    return $this->eventName;
  }
  public function setFinePrint(Google_Service_Walletobjects_LocalizedString $finePrint)
  {
    $this->finePrint = $finePrint;
  }
  public function getFinePrint()
  {
    return $this->finePrint;
  }
  public function setGateLabel($gateLabel)
  {
    $this->gateLabel = $gateLabel;
  }
  public function getGateLabel()
  {
    return $this->gateLabel;
  }
  public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setLogo(Google_Service_Walletobjects_Image $logo)
  {
    $this->logo = $logo;
  }
  public function getLogo()
  {
    return $this->logo;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  public function setReview(Google_Service_Walletobjects_Review $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  public function setRowLabel($rowLabel)
  {
    $this->rowLabel = $rowLabel;
  }
  public function getRowLabel()
  {
    return $this->rowLabel;
  }
  public function setSeatLabel($seatLabel)
  {
    $this->seatLabel = $seatLabel;
  }
  public function getSeatLabel()
  {
    return $this->seatLabel;
  }
  public function setSectionLabel($sectionLabel)
  {
    $this->sectionLabel = $sectionLabel;
  }
  public function getSectionLabel()
  {
    return $this->sectionLabel;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setVenue(Google_Service_Walletobjects_EventVenue $venue)
  {
    $this->venue = $venue;
  }
  public function getVenue()
  {
    return $this->venue;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

class Google_Service_Walletobjects_EventTicketClassAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_EventTicketClass';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_EventTicketClass $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_EventTicketClassListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_EventTicketClass';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_EventTicketObject extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  protected $appLinkDataType = 'Google_Service_Walletobjects_AppLinkData';
  protected $appLinkDataDataType = '';
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_EventTicketClass';
  protected $classReferenceDataType = '';
  public $disableExpirationNotification;
  protected $faceValueType = 'Google_Service_Walletobjects_Money';
  protected $faceValueDataType = '';
  protected $groupingInfoType = 'Google_Service_Walletobjects_GroupingInfo';
  protected $groupingInfoDataType = '';
  public $hasLinkedDevice;
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $kind;
  public $linkedOfferIds;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_Message';
  protected $messagesDataType = 'array';
  protected $reservationInfoType = 'Google_Service_Walletobjects_EventReservationInfo';
  protected $reservationInfoDataType = '';
  protected $seatInfoType = 'Google_Service_Walletobjects_EventSeat';
  protected $seatInfoDataType = '';
  public $smartTapRedemptionValue;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $ticketHolderName;
  public $ticketNumber;
  protected $ticketTypeType = 'Google_Service_Walletobjects_LocalizedString';
  protected $ticketTypeDataType = '';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;


  public function setAppLinkData(Google_Service_Walletobjects_AppLinkData $appLinkData)
  {
    $this->appLinkData = $appLinkData;
  }
  public function getAppLinkData()
  {
    return $this->appLinkData;
  }
  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  public function getBarcode()
  {
    return $this->barcode;
  }
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
  public function setClassReference(Google_Service_Walletobjects_EventTicketClass $classReference)
  {
    $this->classReference = $classReference;
  }
  public function getClassReference()
  {
    return $this->classReference;
  }
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  public function setFaceValue(Google_Service_Walletobjects_Money $faceValue)
  {
    $this->faceValue = $faceValue;
  }
  public function getFaceValue()
  {
    return $this->faceValue;
  }
  public function setGroupingInfo(Google_Service_Walletobjects_GroupingInfo $groupingInfo)
  {
    $this->groupingInfo = $groupingInfo;
  }
  public function getGroupingInfo()
  {
    return $this->groupingInfo;
  }
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinkedOfferIds($linkedOfferIds)
  {
    $this->linkedOfferIds = $linkedOfferIds;
  }
  public function getLinkedOfferIds()
  {
    return $this->linkedOfferIds;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setReservationInfo(Google_Service_Walletobjects_EventReservationInfo $reservationInfo)
  {
    $this->reservationInfo = $reservationInfo;
  }
  public function getReservationInfo()
  {
    return $this->reservationInfo;
  }
  public function setSeatInfo(Google_Service_Walletobjects_EventSeat $seatInfo)
  {
    $this->seatInfo = $seatInfo;
  }
  public function getSeatInfo()
  {
    return $this->seatInfo;
  }
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setTicketHolderName($ticketHolderName)
  {
    $this->ticketHolderName = $ticketHolderName;
  }
  public function getTicketHolderName()
  {
    return $this->ticketHolderName;
  }
  public function setTicketNumber($ticketNumber)
  {
    $this->ticketNumber = $ticketNumber;
  }
  public function getTicketNumber()
  {
    return $this->ticketNumber;
  }
  public function setTicketType(Google_Service_Walletobjects_LocalizedString $ticketType)
  {
    $this->ticketType = $ticketType;
  }
  public function getTicketType()
  {
    return $this->ticketType;
  }
  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_EventTicketObjectAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_EventTicketObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_EventTicketObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_EventTicketObjectListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_EventTicketObject';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_EventVenue extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $addressType = 'Google_Service_Walletobjects_LocalizedString';
  protected $addressDataType = '';
  public $kind;
  protected $nameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $nameDataType = '';


  public function setAddress(Google_Service_Walletobjects_LocalizedString $address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setName(Google_Service_Walletobjects_LocalizedString $name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class Google_Service_Walletobjects_FieldReference extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $dateFormat;
  public $fieldPath;


  public function setDateFormat($dateFormat)
  {
    $this->dateFormat = $dateFormat;
  }
  public function getDateFormat()
  {
    return $this->dateFormat;
  }
  public function setFieldPath($fieldPath)
  {
    $this->fieldPath = $fieldPath;
  }
  public function getFieldPath()
  {
    return $this->fieldPath;
  }
}

class Google_Service_Walletobjects_FieldSelector extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldReference';
  protected $fieldsDataType = 'array';


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
}

class Google_Service_Walletobjects_FirstRowOption extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $fieldOptionType = 'Google_Service_Walletobjects_FieldSelector';
  protected $fieldOptionDataType = '';
  public $transitOption;


  public function setFieldOption(Google_Service_Walletobjects_FieldSelector $fieldOption)
  {
    $this->fieldOption = $fieldOption;
  }
  public function getFieldOption()
  {
    return $this->fieldOption;
  }
  public function setTransitOption($transitOption)
  {
    $this->transitOption = $transitOption;
  }
  public function getTransitOption()
  {
    return $this->transitOption;
  }
}

class Google_Service_Walletobjects_FlightCarrier extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $airlineAllianceLogoType = 'Google_Service_Walletobjects_Image';
  protected $airlineAllianceLogoDataType = '';
  protected $airlineLogoType = 'Google_Service_Walletobjects_Image';
  protected $airlineLogoDataType = '';
  protected $airlineNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $airlineNameDataType = '';
  public $carrierIataCode;
  public $carrierIcaoCode;
  public $kind;


  public function setAirlineAllianceLogo(Google_Service_Walletobjects_Image $airlineAllianceLogo)
  {
    $this->airlineAllianceLogo = $airlineAllianceLogo;
  }
  public function getAirlineAllianceLogo()
  {
    return $this->airlineAllianceLogo;
  }
  public function setAirlineLogo(Google_Service_Walletobjects_Image $airlineLogo)
  {
    $this->airlineLogo = $airlineLogo;
  }
  public function getAirlineLogo()
  {
    return $this->airlineLogo;
  }
  public function setAirlineName(Google_Service_Walletobjects_LocalizedString $airlineName)
  {
    $this->airlineName = $airlineName;
  }
  public function getAirlineName()
  {
    return $this->airlineName;
  }
  public function setCarrierIataCode($carrierIataCode)
  {
    $this->carrierIataCode = $carrierIataCode;
  }
  public function getCarrierIataCode()
  {
    return $this->carrierIataCode;
  }
  public function setCarrierIcaoCode($carrierIcaoCode)
  {
    $this->carrierIcaoCode = $carrierIcaoCode;
  }
  public function getCarrierIcaoCode()
  {
    return $this->carrierIcaoCode;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_Walletobjects_FlightClass extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $allowMultipleUsersPerObject;
  protected $boardingAndSeatingPolicyType = 'Google_Service_Walletobjects_BoardingAndSeatingPolicy';
  protected $boardingAndSeatingPolicyDataType = '';
  protected $callbackOptionsType = 'Google_Service_Walletobjects_CallbackOptions';
  protected $callbackOptionsDataType = '';
  protected $classTemplateInfoType = 'Google_Service_Walletobjects_ClassTemplateInfo';
  protected $classTemplateInfoDataType = '';
  public $countryCode;
  protected $destinationType = 'Google_Service_Walletobjects_AirportInfo';
  protected $destinationDataType = '';
  public $enableSmartTap;
  protected $flightHeaderType = 'Google_Service_Walletobjects_FlightHeader';
  protected $flightHeaderDataType = '';
  public $flightStatus;
  protected $heroImageType = 'Google_Service_Walletobjects_Image';
  protected $heroImageDataType = '';
  public $hexBackgroundColor;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  public $localBoardingDateTime;
  public $localEstimatedOrActualArrivalDateTime;
  public $localEstimatedOrActualDepartureDateTime;
  public $localGateClosingDateTime;
  public $localScheduledArrivalDateTime;
  public $localScheduledDepartureDateTime;
  protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedIssuerNameDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_Message';
  protected $messagesDataType = 'array';
  public $multipleDevicesAndHoldersAllowedStatus;
  protected $originType = 'Google_Service_Walletobjects_AirportInfo';
  protected $originDataType = '';
  public $redemptionIssuers;
  protected $reviewType = 'Google_Service_Walletobjects_Review';
  protected $reviewDataType = '';
  public $reviewStatus;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $version;
  protected $wordMarkType = 'Google_Service_Walletobjects_Image';
  protected $wordMarkDataType = '';


  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  public function setBoardingAndSeatingPolicy(Google_Service_Walletobjects_BoardingAndSeatingPolicy $boardingAndSeatingPolicy)
  {
    $this->boardingAndSeatingPolicy = $boardingAndSeatingPolicy;
  }
  public function getBoardingAndSeatingPolicy()
  {
    return $this->boardingAndSeatingPolicy;
  }
  public function setCallbackOptions(Google_Service_Walletobjects_CallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  public function setClassTemplateInfo(Google_Service_Walletobjects_ClassTemplateInfo $classTemplateInfo)
  {
    $this->classTemplateInfo = $classTemplateInfo;
  }
  public function getClassTemplateInfo()
  {
    return $this->classTemplateInfo;
  }
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setDestination(Google_Service_Walletobjects_AirportInfo $destination)
  {
    $this->destination = $destination;
  }
  public function getDestination()
  {
    return $this->destination;
  }
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  public function setFlightHeader(Google_Service_Walletobjects_FlightHeader $flightHeader)
  {
    $this->flightHeader = $flightHeader;
  }
  public function getFlightHeader()
  {
    return $this->flightHeader;
  }
  public function setFlightStatus($flightStatus)
  {
    $this->flightStatus = $flightStatus;
  }
  public function getFlightStatus()
  {
    return $this->flightStatus;
  }
  public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocalBoardingDateTime($localBoardingDateTime)
  {
    $this->localBoardingDateTime = $localBoardingDateTime;
  }
  public function getLocalBoardingDateTime()
  {
    return $this->localBoardingDateTime;
  }
  public function setLocalEstimatedOrActualArrivalDateTime($localEstimatedOrActualArrivalDateTime)
  {
    $this->localEstimatedOrActualArrivalDateTime = $localEstimatedOrActualArrivalDateTime;
  }
  public function getLocalEstimatedOrActualArrivalDateTime()
  {
    return $this->localEstimatedOrActualArrivalDateTime;
  }
  public function setLocalEstimatedOrActualDepartureDateTime($localEstimatedOrActualDepartureDateTime)
  {
    $this->localEstimatedOrActualDepartureDateTime = $localEstimatedOrActualDepartureDateTime;
  }
  public function getLocalEstimatedOrActualDepartureDateTime()
  {
    return $this->localEstimatedOrActualDepartureDateTime;
  }
  public function setLocalGateClosingDateTime($localGateClosingDateTime)
  {
    $this->localGateClosingDateTime = $localGateClosingDateTime;
  }
  public function getLocalGateClosingDateTime()
  {
    return $this->localGateClosingDateTime;
  }
  public function setLocalScheduledArrivalDateTime($localScheduledArrivalDateTime)
  {
    $this->localScheduledArrivalDateTime = $localScheduledArrivalDateTime;
  }
  public function getLocalScheduledArrivalDateTime()
  {
    return $this->localScheduledArrivalDateTime;
  }
  public function setLocalScheduledDepartureDateTime($localScheduledDepartureDateTime)
  {
    $this->localScheduledDepartureDateTime = $localScheduledDepartureDateTime;
  }
  public function getLocalScheduledDepartureDateTime()
  {
    return $this->localScheduledDepartureDateTime;
  }
  public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  public function setOrigin(Google_Service_Walletobjects_AirportInfo $origin)
  {
    $this->origin = $origin;
  }
  public function getOrigin()
  {
    return $this->origin;
  }
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  public function setReview(Google_Service_Walletobjects_Review $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

class Google_Service_Walletobjects_FlightClassAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_FlightClass';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_FlightClass $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_FlightClassListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_FlightClass';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_FlightHeader extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $carrierType = 'Google_Service_Walletobjects_FlightCarrier';
  protected $carrierDataType = '';
  public $flightNumber;
  public $kind;
  protected $operatingCarrierType = 'Google_Service_Walletobjects_FlightCarrier';
  protected $operatingCarrierDataType = '';
  public $operatingFlightNumber;


  public function setCarrier(Google_Service_Walletobjects_FlightCarrier $carrier)
  {
    $this->carrier = $carrier;
  }
  public function getCarrier()
  {
    return $this->carrier;
  }
  public function setFlightNumber($flightNumber)
  {
    $this->flightNumber = $flightNumber;
  }
  public function getFlightNumber()
  {
    return $this->flightNumber;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setOperatingCarrier(Google_Service_Walletobjects_FlightCarrier $operatingCarrier)
  {
    $this->operatingCarrier = $operatingCarrier;
  }
  public function getOperatingCarrier()
  {
    return $this->operatingCarrier;
  }
  public function setOperatingFlightNumber($operatingFlightNumber)
  {
    $this->operatingFlightNumber = $operatingFlightNumber;
  }
  public function getOperatingFlightNumber()
  {
    return $this->operatingFlightNumber;
  }
}

class Google_Service_Walletobjects_FlightObject extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  protected $appLinkDataType = 'Google_Service_Walletobjects_AppLinkData';
  protected $appLinkDataDataType = '';
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  protected $boardingAndSeatingInfoType = 'Google_Service_Walletobjects_BoardingAndSeatingInfo';
  protected $boardingAndSeatingInfoDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_FlightClass';
  protected $classReferenceDataType = '';
  public $disableExpirationNotification;
  public $hasLinkedDevice;
  public $hasUsers;
  public $hexBackgroundColor;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_Message';
  protected $messagesDataType = 'array';
  public $passengerName;
  protected $reservationInfoType = 'Google_Service_Walletobjects_ReservationInfo';
  protected $reservationInfoDataType = '';
  protected $securityProgramLogoType = 'Google_Service_Walletobjects_Image';
  protected $securityProgramLogoDataType = '';
  public $smartTapRedemptionValue;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;


  public function setAppLinkData(Google_Service_Walletobjects_AppLinkData $appLinkData)
  {
    $this->appLinkData = $appLinkData;
  }
  public function getAppLinkData()
  {
    return $this->appLinkData;
  }
  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  public function getBarcode()
  {
    return $this->barcode;
  }
  public function setBoardingAndSeatingInfo(Google_Service_Walletobjects_BoardingAndSeatingInfo $boardingAndSeatingInfo)
  {
    $this->boardingAndSeatingInfo = $boardingAndSeatingInfo;
  }
  public function getBoardingAndSeatingInfo()
  {
    return $this->boardingAndSeatingInfo;
  }
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
  public function setClassReference(Google_Service_Walletobjects_FlightClass $classReference)
  {
    $this->classReference = $classReference;
  }
  public function getClassReference()
  {
    return $this->classReference;
  }
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setPassengerName($passengerName)
  {
    $this->passengerName = $passengerName;
  }
  public function getPassengerName()
  {
    return $this->passengerName;
  }
  public function setReservationInfo(Google_Service_Walletobjects_ReservationInfo $reservationInfo)
  {
    $this->reservationInfo = $reservationInfo;
  }
  public function getReservationInfo()
  {
    return $this->reservationInfo;
  }
  public function setSecurityProgramLogo(Google_Service_Walletobjects_Image $securityProgramLogo)
  {
    $this->securityProgramLogo = $securityProgramLogo;
  }
  public function getSecurityProgramLogo()
  {
    return $this->securityProgramLogo;
  }
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_FlightObjectAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_FlightObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_FlightObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_FlightObjectListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_FlightObject';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_FrequentFlyerInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $frequentFlyerNumber;
  protected $frequentFlyerProgramNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $frequentFlyerProgramNameDataType = '';
  public $kind;


  public function setFrequentFlyerNumber($frequentFlyerNumber)
  {
    $this->frequentFlyerNumber = $frequentFlyerNumber;
  }
  public function getFrequentFlyerNumber()
  {
    return $this->frequentFlyerNumber;
  }
  public function setFrequentFlyerProgramName(Google_Service_Walletobjects_LocalizedString $frequentFlyerProgramName)
  {
    $this->frequentFlyerProgramName = $frequentFlyerProgramName;
  }
  public function getFrequentFlyerProgramName()
  {
    return $this->frequentFlyerProgramName;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_Walletobjects_GiftCardClass extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $allowBarcodeRedemption;
  public $allowMultipleUsersPerObject;
  protected $callbackOptionsType = 'Google_Service_Walletobjects_CallbackOptions';
  protected $callbackOptionsDataType = '';
  public $cardNumberLabel;
  protected $classTemplateInfoType = 'Google_Service_Walletobjects_ClassTemplateInfo';
  protected $classTemplateInfoDataType = '';
  public $countryCode;
  public $enableSmartTap;
  public $eventNumberLabel;
  protected $heroImageType = 'Google_Service_Walletobjects_Image';
  protected $heroImageDataType = '';
  public $hexBackgroundColor;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $localizedCardNumberLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedCardNumberLabelDataType = '';
  protected $localizedEventNumberLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedEventNumberLabelDataType = '';
  protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedIssuerNameDataType = '';
  protected $localizedMerchantNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedMerchantNameDataType = '';
  protected $localizedPinLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedPinLabelDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  public $merchantName;
  protected $messagesType = 'Google_Service_Walletobjects_Message';
  protected $messagesDataType = 'array';
  public $multipleDevicesAndHoldersAllowedStatus;
  public $pinLabel;
  protected $programLogoType = 'Google_Service_Walletobjects_Image';
  protected $programLogoDataType = '';
  public $redemptionIssuers;
  protected $reviewType = 'Google_Service_Walletobjects_Review';
  protected $reviewDataType = '';
  public $reviewStatus;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $version;
  protected $wordMarkType = 'Google_Service_Walletobjects_Image';
  protected $wordMarkDataType = '';


  public function setAllowBarcodeRedemption($allowBarcodeRedemption)
  {
    $this->allowBarcodeRedemption = $allowBarcodeRedemption;
  }
  public function getAllowBarcodeRedemption()
  {
    return $this->allowBarcodeRedemption;
  }
  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  public function setCallbackOptions(Google_Service_Walletobjects_CallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  public function setCardNumberLabel($cardNumberLabel)
  {
    $this->cardNumberLabel = $cardNumberLabel;
  }
  public function getCardNumberLabel()
  {
    return $this->cardNumberLabel;
  }
  public function setClassTemplateInfo(Google_Service_Walletobjects_ClassTemplateInfo $classTemplateInfo)
  {
    $this->classTemplateInfo = $classTemplateInfo;
  }
  public function getClassTemplateInfo()
  {
    return $this->classTemplateInfo;
  }
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  public function setEventNumberLabel($eventNumberLabel)
  {
    $this->eventNumberLabel = $eventNumberLabel;
  }
  public function getEventNumberLabel()
  {
    return $this->eventNumberLabel;
  }
  public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocalizedCardNumberLabel(Google_Service_Walletobjects_LocalizedString $localizedCardNumberLabel)
  {
    $this->localizedCardNumberLabel = $localizedCardNumberLabel;
  }
  public function getLocalizedCardNumberLabel()
  {
    return $this->localizedCardNumberLabel;
  }
  public function setLocalizedEventNumberLabel(Google_Service_Walletobjects_LocalizedString $localizedEventNumberLabel)
  {
    $this->localizedEventNumberLabel = $localizedEventNumberLabel;
  }
  public function getLocalizedEventNumberLabel()
  {
    return $this->localizedEventNumberLabel;
  }
  public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  public function setLocalizedMerchantName(Google_Service_Walletobjects_LocalizedString $localizedMerchantName)
  {
    $this->localizedMerchantName = $localizedMerchantName;
  }
  public function getLocalizedMerchantName()
  {
    return $this->localizedMerchantName;
  }
  public function setLocalizedPinLabel(Google_Service_Walletobjects_LocalizedString $localizedPinLabel)
  {
    $this->localizedPinLabel = $localizedPinLabel;
  }
  public function getLocalizedPinLabel()
  {
    return $this->localizedPinLabel;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMerchantName($merchantName)
  {
    $this->merchantName = $merchantName;
  }
  public function getMerchantName()
  {
    return $this->merchantName;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  public function setPinLabel($pinLabel)
  {
    $this->pinLabel = $pinLabel;
  }
  public function getPinLabel()
  {
    return $this->pinLabel;
  }
  public function setProgramLogo(Google_Service_Walletobjects_Image $programLogo)
  {
    $this->programLogo = $programLogo;
  }
  public function getProgramLogo()
  {
    return $this->programLogo;
  }
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  public function setReview(Google_Service_Walletobjects_Review $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

class Google_Service_Walletobjects_GiftCardClassAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_GiftCardClass';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_GiftCardClass $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_GiftCardClassListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_GiftCardClass';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_GiftCardObject extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  protected $appLinkDataType = 'Google_Service_Walletobjects_AppLinkData';
  protected $appLinkDataDataType = '';
  protected $balanceType = 'Google_Service_Walletobjects_Money';
  protected $balanceDataType = '';
  protected $balanceUpdateTimeType = 'Google_Service_Walletobjects_DateTime';
  protected $balanceUpdateTimeDataType = '';
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $cardNumber;
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_GiftCardClass';
  protected $classReferenceDataType = '';
  public $disableExpirationNotification;
  public $eventNumber;
  public $hasLinkedDevice;
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_Message';
  protected $messagesDataType = 'array';
  public $pin;
  public $smartTapRedemptionValue;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;


  public function setAppLinkData(Google_Service_Walletobjects_AppLinkData $appLinkData)
  {
    $this->appLinkData = $appLinkData;
  }
  public function getAppLinkData()
  {
    return $this->appLinkData;
  }
  public function setBalance(Google_Service_Walletobjects_Money $balance)
  {
    $this->balance = $balance;
  }
  public function getBalance()
  {
    return $this->balance;
  }
  public function setBalanceUpdateTime(Google_Service_Walletobjects_DateTime $balanceUpdateTime)
  {
    $this->balanceUpdateTime = $balanceUpdateTime;
  }
  public function getBalanceUpdateTime()
  {
    return $this->balanceUpdateTime;
  }
  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  public function getBarcode()
  {
    return $this->barcode;
  }
  public function setCardNumber($cardNumber)
  {
    $this->cardNumber = $cardNumber;
  }
  public function getCardNumber()
  {
    return $this->cardNumber;
  }
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
  public function setClassReference(Google_Service_Walletobjects_GiftCardClass $classReference)
  {
    $this->classReference = $classReference;
  }
  public function getClassReference()
  {
    return $this->classReference;
  }
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  public function setEventNumber($eventNumber)
  {
    $this->eventNumber = $eventNumber;
  }
  public function getEventNumber()
  {
    return $this->eventNumber;
  }
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setPin($pin)
  {
    $this->pin = $pin;
  }
  public function getPin()
  {
    return $this->pin;
  }
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_GiftCardObjectAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_GiftCardObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_GiftCardObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_GiftCardObjectListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_GiftCardObject';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_GroupingInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $sortIndex;


  public function setSortIndex($sortIndex)
  {
    $this->sortIndex = $sortIndex;
  }
  public function getSortIndex()
  {
    return $this->sortIndex;
  }
}

class Google_Service_Walletobjects_Image extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  protected $sourceUriType = 'Google_Service_Walletobjects_ImageUri';
  protected $sourceUriDataType = '';


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setSourceUri(Google_Service_Walletobjects_ImageUri $sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }
  public function getSourceUri()
  {
    return $this->sourceUri;
  }
}

class Google_Service_Walletobjects_ImageModuleData extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  protected $mainImageType = 'Google_Service_Walletobjects_Image';
  protected $mainImageDataType = '';


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setMainImage(Google_Service_Walletobjects_Image $mainImage)
  {
    $this->mainImage = $mainImage;
  }
  public function getMainImage()
  {
    return $this->mainImage;
  }
}

class Google_Service_Walletobjects_ImageUri extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $description;
  protected $localizedDescriptionType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedDescriptionDataType = '';
  public $uri;


  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setLocalizedDescription(Google_Service_Walletobjects_LocalizedString $localizedDescription)
  {
    $this->localizedDescription = $localizedDescription;
  }
  public function getLocalizedDescription()
  {
    return $this->localizedDescription;
  }
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  public function getUri()
  {
    return $this->uri;
  }
}

class Google_Service_Walletobjects_InfoModuleData extends Google_Collection
{
  protected $collection_key = 'labelValueRows';
  protected $internal_gapi_mappings = array(
  );
  protected $labelValueRowsType = 'Google_Service_Walletobjects_LabelValueRow';
  protected $labelValueRowsDataType = 'array';
  public $showLastUpdateTime;


  public function setLabelValueRows($labelValueRows)
  {
    $this->labelValueRows = $labelValueRows;
  }
  public function getLabelValueRows()
  {
    return $this->labelValueRows;
  }
  public function setShowLastUpdateTime($showLastUpdateTime)
  {
    $this->showLastUpdateTime = $showLastUpdateTime;
  }
  public function getShowLastUpdateTime()
  {
    return $this->showLastUpdateTime;
  }
}

class Google_Service_Walletobjects_Issuer extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $contactInfoType = 'Google_Service_Walletobjects_IssuerContactInfo';
  protected $contactInfoDataType = '';
  public $homepageUrl;
  public $issuerId;
  public $name;
  protected $smartTapMerchantDataType = 'Google_Service_Walletobjects_SmartTapMerchantData';
  protected $smartTapMerchantDataDataType = '';


  public function setContactInfo(Google_Service_Walletobjects_IssuerContactInfo $contactInfo)
  {
    $this->contactInfo = $contactInfo;
  }
  public function getContactInfo()
  {
    return $this->contactInfo;
  }
  public function setHomepageUrl($homepageUrl)
  {
    $this->homepageUrl = $homepageUrl;
  }
  public function getHomepageUrl()
  {
    return $this->homepageUrl;
  }
  public function setIssuerId($issuerId)
  {
    $this->issuerId = $issuerId;
  }
  public function getIssuerId()
  {
    return $this->issuerId;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setSmartTapMerchantData(Google_Service_Walletobjects_SmartTapMerchantData $smartTapMerchantData)
  {
    $this->smartTapMerchantData = $smartTapMerchantData;
  }
  public function getSmartTapMerchantData()
  {
    return $this->smartTapMerchantData;
  }
}

class Google_Service_Walletobjects_IssuerContactInfo extends Google_Collection
{
  protected $collection_key = 'alertsEmails';
  protected $internal_gapi_mappings = array(
  );
  public $alertsEmails;
  public $email;
  public $name;
  public $phone;


  public function setAlertsEmails($alertsEmails)
  {
    $this->alertsEmails = $alertsEmails;
  }
  public function getAlertsEmails()
  {
    return $this->alertsEmails;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPhone($phone)
  {
    $this->phone = $phone;
  }
  public function getPhone()
  {
    return $this->phone;
  }
}

class Google_Service_Walletobjects_IssuerListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $resourcesType = 'Google_Service_Walletobjects_Issuer';
  protected $resourcesDataType = 'array';


  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_IssuerToUserInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $action;
  protected $signUpInfoType = 'Google_Service_Walletobjects_SignUpInfo';
  protected $signUpInfoDataType = '';
  public $url;
  public $value;


  public function setAction($action)
  {
    $this->action = $action;
  }
  public function getAction()
  {
    return $this->action;
  }
  public function setSignUpInfo(Google_Service_Walletobjects_SignUpInfo $signUpInfo)
  {
    $this->signUpInfo = $signUpInfo;
  }
  public function getSignUpInfo()
  {
    return $this->signUpInfo;
  }
  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Google_Service_Walletobjects_JwtInsertResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourcesType = 'Google_Service_Walletobjects_Resources';
  protected $resourcesDataType = '';
  public $saveUri;


  public function setResources(Google_Service_Walletobjects_Resources $resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
  public function setSaveUri($saveUri)
  {
    $this->saveUri = $saveUri;
  }
  public function getSaveUri()
  {
    return $this->saveUri;
  }
}

class Google_Service_Walletobjects_JwtResource extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $jwt;


  public function setJwt($jwt)
  {
    $this->jwt = $jwt;
  }
  public function getJwt()
  {
    return $this->jwt;
  }
}

class Google_Service_Walletobjects_LabelValue extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $label;
  protected $localizedLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedLabelDataType = '';
  protected $localizedValueType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedValueDataType = '';
  public $value;


  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setLocalizedLabel(Google_Service_Walletobjects_LocalizedString $localizedLabel)
  {
    $this->localizedLabel = $localizedLabel;
  }
  public function getLocalizedLabel()
  {
    return $this->localizedLabel;
  }
  public function setLocalizedValue(Google_Service_Walletobjects_LocalizedString $localizedValue)
  {
    $this->localizedValue = $localizedValue;
  }
  public function getLocalizedValue()
  {
    return $this->localizedValue;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Google_Service_Walletobjects_LabelValueRow extends Google_Collection
{
  protected $collection_key = 'columns';
  protected $internal_gapi_mappings = array(
  );
  protected $columnsType = 'Google_Service_Walletobjects_LabelValue';
  protected $columnsDataType = 'array';


  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  public function getColumns()
  {
    return $this->columns;
  }
}

class Google_Service_Walletobjects_LatLongPoint extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $latitude;
  public $longitude;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }
  public function getLatitude()
  {
    return $this->latitude;
  }
  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
  public function getLongitude()
  {
    return $this->longitude;
  }
}

class Google_Service_Walletobjects_LinksModuleData extends Google_Collection
{
  protected $collection_key = 'uris';
  protected $internal_gapi_mappings = array(
  );
  protected $urisType = 'Google_Service_Walletobjects_Uri';
  protected $urisDataType = 'array';


  public function setUris($uris)
  {
    $this->uris = $uris;
  }
  public function getUris()
  {
    return $this->uris;
  }
}

class Google_Service_Walletobjects_ListTemplateOverride extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $firstRowOptionType = 'Google_Service_Walletobjects_FirstRowOption';
  protected $firstRowOptionDataType = '';
  protected $secondRowOptionType = 'Google_Service_Walletobjects_FieldSelector';
  protected $secondRowOptionDataType = '';
  protected $thirdRowOptionType = 'Google_Service_Walletobjects_FieldSelector';
  protected $thirdRowOptionDataType = '';


  public function setFirstRowOption(Google_Service_Walletobjects_FirstRowOption $firstRowOption)
  {
    $this->firstRowOption = $firstRowOption;
  }
  public function getFirstRowOption()
  {
    return $this->firstRowOption;
  }
  public function setSecondRowOption(Google_Service_Walletobjects_FieldSelector $secondRowOption)
  {
    $this->secondRowOption = $secondRowOption;
  }
  public function getSecondRowOption()
  {
    return $this->secondRowOption;
  }
  public function setThirdRowOption(Google_Service_Walletobjects_FieldSelector $thirdRowOption)
  {
    $this->thirdRowOption = $thirdRowOption;
  }
  public function getThirdRowOption()
  {
    return $this->thirdRowOption;
  }
}

class Google_Service_Walletobjects_LocalizedString extends Google_Collection
{
  protected $collection_key = 'translatedValues';
  protected $internal_gapi_mappings = array(
  );
  protected $defaultValueType = 'Google_Service_Walletobjects_TranslatedString';
  protected $defaultValueDataType = '';
  public $kind;
  protected $translatedValuesType = 'Google_Service_Walletobjects_TranslatedString';
  protected $translatedValuesDataType = 'array';


  public function setDefaultValue(Google_Service_Walletobjects_TranslatedString $defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  public function getDefaultValue()
  {
    return $this->defaultValue;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setTranslatedValues($translatedValues)
  {
    $this->translatedValues = $translatedValues;
  }
  public function getTranslatedValues()
  {
    return $this->translatedValues;
  }
}

class Google_Service_Walletobjects_LoyaltyClass extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $accountIdLabel;
  public $accountNameLabel;
  public $allowMultipleUsersPerObject;
  protected $callbackOptionsType = 'Google_Service_Walletobjects_CallbackOptions';
  protected $callbackOptionsDataType = '';
  protected $classTemplateInfoType = 'Google_Service_Walletobjects_ClassTemplateInfo';
  protected $classTemplateInfoDataType = '';
  public $countryCode;
  protected $discoverableProgramType = 'Google_Service_Walletobjects_DiscoverableProgram';
  protected $discoverableProgramDataType = '';
  public $enableSmartTap;
  protected $heroImageType = 'Google_Service_Walletobjects_Image';
  protected $heroImageDataType = '';
  public $hexBackgroundColor;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $localizedAccountIdLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedAccountIdLabelDataType = '';
  protected $localizedAccountNameLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedAccountNameLabelDataType = '';
  protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedIssuerNameDataType = '';
  protected $localizedProgramNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedProgramNameDataType = '';
  protected $localizedRewardsTierType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedRewardsTierDataType = '';
  protected $localizedRewardsTierLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedRewardsTierLabelDataType = '';
  protected $localizedSecondaryRewardsTierType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedSecondaryRewardsTierDataType = '';
  protected $localizedSecondaryRewardsTierLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedSecondaryRewardsTierLabelDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_Message';
  protected $messagesDataType = 'array';
  public $multipleDevicesAndHoldersAllowedStatus;
  protected $programLogoType = 'Google_Service_Walletobjects_Image';
  protected $programLogoDataType = '';
  public $programName;
  public $redemptionIssuers;
  protected $reviewType = 'Google_Service_Walletobjects_Review';
  protected $reviewDataType = '';
  public $reviewStatus;
  public $rewardsTier;
  public $rewardsTierLabel;
  public $secondaryRewardsTier;
  public $secondaryRewardsTierLabel;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $version;
  protected $wordMarkType = 'Google_Service_Walletobjects_Image';
  protected $wordMarkDataType = '';


  public function setAccountIdLabel($accountIdLabel)
  {
    $this->accountIdLabel = $accountIdLabel;
  }
  public function getAccountIdLabel()
  {
    return $this->accountIdLabel;
  }
  public function setAccountNameLabel($accountNameLabel)
  {
    $this->accountNameLabel = $accountNameLabel;
  }
  public function getAccountNameLabel()
  {
    return $this->accountNameLabel;
  }
  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  public function setCallbackOptions(Google_Service_Walletobjects_CallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  public function setClassTemplateInfo(Google_Service_Walletobjects_ClassTemplateInfo $classTemplateInfo)
  {
    $this->classTemplateInfo = $classTemplateInfo;
  }
  public function getClassTemplateInfo()
  {
    return $this->classTemplateInfo;
  }
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setDiscoverableProgram(Google_Service_Walletobjects_DiscoverableProgram $discoverableProgram)
  {
    $this->discoverableProgram = $discoverableProgram;
  }
  public function getDiscoverableProgram()
  {
    return $this->discoverableProgram;
  }
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocalizedAccountIdLabel(Google_Service_Walletobjects_LocalizedString $localizedAccountIdLabel)
  {
    $this->localizedAccountIdLabel = $localizedAccountIdLabel;
  }
  public function getLocalizedAccountIdLabel()
  {
    return $this->localizedAccountIdLabel;
  }
  public function setLocalizedAccountNameLabel(Google_Service_Walletobjects_LocalizedString $localizedAccountNameLabel)
  {
    $this->localizedAccountNameLabel = $localizedAccountNameLabel;
  }
  public function getLocalizedAccountNameLabel()
  {
    return $this->localizedAccountNameLabel;
  }
  public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  public function setLocalizedProgramName(Google_Service_Walletobjects_LocalizedString $localizedProgramName)
  {
    $this->localizedProgramName = $localizedProgramName;
  }
  public function getLocalizedProgramName()
  {
    return $this->localizedProgramName;
  }
  public function setLocalizedRewardsTier(Google_Service_Walletobjects_LocalizedString $localizedRewardsTier)
  {
    $this->localizedRewardsTier = $localizedRewardsTier;
  }
  public function getLocalizedRewardsTier()
  {
    return $this->localizedRewardsTier;
  }
  public function setLocalizedRewardsTierLabel(Google_Service_Walletobjects_LocalizedString $localizedRewardsTierLabel)
  {
    $this->localizedRewardsTierLabel = $localizedRewardsTierLabel;
  }
  public function getLocalizedRewardsTierLabel()
  {
    return $this->localizedRewardsTierLabel;
  }
  public function setLocalizedSecondaryRewardsTier(Google_Service_Walletobjects_LocalizedString $localizedSecondaryRewardsTier)
  {
    $this->localizedSecondaryRewardsTier = $localizedSecondaryRewardsTier;
  }
  public function getLocalizedSecondaryRewardsTier()
  {
    return $this->localizedSecondaryRewardsTier;
  }
  public function setLocalizedSecondaryRewardsTierLabel(Google_Service_Walletobjects_LocalizedString $localizedSecondaryRewardsTierLabel)
  {
    $this->localizedSecondaryRewardsTierLabel = $localizedSecondaryRewardsTierLabel;
  }
  public function getLocalizedSecondaryRewardsTierLabel()
  {
    return $this->localizedSecondaryRewardsTierLabel;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  public function setProgramLogo(Google_Service_Walletobjects_Image $programLogo)
  {
    $this->programLogo = $programLogo;
  }
  public function getProgramLogo()
  {
    return $this->programLogo;
  }
  public function setProgramName($programName)
  {
    $this->programName = $programName;
  }
  public function getProgramName()
  {
    return $this->programName;
  }
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  public function setReview(Google_Service_Walletobjects_Review $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  public function setRewardsTier($rewardsTier)
  {
    $this->rewardsTier = $rewardsTier;
  }
  public function getRewardsTier()
  {
    return $this->rewardsTier;
  }
  public function setRewardsTierLabel($rewardsTierLabel)
  {
    $this->rewardsTierLabel = $rewardsTierLabel;
  }
  public function getRewardsTierLabel()
  {
    return $this->rewardsTierLabel;
  }
  public function setSecondaryRewardsTier($secondaryRewardsTier)
  {
    $this->secondaryRewardsTier = $secondaryRewardsTier;
  }
  public function getSecondaryRewardsTier()
  {
    return $this->secondaryRewardsTier;
  }
  public function setSecondaryRewardsTierLabel($secondaryRewardsTierLabel)
  {
    $this->secondaryRewardsTierLabel = $secondaryRewardsTierLabel;
  }
  public function getSecondaryRewardsTierLabel()
  {
    return $this->secondaryRewardsTierLabel;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

class Google_Service_Walletobjects_LoyaltyClassAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_LoyaltyClass';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_LoyaltyClass $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_LoyaltyClassListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_LoyaltyClass';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_LoyaltyObject extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $accountId;
  public $accountName;
  protected $appLinkDataType = 'Google_Service_Walletobjects_AppLinkData';
  protected $appLinkDataDataType = '';
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_LoyaltyClass';
  protected $classReferenceDataType = '';
  public $disableExpirationNotification;
  public $hasLinkedDevice;
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $kind;
  public $linkedOfferIds;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $loyaltyPointsType = 'Google_Service_Walletobjects_LoyaltyPoints';
  protected $loyaltyPointsDataType = '';
  protected $messagesType = 'Google_Service_Walletobjects_Message';
  protected $messagesDataType = 'array';
  protected $secondaryLoyaltyPointsType = 'Google_Service_Walletobjects_LoyaltyPoints';
  protected $secondaryLoyaltyPointsDataType = '';
  public $smartTapRedemptionValue;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;


  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  public function getAccountId()
  {
    return $this->accountId;
  }
  public function setAccountName($accountName)
  {
    $this->accountName = $accountName;
  }
  public function getAccountName()
  {
    return $this->accountName;
  }
  public function setAppLinkData(Google_Service_Walletobjects_AppLinkData $appLinkData)
  {
    $this->appLinkData = $appLinkData;
  }
  public function getAppLinkData()
  {
    return $this->appLinkData;
  }
  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  public function getBarcode()
  {
    return $this->barcode;
  }
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
  public function setClassReference(Google_Service_Walletobjects_LoyaltyClass $classReference)
  {
    $this->classReference = $classReference;
  }
  public function getClassReference()
  {
    return $this->classReference;
  }
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinkedOfferIds($linkedOfferIds)
  {
    $this->linkedOfferIds = $linkedOfferIds;
  }
  public function getLinkedOfferIds()
  {
    return $this->linkedOfferIds;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setLoyaltyPoints(Google_Service_Walletobjects_LoyaltyPoints $loyaltyPoints)
  {
    $this->loyaltyPoints = $loyaltyPoints;
  }
  public function getLoyaltyPoints()
  {
    return $this->loyaltyPoints;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setSecondaryLoyaltyPoints(Google_Service_Walletobjects_LoyaltyPoints $secondaryLoyaltyPoints)
  {
    $this->secondaryLoyaltyPoints = $secondaryLoyaltyPoints;
  }
  public function getSecondaryLoyaltyPoints()
  {
    return $this->secondaryLoyaltyPoints;
  }
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_LoyaltyObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_LoyaltyObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_LoyaltyObject';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_LoyaltyPoints extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $balanceType = 'Google_Service_Walletobjects_LoyaltyPointsBalance';
  protected $balanceDataType = '';
  public $label;
  protected $localizedLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedLabelDataType = '';


  public function setBalance(Google_Service_Walletobjects_LoyaltyPointsBalance $balance)
  {
    $this->balance = $balance;
  }
  public function getBalance()
  {
    return $this->balance;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setLocalizedLabel(Google_Service_Walletobjects_LocalizedString $localizedLabel)
  {
    $this->localizedLabel = $localizedLabel;
  }
  public function getLocalizedLabel()
  {
    return $this->localizedLabel;
  }
}

class Google_Service_Walletobjects_LoyaltyPointsBalance extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $double;
  public $int;
  protected $moneyType = 'Google_Service_Walletobjects_Money';
  protected $moneyDataType = '';
  public $string;


  public function setDouble($double)
  {
    $this->double = $double;
  }
  public function getDouble()
  {
    return $this->double;
  }
  public function setInt($int)
  {
    $this->int = $int;
  }
  public function getInt()
  {
    return $this->int;
  }
  public function setMoney(Google_Service_Walletobjects_Money $money)
  {
    $this->money = $money;
  }
  public function getMoney()
  {
    return $this->money;
  }
  public function setString($string)
  {
    $this->string = $string;
  }
  public function getString()
  {
    return $this->string;
  }
}

class Google_Service_Walletobjects_Message extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $body;
  protected $displayIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $displayIntervalDataType = '';
  public $header;
  public $id;
  public $kind;
  protected $localizedBodyType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedBodyDataType = '';
  protected $localizedHeaderType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedHeaderDataType = '';
  public $messageType;


  public function setBody($body)
  {
    $this->body = $body;
  }
  public function getBody()
  {
    return $this->body;
  }
  public function setDisplayInterval(Google_Service_Walletobjects_TimeInterval $displayInterval)
  {
    $this->displayInterval = $displayInterval;
  }
  public function getDisplayInterval()
  {
    return $this->displayInterval;
  }
  public function setHeader($header)
  {
    $this->header = $header;
  }
  public function getHeader()
  {
    return $this->header;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLocalizedBody(Google_Service_Walletobjects_LocalizedString $localizedBody)
  {
    $this->localizedBody = $localizedBody;
  }
  public function getLocalizedBody()
  {
    return $this->localizedBody;
  }
  public function setLocalizedHeader(Google_Service_Walletobjects_LocalizedString $localizedHeader)
  {
    $this->localizedHeader = $localizedHeader;
  }
  public function getLocalizedHeader()
  {
    return $this->localizedHeader;
  }
  public function setMessageType($messageType)
  {
    $this->messageType = $messageType;
  }
  public function getMessageType()
  {
    return $this->messageType;
  }
}

class Google_Service_Walletobjects_ModifyLinkedOfferObjects extends Google_Collection
{
  protected $collection_key = 'removeLinkedOfferObjectIds';
  protected $internal_gapi_mappings = array(
  );
  public $addLinkedOfferObjectIds;
  public $removeLinkedOfferObjectIds;


  public function setAddLinkedOfferObjectIds($addLinkedOfferObjectIds)
  {
    $this->addLinkedOfferObjectIds = $addLinkedOfferObjectIds;
  }
  public function getAddLinkedOfferObjectIds()
  {
    return $this->addLinkedOfferObjectIds;
  }
  public function setRemoveLinkedOfferObjectIds($removeLinkedOfferObjectIds)
  {
    $this->removeLinkedOfferObjectIds = $removeLinkedOfferObjectIds;
  }
  public function getRemoveLinkedOfferObjectIds()
  {
    return $this->removeLinkedOfferObjectIds;
  }
}

class Google_Service_Walletobjects_ModifyLinkedOfferObjectsRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $linkedOfferObjectIdsType = 'Google_Service_Walletobjects_ModifyLinkedOfferObjects';
  protected $linkedOfferObjectIdsDataType = '';


  public function setLinkedOfferObjectIds(Google_Service_Walletobjects_ModifyLinkedOfferObjects $linkedOfferObjectIds)
  {
    $this->linkedOfferObjectIds = $linkedOfferObjectIds;
  }
  public function getLinkedOfferObjectIds()
  {
    return $this->linkedOfferObjectIds;
  }
}

class Google_Service_Walletobjects_Money extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $currencyCode;
  public $kind;
  public $micros;


  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMicros($micros)
  {
    $this->micros = $micros;
  }
  public function getMicros()
  {
    return $this->micros;
  }
}

class Google_Service_Walletobjects_OfferClass extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $allowMultipleUsersPerObject;
  protected $callbackOptionsType = 'Google_Service_Walletobjects_CallbackOptions';
  protected $callbackOptionsDataType = '';
  protected $classTemplateInfoType = 'Google_Service_Walletobjects_ClassTemplateInfo';
  protected $classTemplateInfoDataType = '';
  public $countryCode;
  public $details;
  public $enableSmartTap;
  public $finePrint;
  protected $helpUriType = 'Google_Service_Walletobjects_Uri';
  protected $helpUriDataType = '';
  protected $heroImageType = 'Google_Service_Walletobjects_Image';
  protected $heroImageDataType = '';
  public $hexBackgroundColor;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $localizedDetailsType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedDetailsDataType = '';
  protected $localizedFinePrintType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedFinePrintDataType = '';
  protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedIssuerNameDataType = '';
  protected $localizedProviderType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedProviderDataType = '';
  protected $localizedShortTitleType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedShortTitleDataType = '';
  protected $localizedTitleType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedTitleDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_Message';
  protected $messagesDataType = 'array';
  public $multipleDevicesAndHoldersAllowedStatus;
  public $provider;
  public $redemptionChannel;
  public $redemptionIssuers;
  protected $reviewType = 'Google_Service_Walletobjects_Review';
  protected $reviewDataType = '';
  public $reviewStatus;
  public $shortTitle;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $title;
  protected $titleImageType = 'Google_Service_Walletobjects_Image';
  protected $titleImageDataType = '';
  public $version;
  protected $wordMarkType = 'Google_Service_Walletobjects_Image';
  protected $wordMarkDataType = '';


  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  public function setCallbackOptions(Google_Service_Walletobjects_CallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  public function setClassTemplateInfo(Google_Service_Walletobjects_ClassTemplateInfo $classTemplateInfo)
  {
    $this->classTemplateInfo = $classTemplateInfo;
  }
  public function getClassTemplateInfo()
  {
    return $this->classTemplateInfo;
  }
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setDetails($details)
  {
    $this->details = $details;
  }
  public function getDetails()
  {
    return $this->details;
  }
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  public function setFinePrint($finePrint)
  {
    $this->finePrint = $finePrint;
  }
  public function getFinePrint()
  {
    return $this->finePrint;
  }
  public function setHelpUri(Google_Service_Walletobjects_Uri $helpUri)
  {
    $this->helpUri = $helpUri;
  }
  public function getHelpUri()
  {
    return $this->helpUri;
  }
  public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocalizedDetails(Google_Service_Walletobjects_LocalizedString $localizedDetails)
  {
    $this->localizedDetails = $localizedDetails;
  }
  public function getLocalizedDetails()
  {
    return $this->localizedDetails;
  }
  public function setLocalizedFinePrint(Google_Service_Walletobjects_LocalizedString $localizedFinePrint)
  {
    $this->localizedFinePrint = $localizedFinePrint;
  }
  public function getLocalizedFinePrint()
  {
    return $this->localizedFinePrint;
  }
  public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  public function setLocalizedProvider(Google_Service_Walletobjects_LocalizedString $localizedProvider)
  {
    $this->localizedProvider = $localizedProvider;
  }
  public function getLocalizedProvider()
  {
    return $this->localizedProvider;
  }
  public function setLocalizedShortTitle(Google_Service_Walletobjects_LocalizedString $localizedShortTitle)
  {
    $this->localizedShortTitle = $localizedShortTitle;
  }
  public function getLocalizedShortTitle()
  {
    return $this->localizedShortTitle;
  }
  public function setLocalizedTitle(Google_Service_Walletobjects_LocalizedString $localizedTitle)
  {
    $this->localizedTitle = $localizedTitle;
  }
  public function getLocalizedTitle()
  {
    return $this->localizedTitle;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  public function getProvider()
  {
    return $this->provider;
  }
  public function setRedemptionChannel($redemptionChannel)
  {
    $this->redemptionChannel = $redemptionChannel;
  }
  public function getRedemptionChannel()
  {
    return $this->redemptionChannel;
  }
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  public function setReview(Google_Service_Walletobjects_Review $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  public function setShortTitle($shortTitle)
  {
    $this->shortTitle = $shortTitle;
  }
  public function getShortTitle()
  {
    return $this->shortTitle;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setTitleImage(Google_Service_Walletobjects_Image $titleImage)
  {
    $this->titleImage = $titleImage;
  }
  public function getTitleImage()
  {
    return $this->titleImage;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

class Google_Service_Walletobjects_OfferClassAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_OfferClass';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_OfferClass $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_OfferClassListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_OfferClass';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_OfferObject extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  protected $appLinkDataType = 'Google_Service_Walletobjects_AppLinkData';
  protected $appLinkDataDataType = '';
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_OfferClass';
  protected $classReferenceDataType = '';
  public $disableExpirationNotification;
  public $hasLinkedDevice;
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_Message';
  protected $messagesDataType = 'array';
  public $smartTapRedemptionValue;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;


  public function setAppLinkData(Google_Service_Walletobjects_AppLinkData $appLinkData)
  {
    $this->appLinkData = $appLinkData;
  }
  public function getAppLinkData()
  {
    return $this->appLinkData;
  }
  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  public function getBarcode()
  {
    return $this->barcode;
  }
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
  public function setClassReference(Google_Service_Walletobjects_OfferClass $classReference)
  {
    $this->classReference = $classReference;
  }
  public function getClassReference()
  {
    return $this->classReference;
  }
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_OfferObjectAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_OfferObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_OfferObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_OfferObjectListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_OfferObject';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_Pagination extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $nextPageToken;
  public $resultsPerPage;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setResultsPerPage($resultsPerPage)
  {
    $this->resultsPerPage = $resultsPerPage;
  }
  public function getResultsPerPage()
  {
    return $this->resultsPerPage;
  }
}

class Google_Service_Walletobjects_Permission extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $emailAddress;
  public $role;


  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  public function setRole($role)
  {
    $this->role = $role;
  }
  public function getRole()
  {
    return $this->role;
  }
}

class Google_Service_Walletobjects_Permissions extends Google_Collection
{
  protected $collection_key = 'permissions';
  protected $internal_gapi_mappings = array(
  );
  public $issuerId;
  protected $permissionsType = 'Google_Service_Walletobjects_Permission';
  protected $permissionsDataType = 'array';


  public function setIssuerId($issuerId)
  {
    $this->issuerId = $issuerId;
  }
  public function getIssuerId()
  {
    return $this->issuerId;
  }
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class Google_Service_Walletobjects_PurchaseDetails extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $accountId;
  public $confirmationCode;
  public $purchaseDateTime;
  public $purchaseReceiptNumber;
  protected $ticketCostType = 'Google_Service_Walletobjects_TicketCost';
  protected $ticketCostDataType = '';


  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  public function getAccountId()
  {
    return $this->accountId;
  }
  public function setConfirmationCode($confirmationCode)
  {
    $this->confirmationCode = $confirmationCode;
  }
  public function getConfirmationCode()
  {
    return $this->confirmationCode;
  }
  public function setPurchaseDateTime($purchaseDateTime)
  {
    $this->purchaseDateTime = $purchaseDateTime;
  }
  public function getPurchaseDateTime()
  {
    return $this->purchaseDateTime;
  }
  public function setPurchaseReceiptNumber($purchaseReceiptNumber)
  {
    $this->purchaseReceiptNumber = $purchaseReceiptNumber;
  }
  public function getPurchaseReceiptNumber()
  {
    return $this->purchaseReceiptNumber;
  }
  public function setTicketCost(Google_Service_Walletobjects_TicketCost $ticketCost)
  {
    $this->ticketCost = $ticketCost;
  }
  public function getTicketCost()
  {
    return $this->ticketCost;
  }
}

class Google_Service_Walletobjects_ReservationInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $confirmationCode;
  public $eticketNumber;
  protected $frequentFlyerInfoType = 'Google_Service_Walletobjects_FrequentFlyerInfo';
  protected $frequentFlyerInfoDataType = '';
  public $kind;


  public function setConfirmationCode($confirmationCode)
  {
    $this->confirmationCode = $confirmationCode;
  }
  public function getConfirmationCode()
  {
    return $this->confirmationCode;
  }
  public function setEticketNumber($eticketNumber)
  {
    $this->eticketNumber = $eticketNumber;
  }
  public function getEticketNumber()
  {
    return $this->eticketNumber;
  }
  public function setFrequentFlyerInfo(Google_Service_Walletobjects_FrequentFlyerInfo $frequentFlyerInfo)
  {
    $this->frequentFlyerInfo = $frequentFlyerInfo;
  }
  public function getFrequentFlyerInfo()
  {
    return $this->frequentFlyerInfo;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_Walletobjects_Resources extends Google_Collection
{
  protected $collection_key = 'transitObjects';
  protected $internal_gapi_mappings = array(
  );
  protected $eventTicketClassesType = 'Google_Service_Walletobjects_EventTicketClass';
  protected $eventTicketClassesDataType = 'array';
  protected $eventTicketObjectsType = 'Google_Service_Walletobjects_EventTicketObject';
  protected $eventTicketObjectsDataType = 'array';
  protected $flightClassesType = 'Google_Service_Walletobjects_FlightClass';
  protected $flightClassesDataType = 'array';
  protected $flightObjectsType = 'Google_Service_Walletobjects_FlightObject';
  protected $flightObjectsDataType = 'array';
  protected $giftCardClassesType = 'Google_Service_Walletobjects_GiftCardClass';
  protected $giftCardClassesDataType = 'array';
  protected $giftCardObjectsType = 'Google_Service_Walletobjects_GiftCardObject';
  protected $giftCardObjectsDataType = 'array';
  protected $loyaltyClassesType = 'Google_Service_Walletobjects_LoyaltyClass';
  protected $loyaltyClassesDataType = 'array';
  protected $loyaltyObjectsType = 'Google_Service_Walletobjects_LoyaltyObject';
  protected $loyaltyObjectsDataType = 'array';
  protected $offerClassesType = 'Google_Service_Walletobjects_OfferClass';
  protected $offerClassesDataType = 'array';
  protected $offerObjectsType = 'Google_Service_Walletobjects_OfferObject';
  protected $offerObjectsDataType = 'array';
  protected $transitClassesType = 'Google_Service_Walletobjects_TransitClass';
  protected $transitClassesDataType = 'array';
  protected $transitObjectsType = 'Google_Service_Walletobjects_TransitObject';
  protected $transitObjectsDataType = 'array';


  public function setEventTicketClasses($eventTicketClasses)
  {
    $this->eventTicketClasses = $eventTicketClasses;
  }
  public function getEventTicketClasses()
  {
    return $this->eventTicketClasses;
  }
  public function setEventTicketObjects($eventTicketObjects)
  {
    $this->eventTicketObjects = $eventTicketObjects;
  }
  public function getEventTicketObjects()
  {
    return $this->eventTicketObjects;
  }
  public function setFlightClasses($flightClasses)
  {
    $this->flightClasses = $flightClasses;
  }
  public function getFlightClasses()
  {
    return $this->flightClasses;
  }
  public function setFlightObjects($flightObjects)
  {
    $this->flightObjects = $flightObjects;
  }
  public function getFlightObjects()
  {
    return $this->flightObjects;
  }
  public function setGiftCardClasses($giftCardClasses)
  {
    $this->giftCardClasses = $giftCardClasses;
  }
  public function getGiftCardClasses()
  {
    return $this->giftCardClasses;
  }
  public function setGiftCardObjects($giftCardObjects)
  {
    $this->giftCardObjects = $giftCardObjects;
  }
  public function getGiftCardObjects()
  {
    return $this->giftCardObjects;
  }
  public function setLoyaltyClasses($loyaltyClasses)
  {
    $this->loyaltyClasses = $loyaltyClasses;
  }
  public function getLoyaltyClasses()
  {
    return $this->loyaltyClasses;
  }
  public function setLoyaltyObjects($loyaltyObjects)
  {
    $this->loyaltyObjects = $loyaltyObjects;
  }
  public function getLoyaltyObjects()
  {
    return $this->loyaltyObjects;
  }
  public function setOfferClasses($offerClasses)
  {
    $this->offerClasses = $offerClasses;
  }
  public function getOfferClasses()
  {
    return $this->offerClasses;
  }
  public function setOfferObjects($offerObjects)
  {
    $this->offerObjects = $offerObjects;
  }
  public function getOfferObjects()
  {
    return $this->offerObjects;
  }
  public function setTransitClasses($transitClasses)
  {
    $this->transitClasses = $transitClasses;
  }
  public function getTransitClasses()
  {
    return $this->transitClasses;
  }
  public function setTransitObjects($transitObjects)
  {
    $this->transitObjects = $transitObjects;
  }
  public function getTransitObjects()
  {
    return $this->transitObjects;
  }
}

class Google_Service_Walletobjects_Review extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $comments;


  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  public function getComments()
  {
    return $this->comments;
  }
}

class Google_Service_Walletobjects_SignUpInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $classId;


  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
}

class Google_Service_Walletobjects_SmartTap extends Google_Collection
{
  protected $collection_key = 'infos';
  protected $internal_gapi_mappings = array(
  );
  public $id;
  protected $infosType = 'Google_Service_Walletobjects_IssuerToUserInfo';
  protected $infosDataType = 'array';
  public $kind;
  public $merchantId;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setInfos($infos)
  {
    $this->infos = $infos;
  }
  public function getInfos()
  {
    return $this->infos;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  public function getMerchantId()
  {
    return $this->merchantId;
  }
}

class Google_Service_Walletobjects_SmartTapMerchantData extends Google_Collection
{
  protected $collection_key = 'authenticationKeys';
  protected $internal_gapi_mappings = array(
  );
  protected $authenticationKeysType = 'Google_Service_Walletobjects_AuthenticationKey';
  protected $authenticationKeysDataType = 'array';
  public $smartTapMerchantId;


  public function setAuthenticationKeys($authenticationKeys)
  {
    $this->authenticationKeys = $authenticationKeys;
  }
  public function getAuthenticationKeys()
  {
    return $this->authenticationKeys;
  }
  public function setSmartTapMerchantId($smartTapMerchantId)
  {
    $this->smartTapMerchantId = $smartTapMerchantId;
  }
  public function getSmartTapMerchantId()
  {
    return $this->smartTapMerchantId;
  }
}

class Google_Service_Walletobjects_TemplateItem extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $firstValueType = 'Google_Service_Walletobjects_FieldSelector';
  protected $firstValueDataType = '';
  public $predefinedItem;
  protected $secondValueType = 'Google_Service_Walletobjects_FieldSelector';
  protected $secondValueDataType = '';


  public function setFirstValue(Google_Service_Walletobjects_FieldSelector $firstValue)
  {
    $this->firstValue = $firstValue;
  }
  public function getFirstValue()
  {
    return $this->firstValue;
  }
  public function setPredefinedItem($predefinedItem)
  {
    $this->predefinedItem = $predefinedItem;
  }
  public function getPredefinedItem()
  {
    return $this->predefinedItem;
  }
  public function setSecondValue(Google_Service_Walletobjects_FieldSelector $secondValue)
  {
    $this->secondValue = $secondValue;
  }
  public function getSecondValue()
  {
    return $this->secondValue;
  }
}

class Google_Service_Walletobjects_TextModuleData extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $body;
  public $header;
  public $id;
  protected $localizedBodyType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedBodyDataType = '';
  protected $localizedHeaderType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedHeaderDataType = '';


  public function setBody($body)
  {
    $this->body = $body;
  }
  public function getBody()
  {
    return $this->body;
  }
  public function setHeader($header)
  {
    $this->header = $header;
  }
  public function getHeader()
  {
    return $this->header;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLocalizedBody(Google_Service_Walletobjects_LocalizedString $localizedBody)
  {
    $this->localizedBody = $localizedBody;
  }
  public function getLocalizedBody()
  {
    return $this->localizedBody;
  }
  public function setLocalizedHeader(Google_Service_Walletobjects_LocalizedString $localizedHeader)
  {
    $this->localizedHeader = $localizedHeader;
  }
  public function getLocalizedHeader()
  {
    return $this->localizedHeader;
  }
}

class Google_Service_Walletobjects_TicketCost extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $discountMessageType = 'Google_Service_Walletobjects_LocalizedString';
  protected $discountMessageDataType = '';
  protected $faceValueType = 'Google_Service_Walletobjects_Money';
  protected $faceValueDataType = '';
  protected $purchasePriceType = 'Google_Service_Walletobjects_Money';
  protected $purchasePriceDataType = '';


  public function setDiscountMessage(Google_Service_Walletobjects_LocalizedString $discountMessage)
  {
    $this->discountMessage = $discountMessage;
  }
  public function getDiscountMessage()
  {
    return $this->discountMessage;
  }
  public function setFaceValue(Google_Service_Walletobjects_Money $faceValue)
  {
    $this->faceValue = $faceValue;
  }
  public function getFaceValue()
  {
    return $this->faceValue;
  }
  public function setPurchasePrice(Google_Service_Walletobjects_Money $purchasePrice)
  {
    $this->purchasePrice = $purchasePrice;
  }
  public function getPurchasePrice()
  {
    return $this->purchasePrice;
  }
}

class Google_Service_Walletobjects_TicketLeg extends Google_Collection
{
  protected $collection_key = 'ticketSeats';
  protected $internal_gapi_mappings = array(
  );
  public $arrivalDateTime;
  public $carriage;
  public $departureDateTime;
  protected $destinationNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $destinationNameDataType = '';
  public $destinationStationCode;
  protected $fareNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $fareNameDataType = '';
  protected $originNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $originNameDataType = '';
  public $originStationCode;
  public $platform;
  protected $ticketSeatType = 'Google_Service_Walletobjects_TicketSeat';
  protected $ticketSeatDataType = '';
  protected $ticketSeatsType = 'Google_Service_Walletobjects_TicketSeat';
  protected $ticketSeatsDataType = 'array';
  protected $transitOperatorNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $transitOperatorNameDataType = '';
  protected $transitTerminusNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $transitTerminusNameDataType = '';
  public $zone;


  public function setArrivalDateTime($arrivalDateTime)
  {
    $this->arrivalDateTime = $arrivalDateTime;
  }
  public function getArrivalDateTime()
  {
    return $this->arrivalDateTime;
  }
  public function setCarriage($carriage)
  {
    $this->carriage = $carriage;
  }
  public function getCarriage()
  {
    return $this->carriage;
  }
  public function setDepartureDateTime($departureDateTime)
  {
    $this->departureDateTime = $departureDateTime;
  }
  public function getDepartureDateTime()
  {
    return $this->departureDateTime;
  }
  public function setDestinationName(Google_Service_Walletobjects_LocalizedString $destinationName)
  {
    $this->destinationName = $destinationName;
  }
  public function getDestinationName()
  {
    return $this->destinationName;
  }
  public function setDestinationStationCode($destinationStationCode)
  {
    $this->destinationStationCode = $destinationStationCode;
  }
  public function getDestinationStationCode()
  {
    return $this->destinationStationCode;
  }
  public function setFareName(Google_Service_Walletobjects_LocalizedString $fareName)
  {
    $this->fareName = $fareName;
  }
  public function getFareName()
  {
    return $this->fareName;
  }
  public function setOriginName(Google_Service_Walletobjects_LocalizedString $originName)
  {
    $this->originName = $originName;
  }
  public function getOriginName()
  {
    return $this->originName;
  }
  public function setOriginStationCode($originStationCode)
  {
    $this->originStationCode = $originStationCode;
  }
  public function getOriginStationCode()
  {
    return $this->originStationCode;
  }
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  public function getPlatform()
  {
    return $this->platform;
  }
  public function setTicketSeat(Google_Service_Walletobjects_TicketSeat $ticketSeat)
  {
    $this->ticketSeat = $ticketSeat;
  }
  public function getTicketSeat()
  {
    return $this->ticketSeat;
  }
  public function setTicketSeats($ticketSeats)
  {
    $this->ticketSeats = $ticketSeats;
  }
  public function getTicketSeats()
  {
    return $this->ticketSeats;
  }
  public function setTransitOperatorName(Google_Service_Walletobjects_LocalizedString $transitOperatorName)
  {
    $this->transitOperatorName = $transitOperatorName;
  }
  public function getTransitOperatorName()
  {
    return $this->transitOperatorName;
  }
  public function setTransitTerminusName(Google_Service_Walletobjects_LocalizedString $transitTerminusName)
  {
    $this->transitTerminusName = $transitTerminusName;
  }
  public function getTransitTerminusName()
  {
    return $this->transitTerminusName;
  }
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  public function getZone()
  {
    return $this->zone;
  }
}

class Google_Service_Walletobjects_TicketRestrictions extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $otherRestrictionsType = 'Google_Service_Walletobjects_LocalizedString';
  protected $otherRestrictionsDataType = '';
  protected $routeRestrictionsType = 'Google_Service_Walletobjects_LocalizedString';
  protected $routeRestrictionsDataType = '';
  protected $routeRestrictionsDetailsType = 'Google_Service_Walletobjects_LocalizedString';
  protected $routeRestrictionsDetailsDataType = '';
  protected $timeRestrictionsType = 'Google_Service_Walletobjects_LocalizedString';
  protected $timeRestrictionsDataType = '';


  public function setOtherRestrictions(Google_Service_Walletobjects_LocalizedString $otherRestrictions)
  {
    $this->otherRestrictions = $otherRestrictions;
  }
  public function getOtherRestrictions()
  {
    return $this->otherRestrictions;
  }
  public function setRouteRestrictions(Google_Service_Walletobjects_LocalizedString $routeRestrictions)
  {
    $this->routeRestrictions = $routeRestrictions;
  }
  public function getRouteRestrictions()
  {
    return $this->routeRestrictions;
  }
  public function setRouteRestrictionsDetails(Google_Service_Walletobjects_LocalizedString $routeRestrictionsDetails)
  {
    $this->routeRestrictionsDetails = $routeRestrictionsDetails;
  }
  public function getRouteRestrictionsDetails()
  {
    return $this->routeRestrictionsDetails;
  }
  public function setTimeRestrictions(Google_Service_Walletobjects_LocalizedString $timeRestrictions)
  {
    $this->timeRestrictions = $timeRestrictions;
  }
  public function getTimeRestrictions()
  {
    return $this->timeRestrictions;
  }
}

class Google_Service_Walletobjects_TicketSeat extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $coach;
  protected $customFareClassType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customFareClassDataType = '';
  public $fareClass;
  public $seat;
  protected $seatAssignmentType = 'Google_Service_Walletobjects_LocalizedString';
  protected $seatAssignmentDataType = '';


  public function setCoach($coach)
  {
    $this->coach = $coach;
  }
  public function getCoach()
  {
    return $this->coach;
  }
  public function setCustomFareClass(Google_Service_Walletobjects_LocalizedString $customFareClass)
  {
    $this->customFareClass = $customFareClass;
  }
  public function getCustomFareClass()
  {
    return $this->customFareClass;
  }
  public function setFareClass($fareClass)
  {
    $this->fareClass = $fareClass;
  }
  public function getFareClass()
  {
    return $this->fareClass;
  }
  public function setSeat($seat)
  {
    $this->seat = $seat;
  }
  public function getSeat()
  {
    return $this->seat;
  }
  public function setSeatAssignment(Google_Service_Walletobjects_LocalizedString $seatAssignment)
  {
    $this->seatAssignment = $seatAssignment;
  }
  public function getSeatAssignment()
  {
    return $this->seatAssignment;
  }
}

class Google_Service_Walletobjects_TimeInterval extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $endType = 'Google_Service_Walletobjects_DateTime';
  protected $endDataType = '';
  public $kind;
  protected $startType = 'Google_Service_Walletobjects_DateTime';
  protected $startDataType = '';


  public function setEnd(Google_Service_Walletobjects_DateTime $end)
  {
    $this->end = $end;
  }
  public function getEnd()
  {
    return $this->end;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setStart(Google_Service_Walletobjects_DateTime $start)
  {
    $this->start = $start;
  }
  public function getStart()
  {
    return $this->start;
  }
}

class Google_Service_Walletobjects_TransitClass extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $allowMultipleUsersPerObject;
  protected $callbackOptionsType = 'Google_Service_Walletobjects_CallbackOptions';
  protected $callbackOptionsDataType = '';
  protected $classTemplateInfoType = 'Google_Service_Walletobjects_ClassTemplateInfo';
  protected $classTemplateInfoDataType = '';
  public $countryCode;
  protected $customCarriageLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customCarriageLabelDataType = '';
  protected $customCoachLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customCoachLabelDataType = '';
  protected $customConcessionCategoryLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customConcessionCategoryLabelDataType = '';
  protected $customConfirmationCodeLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customConfirmationCodeLabelDataType = '';
  protected $customDiscountMessageLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customDiscountMessageLabelDataType = '';
  protected $customFareClassLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customFareClassLabelDataType = '';
  protected $customFareNameLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customFareNameLabelDataType = '';
  protected $customOtherRestrictionsLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customOtherRestrictionsLabelDataType = '';
  protected $customPlatformLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customPlatformLabelDataType = '';
  protected $customPurchaseFaceValueLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customPurchaseFaceValueLabelDataType = '';
  protected $customPurchasePriceLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customPurchasePriceLabelDataType = '';
  protected $customPurchaseReceiptNumberLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customPurchaseReceiptNumberLabelDataType = '';
  protected $customRouteRestrictionsDetailsLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customRouteRestrictionsDetailsLabelDataType = '';
  protected $customRouteRestrictionsLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customRouteRestrictionsLabelDataType = '';
  protected $customSeatLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customSeatLabelDataType = '';
  protected $customTicketNumberLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customTicketNumberLabelDataType = '';
  protected $customTimeRestrictionsLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customTimeRestrictionsLabelDataType = '';
  protected $customTransitTerminusNameLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customTransitTerminusNameLabelDataType = '';
  protected $customZoneLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customZoneLabelDataType = '';
  public $enableSingleLegItinerary;
  public $enableSmartTap;
  protected $heroImageType = 'Google_Service_Walletobjects_Image';
  protected $heroImageDataType = '';
  public $hexBackgroundColor;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $issuerName;
  public $languageOverride;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedIssuerNameDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $logoType = 'Google_Service_Walletobjects_Image';
  protected $logoDataType = '';
  protected $messagesType = 'Google_Service_Walletobjects_Message';
  protected $messagesDataType = 'array';
  public $multipleDevicesAndHoldersAllowedStatus;
  public $redemptionIssuers;
  protected $reviewType = 'Google_Service_Walletobjects_Review';
  protected $reviewDataType = '';
  public $reviewStatus;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $transitOperatorNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $transitOperatorNameDataType = '';
  public $transitType;
  public $version;
  protected $watermarkType = 'Google_Service_Walletobjects_Image';
  protected $watermarkDataType = '';
  protected $wordMarkType = 'Google_Service_Walletobjects_Image';
  protected $wordMarkDataType = '';


  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  public function setCallbackOptions(Google_Service_Walletobjects_CallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  public function setClassTemplateInfo(Google_Service_Walletobjects_ClassTemplateInfo $classTemplateInfo)
  {
    $this->classTemplateInfo = $classTemplateInfo;
  }
  public function getClassTemplateInfo()
  {
    return $this->classTemplateInfo;
  }
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setCustomCarriageLabel(Google_Service_Walletobjects_LocalizedString $customCarriageLabel)
  {
    $this->customCarriageLabel = $customCarriageLabel;
  }
  public function getCustomCarriageLabel()
  {
    return $this->customCarriageLabel;
  }
  public function setCustomCoachLabel(Google_Service_Walletobjects_LocalizedString $customCoachLabel)
  {
    $this->customCoachLabel = $customCoachLabel;
  }
  public function getCustomCoachLabel()
  {
    return $this->customCoachLabel;
  }
  public function setCustomConcessionCategoryLabel(Google_Service_Walletobjects_LocalizedString $customConcessionCategoryLabel)
  {
    $this->customConcessionCategoryLabel = $customConcessionCategoryLabel;
  }
  public function getCustomConcessionCategoryLabel()
  {
    return $this->customConcessionCategoryLabel;
  }
  public function setCustomConfirmationCodeLabel(Google_Service_Walletobjects_LocalizedString $customConfirmationCodeLabel)
  {
    $this->customConfirmationCodeLabel = $customConfirmationCodeLabel;
  }
  public function getCustomConfirmationCodeLabel()
  {
    return $this->customConfirmationCodeLabel;
  }
  public function setCustomDiscountMessageLabel(Google_Service_Walletobjects_LocalizedString $customDiscountMessageLabel)
  {
    $this->customDiscountMessageLabel = $customDiscountMessageLabel;
  }
  public function getCustomDiscountMessageLabel()
  {
    return $this->customDiscountMessageLabel;
  }
  public function setCustomFareClassLabel(Google_Service_Walletobjects_LocalizedString $customFareClassLabel)
  {
    $this->customFareClassLabel = $customFareClassLabel;
  }
  public function getCustomFareClassLabel()
  {
    return $this->customFareClassLabel;
  }
  public function setCustomFareNameLabel(Google_Service_Walletobjects_LocalizedString $customFareNameLabel)
  {
    $this->customFareNameLabel = $customFareNameLabel;
  }
  public function getCustomFareNameLabel()
  {
    return $this->customFareNameLabel;
  }
  public function setCustomOtherRestrictionsLabel(Google_Service_Walletobjects_LocalizedString $customOtherRestrictionsLabel)
  {
    $this->customOtherRestrictionsLabel = $customOtherRestrictionsLabel;
  }
  public function getCustomOtherRestrictionsLabel()
  {
    return $this->customOtherRestrictionsLabel;
  }
  public function setCustomPlatformLabel(Google_Service_Walletobjects_LocalizedString $customPlatformLabel)
  {
    $this->customPlatformLabel = $customPlatformLabel;
  }
  public function getCustomPlatformLabel()
  {
    return $this->customPlatformLabel;
  }
  public function setCustomPurchaseFaceValueLabel(Google_Service_Walletobjects_LocalizedString $customPurchaseFaceValueLabel)
  {
    $this->customPurchaseFaceValueLabel = $customPurchaseFaceValueLabel;
  }
  public function getCustomPurchaseFaceValueLabel()
  {
    return $this->customPurchaseFaceValueLabel;
  }
  public function setCustomPurchasePriceLabel(Google_Service_Walletobjects_LocalizedString $customPurchasePriceLabel)
  {
    $this->customPurchasePriceLabel = $customPurchasePriceLabel;
  }
  public function getCustomPurchasePriceLabel()
  {
    return $this->customPurchasePriceLabel;
  }
  public function setCustomPurchaseReceiptNumberLabel(Google_Service_Walletobjects_LocalizedString $customPurchaseReceiptNumberLabel)
  {
    $this->customPurchaseReceiptNumberLabel = $customPurchaseReceiptNumberLabel;
  }
  public function getCustomPurchaseReceiptNumberLabel()
  {
    return $this->customPurchaseReceiptNumberLabel;
  }
  public function setCustomRouteRestrictionsDetailsLabel(Google_Service_Walletobjects_LocalizedString $customRouteRestrictionsDetailsLabel)
  {
    $this->customRouteRestrictionsDetailsLabel = $customRouteRestrictionsDetailsLabel;
  }
  public function getCustomRouteRestrictionsDetailsLabel()
  {
    return $this->customRouteRestrictionsDetailsLabel;
  }
  public function setCustomRouteRestrictionsLabel(Google_Service_Walletobjects_LocalizedString $customRouteRestrictionsLabel)
  {
    $this->customRouteRestrictionsLabel = $customRouteRestrictionsLabel;
  }
  public function getCustomRouteRestrictionsLabel()
  {
    return $this->customRouteRestrictionsLabel;
  }
  public function setCustomSeatLabel(Google_Service_Walletobjects_LocalizedString $customSeatLabel)
  {
    $this->customSeatLabel = $customSeatLabel;
  }
  public function getCustomSeatLabel()
  {
    return $this->customSeatLabel;
  }
  public function setCustomTicketNumberLabel(Google_Service_Walletobjects_LocalizedString $customTicketNumberLabel)
  {
    $this->customTicketNumberLabel = $customTicketNumberLabel;
  }
  public function getCustomTicketNumberLabel()
  {
    return $this->customTicketNumberLabel;
  }
  public function setCustomTimeRestrictionsLabel(Google_Service_Walletobjects_LocalizedString $customTimeRestrictionsLabel)
  {
    $this->customTimeRestrictionsLabel = $customTimeRestrictionsLabel;
  }
  public function getCustomTimeRestrictionsLabel()
  {
    return $this->customTimeRestrictionsLabel;
  }
  public function setCustomTransitTerminusNameLabel(Google_Service_Walletobjects_LocalizedString $customTransitTerminusNameLabel)
  {
    $this->customTransitTerminusNameLabel = $customTransitTerminusNameLabel;
  }
  public function getCustomTransitTerminusNameLabel()
  {
    return $this->customTransitTerminusNameLabel;
  }
  public function setCustomZoneLabel(Google_Service_Walletobjects_LocalizedString $customZoneLabel)
  {
    $this->customZoneLabel = $customZoneLabel;
  }
  public function getCustomZoneLabel()
  {
    return $this->customZoneLabel;
  }
  public function setEnableSingleLegItinerary($enableSingleLegItinerary)
  {
    $this->enableSingleLegItinerary = $enableSingleLegItinerary;
  }
  public function getEnableSingleLegItinerary()
  {
    return $this->enableSingleLegItinerary;
  }
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  public function setLanguageOverride($languageOverride)
  {
    $this->languageOverride = $languageOverride;
  }
  public function getLanguageOverride()
  {
    return $this->languageOverride;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setLogo(Google_Service_Walletobjects_Image $logo)
  {
    $this->logo = $logo;
  }
  public function getLogo()
  {
    return $this->logo;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  public function setReview(Google_Service_Walletobjects_Review $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setTransitOperatorName(Google_Service_Walletobjects_LocalizedString $transitOperatorName)
  {
    $this->transitOperatorName = $transitOperatorName;
  }
  public function getTransitOperatorName()
  {
    return $this->transitOperatorName;
  }
  public function setTransitType($transitType)
  {
    $this->transitType = $transitType;
  }
  public function getTransitType()
  {
    return $this->transitType;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWatermark(Google_Service_Walletobjects_Image $watermark)
  {
    $this->watermark = $watermark;
  }
  public function getWatermark()
  {
    return $this->watermark;
  }
  public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

class Google_Service_Walletobjects_TransitClassAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_TransitClass';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_TransitClass $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_TransitClassListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_TransitClass';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_TransitObject extends Google_Collection
{
  protected $collection_key = 'ticketLegs';
  protected $internal_gapi_mappings = array(
  );
  protected $appLinkDataType = 'Google_Service_Walletobjects_AppLinkData';
  protected $appLinkDataDataType = '';
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_TransitClass';
  protected $classReferenceDataType = '';
  public $concessionCategory;
  protected $customConcessionCategoryType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customConcessionCategoryDataType = '';
  protected $customTicketStatusType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customTicketStatusDataType = '';
  public $disableExpirationNotification;
  public $hasLinkedDevice;
  public $hasUsers;
  public $hexBackgroundColor;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_Message';
  protected $messagesDataType = 'array';
  public $passengerNames;
  public $passengerType;
  protected $purchaseDetailsType = 'Google_Service_Walletobjects_PurchaseDetails';
  protected $purchaseDetailsDataType = '';
  public $smartTapRedemptionValue;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $ticketLegType = 'Google_Service_Walletobjects_TicketLeg';
  protected $ticketLegDataType = '';
  protected $ticketLegsType = 'Google_Service_Walletobjects_TicketLeg';
  protected $ticketLegsDataType = 'array';
  public $ticketNumber;
  protected $ticketRestrictionsType = 'Google_Service_Walletobjects_TicketRestrictions';
  protected $ticketRestrictionsDataType = '';
  public $ticketStatus;
  public $tripId;
  public $tripType;
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;


  public function setAppLinkData(Google_Service_Walletobjects_AppLinkData $appLinkData)
  {
    $this->appLinkData = $appLinkData;
  }
  public function getAppLinkData()
  {
    return $this->appLinkData;
  }
  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  public function getBarcode()
  {
    return $this->barcode;
  }
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
  public function setClassReference(Google_Service_Walletobjects_TransitClass $classReference)
  {
    $this->classReference = $classReference;
  }
  public function getClassReference()
  {
    return $this->classReference;
  }
  public function setConcessionCategory($concessionCategory)
  {
    $this->concessionCategory = $concessionCategory;
  }
  public function getConcessionCategory()
  {
    return $this->concessionCategory;
  }
  public function setCustomConcessionCategory(Google_Service_Walletobjects_LocalizedString $customConcessionCategory)
  {
    $this->customConcessionCategory = $customConcessionCategory;
  }
  public function getCustomConcessionCategory()
  {
    return $this->customConcessionCategory;
  }
  public function setCustomTicketStatus(Google_Service_Walletobjects_LocalizedString $customTicketStatus)
  {
    $this->customTicketStatus = $customTicketStatus;
  }
  public function getCustomTicketStatus()
  {
    return $this->customTicketStatus;
  }
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setPassengerNames($passengerNames)
  {
    $this->passengerNames = $passengerNames;
  }
  public function getPassengerNames()
  {
    return $this->passengerNames;
  }
  public function setPassengerType($passengerType)
  {
    $this->passengerType = $passengerType;
  }
  public function getPassengerType()
  {
    return $this->passengerType;
  }
  public function setPurchaseDetails(Google_Service_Walletobjects_PurchaseDetails $purchaseDetails)
  {
    $this->purchaseDetails = $purchaseDetails;
  }
  public function getPurchaseDetails()
  {
    return $this->purchaseDetails;
  }
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setTicketLeg(Google_Service_Walletobjects_TicketLeg $ticketLeg)
  {
    $this->ticketLeg = $ticketLeg;
  }
  public function getTicketLeg()
  {
    return $this->ticketLeg;
  }
  public function setTicketLegs($ticketLegs)
  {
    $this->ticketLegs = $ticketLegs;
  }
  public function getTicketLegs()
  {
    return $this->ticketLegs;
  }
  public function setTicketNumber($ticketNumber)
  {
    $this->ticketNumber = $ticketNumber;
  }
  public function getTicketNumber()
  {
    return $this->ticketNumber;
  }
  public function setTicketRestrictions(Google_Service_Walletobjects_TicketRestrictions $ticketRestrictions)
  {
    $this->ticketRestrictions = $ticketRestrictions;
  }
  public function getTicketRestrictions()
  {
    return $this->ticketRestrictions;
  }
  public function setTicketStatus($ticketStatus)
  {
    $this->ticketStatus = $ticketStatus;
  }
  public function getTicketStatus()
  {
    return $this->ticketStatus;
  }
  public function setTripId($tripId)
  {
    $this->tripId = $tripId;
  }
  public function getTripId()
  {
    return $this->tripId;
  }
  public function setTripType($tripType)
  {
    $this->tripType = $tripType;
  }
  public function getTripType()
  {
    return $this->tripType;
  }
  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_TransitObjectAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_TransitObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_TransitObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_TransitObjectListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_TransitObject';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_TranslatedString extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $language;
  public $value;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  public function getLanguage()
  {
    return $this->language;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Google_Service_Walletobjects_Uri extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $description;
  public $id;
  public $kind;
  protected $localizedDescriptionType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedDescriptionDataType = '';
  public $uri;


  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLocalizedDescription(Google_Service_Walletobjects_LocalizedString $localizedDescription)
  {
    $this->localizedDescription = $localizedDescription;
  }
  public function getLocalizedDescription()
  {
    return $this->localizedDescription;
  }
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  public function getUri()
  {
    return $this->uri;
  }
}
