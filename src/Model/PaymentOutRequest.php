<?php
/**
 * PaymentOutRequest.
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
 * PaymentOutRequest Class Doc Comment.
 *
 * @category    Class
 *
 * @author      Swagger Codegen team
 *
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentOutRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PaymentOutRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'amount'             => 'double',
        'destination'        => '\AlexBirtwell\ModulrHmacLaravel\Model\Destination',
        'external_reference' => 'string',
        'reference'          => 'string',
        'source_account_id'  => 'string',
        'payment_date' => 'string',
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
        'amount'             => 'amount',
        'destination'        => 'destination',
        'external_reference' => 'externalReference',
        'reference'          => 'reference',
        'source_account_id'  => 'sourceAccountId',
        'payment_date' => 'paymentDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amount'             => 'setAmount',
        'destination'        => 'setDestination',
        'external_reference' => 'setExternalReference',
        'reference'          => 'setReference',
        'source_account_id'  => 'setSourceAccountId',
        'payment_date'  => 'setPaymentDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amount'             => 'getAmount',
        'destination'        => 'getDestination',
        'external_reference' => 'getExternalReference',
        'reference'          => 'getReference',
        'source_account_id'  => 'getSourceAccountId',
        'payment_date'=> 'getPaymentDate',
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['external_reference'] = isset($data['external_reference']) ? $data['external_reference'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['source_account_id'] = isset($data['source_account_id']) ? $data['source_account_id'] : null;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] > 2147483647)) {
            $invalid_properties[] = "invalid value for 'amount', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['amount'] < 4.9E-324)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 4.9E-324.";
        }

        if (!is_null($this->container['external_reference']) && (strlen($this->container['external_reference']) > 50)) {
            $invalid_properties[] = "invalid value for 'external_reference', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['external_reference']) && !ctype_alnum($this->container['external_reference'])) {
            $invalid_properties[] = "invalid value for 'external_reference', must be conform to the pattern /[\\w-\\s]*_/.";
        }

        if ($this->container['source_account_id'] === null) {
            $invalid_properties[] = "'source_account_id' can't be null";
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
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['amount'] > 2147483647) {
            return false;
        }
        if ($this->container['amount'] < 4.9E-324) {
            return false;
        }
        if (strlen($this->container['external_reference']) > 50) {
            return false;
        }
        if (!ctype_alnum($this->container['external_reference'])) {
            return false;
        }
        if ($this->container['source_account_id'] === null) {
            return false;
        }

        return true;
    }

    /**
     * Gets amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount.
     *
     * @param float $amount Amount of the payment in Major Current Units - '1' = 1.00 GBP
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        if (($amount > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling PaymentOutRequest., must be smaller than or equal to 2147483647.');
        }
        if (($amount < 4.9E-324)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling PaymentOutRequest., must be bigger than or equal to 4.9E-324.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets destination.
     *
     * @return \AlexBirtwell\ModulrHmacLaravel\Model\Destination
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination.
     *
     * @param \AlexBirtwell\ModulrHmacLaravel\Model\Destination $destination Destination of the Payment
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

        return $this;
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
     * @param string $external_reference Your reference for this payment
     *
     * @return $this
     */
    public function setExternalReference($external_reference)
    {
        if (!is_null($external_reference) && (strlen($external_reference) > 50)) {
            throw new \InvalidArgumentException('invalid length for $external_reference when calling PaymentOutRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($external_reference) && (!ctype_alnum($external_reference))) {
            throw new \InvalidArgumentException("invalid value for $external_reference when calling PaymentOutRequest., must conform to the pattern /[\\w-\\s]*_/.");
        }

        $this->container['external_reference'] = $external_reference;

        return $this;
    }

    /**
     * Gets reference.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference.
     *
     * @param string $reference Reference to be used for the Payment. This will appear on the Account statement/the recipient's bank account. Min 6 to max 18 characters. Can contain alphanumeric, '-', '.', '&', '/' and space.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Sets furture payment date
     *
     * @param string $reference Reference to be used for the Payment. This will appear on the Account statement/the recipient's bank account. Min 6 to max 18 characters. Can contain alphanumeric, '-', '.', '&', '/' and space.
     *
     * @return $this
     */
    public function setPaymentDate($reference)
    {
        $this->container['payment_date'] = $reference;

        return $this;
    }

     /**
     * Gets payment_date.
     *
     * @return string
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Gets source_account_id.
     *
     * @return string
     */
    public function getSourceAccountId()
    {
        return $this->container['source_account_id'];
    }

    /**
     * Sets source_account_id.
     *
     * @param string $source_account_id Identifier for the sending Account.
     *
     * @return $this
     */
    public function setSourceAccountId($source_account_id)
    {
        $this->container['source_account_id'] = $source_account_id;

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
