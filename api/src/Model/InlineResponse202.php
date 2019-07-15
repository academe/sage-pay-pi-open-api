<?php

namespace Academe\SagePay\PiSdk\Model;

/**
 * InlineResponse202
 *
 * PHP version 5
 *
 * @category Class
 * @package  Academe\SagePay\PiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * sagePay API Documentation
 *
 * $ref: 'description.md'
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

use ArrayAccess;
use JsonSerializable;
use Academe\SagePay\PiSdk\ObjectSerializer;

/**
 * InlineResponse202 Class Doc Comment
 *
 * @category Class
 * @package  Academe\SagePay\PiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse202 implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_202';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'statusCode' => 'string',
        'statusDetail' => 'string',
        'transactionId' => 'string',
        'acsUrl' => 'string',
        'paReq' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'statusCode' => null,
        'statusDetail' => null,
        'transactionId' => null,
        'acsUrl' => null,
        'paReq' => null,
        'status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Attributes of form: local name => original name
     * Local name is camelCase, original name is as per API description
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'statusCode' => 'statusCode',
        'statusDetail' => 'statusDetail',
        'transactionId' => 'transactionId',
        'acsUrl' => 'acsUrl',
        'paReq' => 'paReq',
        'status' => 'status'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'statusCode' => 'setStatusCode',
        'statusDetail' => 'setStatusDetail',
        'transactionId' => 'setTransactionId',
        'acsUrl' => 'setAcsUrl',
        'paReq' => 'setPaReq',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'statusCode' => 'getStatusCode',
        'statusDetail' => 'getStatusDetail',
        'transactionId' => 'getTransactionId',
        'acsUrl' => 'getAcsUrl',
        'paReq' => 'getPaReq',
        'status' => 'getStatus'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to accessor functions
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['statusCode'] = $data['statusCode'] ?? null;
        $this->container['statusDetail'] = $data['statusDetail'] ?? null;
        $this->container['transactionId'] = $data['transactionId'] ?? null;
        $this->container['acsUrl'] = $data['acsUrl'] ?? null;
        $this->container['paReq'] = $data['paReq'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets statusCode
     *
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->get('statusCode');
    }

    /**
     * Sets statusCode
     *
     * @param string|null $statusCode Code related to the `status` of the transaction. *You can lookup any status code on our [website](https://www.sagepay.co.uk/support/error-codes).*
     *
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;

        return $this;
    }

    /**
     * Gets statusDetail
     *
     * @return string|null
     */
    public function getStatusDetail()
    {
        return $this->get('statusDetail');
    }

    /**
     * Sets statusDetail
     *
     * @param string|null $statusDetail A detailed reason for the `status` of the transaction.
     *
     * @return $this
     */
    public function setStatusDetail($statusDetail)
    {
        $this->container['statusDetail'] = $statusDetail;

        return $this;
    }

    /**
     * Gets transactionId
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->get('transactionId');
    }

    /**
     * Sets transactionId
     *
     * @param string|null $transactionId Sage Pay’s unique reference for this transaction.
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets acsUrl
     *
     * @return string|null
     */
    public function getAcsUrl()
    {
        return $this->get('acsUrl');
    }

    /**
     * Sets acsUrl
     *
     * @param string|null $acsUrl A fully qualified URL that points to the 3-D Secure authentication system at the card holder’s issuing bank
     *
     * @return $this
     */
    public function setAcsUrl($acsUrl)
    {
        $this->container['acsUrl'] = $acsUrl;

        return $this;
    }

    /**
     * Gets paReq
     *
     * @return string|null
     */
    public function getPaReq()
    {
        return $this->get('paReq');
    }

    /**
     * Sets paReq
     *
     * @param string|null $paReq A Base64 encoded, encrypted message that contains the transaction details. This needs to be passed to the issuing bank as part of the 3-D Secure authentication
     *
     * @return $this
     */
    public function setPaReq($paReq)
    {
        $this->container['paReq'] = $paReq;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get('status');
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode($this, JSON_PRETTY_PRINT);
    }

    /**
     * Convert to a nested array.
     * This is not an ideal method, and needs to be revisited.
     */
    public function toArray()
    {
        return json_decode(json_encode($this), true);
    }

    /**
     * Return the JSON serialisable data for this model.
     *
     * @return string|object
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * return a property value.
     *
     * @param string $name Name of the property
     * @param mixed $default Value if property is not set
     *
     * @return mixed
     */
    public function get(string $name, $default = null)
    {
        return $this->container[$name] ?? $default;
    }

    /**
     * Hangle magic getter to return properties.
     *
     * @param string $name Name of the property
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->get($name);
    }
}
