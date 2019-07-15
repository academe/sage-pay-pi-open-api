<?php

namespace Academe\SagePay\PiSdk\Model;

/**
 * InlineResponse201
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
 * InlineResponse201 Class Doc Comment
 *
 * @category Class
 * @package  Academe\SagePay\PiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse201 implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_201';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transactionId' => 'string',
        'transactionType' => 'string',
        'status' => 'string',
        'statusCode' => 'string',
        'statusDetail' => 'string',
        'retrievalReference' => 'string',
        'bankResponseCode' => 'string',
        'bankAuthorisationCode' => 'string',
        'avsCvsCheck' => '\Academe\SagePay\PiSdk\Model\AvsCvsCheck',
        'paymentMethod' => '\Academe\SagePay\PiSdk\Model\PaymentMethodObject',
        'amount' => 'int',
        'currency' => 'string',
        '_3dSecure' => '\Academe\SagePay\PiSdk\Model\Model3DSecureObject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'transactionId' => null,
        'transactionType' => null,
        'status' => null,
        'statusCode' => null,
        'statusDetail' => null,
        'retrievalReference' => null,
        'bankResponseCode' => null,
        'bankAuthorisationCode' => null,
        'avsCvsCheck' => null,
        'paymentMethod' => null,
        'amount' => null,
        'currency' => null,
        '_3dSecure' => null
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
        'transactionId' => 'transactionId',
        'transactionType' => 'transactionType',
        'status' => 'status',
        'statusCode' => 'statusCode',
        'statusDetail' => 'statusDetail',
        'retrievalReference' => 'retrievalReference',
        'bankResponseCode' => 'bankResponseCode',
        'bankAuthorisationCode' => 'bankAuthorisationCode',
        'avsCvsCheck' => 'avsCvsCheck',
        'paymentMethod' => 'paymentMethod',
        'amount' => 'amount',
        'currency' => 'currency',
        '_3dSecure' => '3DSecure'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'transactionId' => 'setTransactionId',
        'transactionType' => 'setTransactionType',
        'status' => 'setStatus',
        'statusCode' => 'setStatusCode',
        'statusDetail' => 'setStatusDetail',
        'retrievalReference' => 'setRetrievalReference',
        'bankResponseCode' => 'setBankResponseCode',
        'bankAuthorisationCode' => 'setBankAuthorisationCode',
        'avsCvsCheck' => 'setAvsCvsCheck',
        'paymentMethod' => 'setPaymentMethod',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        '_3dSecure' => 'set3dSecure'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'transactionId' => 'getTransactionId',
        'transactionType' => 'getTransactionType',
        'status' => 'getStatus',
        'statusCode' => 'getStatusCode',
        'statusDetail' => 'getStatusDetail',
        'retrievalReference' => 'getRetrievalReference',
        'bankResponseCode' => 'getBankResponseCode',
        'bankAuthorisationCode' => 'getBankAuthorisationCode',
        'avsCvsCheck' => 'getAvsCvsCheck',
        'paymentMethod' => 'getPaymentMethod',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        '_3dSecure' => 'get3dSecure'
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

    const TRANSACTION_TYPE_PAYMENT = 'Payment';
    const TRANSACTION_TYPE_DEFERRED = 'Deferred';
    const TRANSACTION_TYPE_REPEAT = 'Repeat';
    const TRANSACTION_TYPE_REFUND = 'Refund';const STATUS_OK = 'Ok';
    const STATUS_NOT_AUTHED = 'NotAuthed';
    const STATUS_REJECTED = 'Rejected';
    const STATUS_MALFORMED = 'Malformed';
    const STATUS_INVALID = 'Invalid';
    const STATUS_ERROR = 'Error';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionTypeAllowableValues()
    {
        return [
            self::TRANSACTION_TYPE_PAYMENT,
            self::TRANSACTION_TYPE_DEFERRED,
            self::TRANSACTION_TYPE_REPEAT,
            self::TRANSACTION_TYPE_REFUND,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OK,
            self::STATUS_NOT_AUTHED,
            self::STATUS_REJECTED,
            self::STATUS_MALFORMED,
            self::STATUS_INVALID,
            self::STATUS_ERROR,
        ];
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
        $this->container['transactionId'] = $data['transactionId'] ?? null;
        $this->container['transactionType'] = $data['transactionType'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['statusCode'] = $data['statusCode'] ?? null;
        $this->container['statusDetail'] = $data['statusDetail'] ?? null;
        $this->container['retrievalReference'] = $data['retrievalReference'] ?? null;
        $this->container['bankResponseCode'] = $data['bankResponseCode'] ?? null;
        $this->container['bankAuthorisationCode'] = $data['bankAuthorisationCode'] ?? null;
        $this->container['avsCvsCheck'] = $data['avsCvsCheck'] ?? null;
        $this->container['paymentMethod'] = $data['paymentMethod'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['_3dSecure'] = $data['_3dSecure'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!is_null($this->container['transactionType']) && !in_array($this->container['transactionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'transactionType',
                implode('", "', $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be one of "%s"',
                'status',
                implode('", "', $allowedValues)
            );
        }

        if (! is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'currency',
                3
            );
        }

        if (! is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be bigger than or equal to %d.',
                'currency',
                3
            );
        }

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
     * Gets transactionType
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->get('transactionType');
    }

    /**
     * Sets transactionType
     *
     * @param string|null $transactionType The type of the transaction
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (! is_null($transactionType) && !in_array($transactionType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'transactionType',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['transactionType'] = $transactionType;

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
     * @param string|null $status Result of transaction registration.  * `Ok Transaction` - request completed successfully.  * `NotAuthed` - Transaction request was not authorised by the bank.  * `Rejected` - Transaction rejected by your fraud rules.  * `Malformed` - Missing properties or badly formed body.  * `Invalid` - Invalid property values supplied.  * `Error` - An error occurred at Sage Pay.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (! is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid value for "%s", must be one of "%s"',
                    'status',
                    implode('", "', $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
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
     * @param string|null $statusCode Code related to the `status` of the transaction. *Successfully authorised transactions will have the `statusCode` of `0000`. You can lookup any other status code on our [website](https://www.sagepay.co.uk/support/error-codes).*
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
     * Gets retrievalReference
     *
     * @return string|null
     */
    public function getRetrievalReference()
    {
        return $this->get('retrievalReference');
    }

    /**
     * Sets retrievalReference
     *
     * @param string|null $retrievalReference Sage Pay unique Authorisation Code for a successfully authorised transaction. Only present if `status` is `Ok`.
     *
     * @return $this
     */
    public function setRetrievalReference($retrievalReference)
    {
        $this->container['retrievalReference'] = $retrievalReference;

        return $this;
    }

    /**
     * Gets bankResponseCode
     *
     * @return string|null
     */
    public function getBankResponseCode()
    {
        return $this->get('bankResponseCode');
    }

    /**
     * Sets bankResponseCode
     *
     * @param string|null $bankResponseCode Also known as the decline code, these are codes that are specific to your merchant bank. Please contact them for a description of each code. *This is only returned for transaction type `Payment`*
     *
     * @return $this
     */
    public function setBankResponseCode($bankResponseCode)
    {
        $this->container['bankResponseCode'] = $bankResponseCode;

        return $this;
    }

    /**
     * Gets bankAuthorisationCode
     *
     * @return string|null
     */
    public function getBankAuthorisationCode()
    {
        return $this->get('bankAuthorisationCode');
    }

    /**
     * Sets bankAuthorisationCode
     *
     * @param string|null $bankAuthorisationCode The authorisation code returned from your merchant bank.
     *
     * @return $this
     */
    public function setBankAuthorisationCode($bankAuthorisationCode)
    {
        $this->container['bankAuthorisationCode'] = $bankAuthorisationCode;

        return $this;
    }

    /**
     * Gets avsCvsCheck
     *
     * @return \Academe\SagePay\PiSdk\Model\AvsCvsCheck|null
     */
    public function getAvsCvsCheck()
    {
        return $this->get('avsCvsCheck');
    }

    /**
     * Sets avsCvsCheck
     *
     * @param \Academe\SagePay\PiSdk\Model\AvsCvsCheck|null $avsCvsCheck avsCvsCheck
     *
     * @return $this
     */
    public function setAvsCvsCheck($avsCvsCheck)
    {
        $this->container['avsCvsCheck'] = $avsCvsCheck;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return \Academe\SagePay\PiSdk\Model\PaymentMethodObject|null
     */
    public function getPaymentMethod()
    {
        return $this->get('paymentMethod');
    }

    /**
     * Sets paymentMethod
     *
     * @param \Academe\SagePay\PiSdk\Model\PaymentMethodObject|null $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->get('amount');
    }

    /**
     * Sets amount
     *
     * @param int|null $amount The amount charged to the customer in the smallest currency unit. (e.g 100 pence to charge £1.00, or 1 to charge ¥1 (0-decimal currency).
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->get('currency');
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency of the amount in 3 letter [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) format.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        if (! is_null($currency) && (mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling InlineResponse201., must be smaller than or equal to 3.');
        }
        if (! is_null($currency) && (mb_strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling InlineResponse201., must be bigger than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets _3dSecure
     *
     * @return \Academe\SagePay\PiSdk\Model\Model3DSecureObject|null
     */
    public function get3dSecure()
    {
        return $this->get('_3dSecure');
    }

    /**
     * Sets _3dSecure
     *
     * @param \Academe\SagePay\PiSdk\Model\Model3DSecureObject|null $_3dSecure _3dSecure
     *
     * @return $this
     */
    public function set3dSecure($_3dSecure)
    {
        $this->container['_3dSecure'] = $_3dSecure;

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
