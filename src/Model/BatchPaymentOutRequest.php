<?php
/**
 * BatchPaymentOutRequest.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   Swaagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Modulr API.
 *
 * Modulo API
 *
 * OpenAPI spec version: 1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AlexBirtwell\ModulrHmacLaravel\Model;

use ArrayAccess;

/**
 * BatchPaymentOutRequest Class Doc Comment.
 *
 * @category    Class
 *
 * @author      Swagger Codegen team
 *
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BatchPaymentOutRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'BatchPaymentOutRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'external_reference' => 'string',
        'payments'           => '\AlexBirtwell\ModulrHmacLaravel\Model\PaymentOutRequest[]',
        'strict_processing'  => 'bool',
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'external_reference' => 'externalReference',
        'payments'           => 'payments',
        'strict_processing'  => 'strictProcessing',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'external_reference' => 'setExternalReference',
        'payments'           => 'setPayments',
        'strict_processing'  => 'setStrictProcessing',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'external_reference' => 'getExternalReference',
        'payments'           => 'getPayments',
        'strict_processing'  => 'getStrictProcessing',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['external_reference'] = isset($data['external_reference']) ? $data['external_reference'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
        $this->container['strict_processing'] = isset($data['strict_processing']) ? $data['strict_processing'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['external_reference']) && (strlen($this->container['external_reference']) > 50)) {
            $invalid_properties[] = "invalid value for 'external_reference', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['external_reference']) && !preg_match('/[\\w-\\s]*_/', $this->container['external_reference'])) {
            $invalid_properties[] = "invalid value for 'external_reference', must be conform to the pattern /[\\w-\\s]*_/.";
        }

        if ($this->container['payments'] === null) {
            $invalid_properties[] = "'payments' can't be null";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (strlen($this->container['external_reference']) > 50) {
            return false;
        }
        if (!ctype_alnum($this->container['external_reference'])) {
            return false;
        }
        if ($this->container['payments'] === null) {
            return false;
        }

        return true;
    }

    /**
     * Gets external_reference.
     *
     * @return string
     */
    public function getExternalReference()
    {
        return $this->container['external_reference'];
    }

    /**
     * Sets external_reference.
     *
     * @param string $external_reference Your reference for this Batch of payments
     *
     * @return $this
     */
    public function setExternalReference($external_reference)
    {
        if (!is_null($external_reference) && (strlen($external_reference) > 50)) {
            throw new \InvalidArgumentException('invalid length for $external_reference when calling BatchPaymentOutRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($external_reference) && (!ctype_alnum($external_reference))) {
            throw new \InvalidArgumentException("invalid value for $external_reference when calling BatchPaymentOutRequest., must conform to the pattern /[\\w-\\s]*_/.");
        }

        $this->container['external_reference'] = $external_reference;

        return $this;
    }

    /**
     * Gets payments.
     *
     * @return \AlexBirtwell\ModulrHmacLaravel\Model\PaymentOutRequest[]
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments.
     *
     * @param \AlexBirtwell\ModulrHmacLaravel\Model\PaymentOutRequest[] $payments Lists of payments. Need atleast 1 and maximum of 1000
     *
     * @return $this
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets strict_processing.
     *
     * @return bool
     */
    public function getStrictProcessing()
    {
        return $this->container['strict_processing'];
    }

    /**
     * Sets strict_processing.
     *
     * @param bool $strict_processing Flag to control if the entire batch fails for any individual payment validation failure
     *
     * @return $this
     */
    public function setStrictProcessing($strict_processing)
    {
        $this->container['strict_processing'] = $strict_processing;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\AlexBirtwell\ModulrHmacLaravel\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\AlexBirtwell\ModulrHmacLaravel\ObjectSerializer::sanitizeForSerialization($this));
    }
}
