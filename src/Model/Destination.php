<?php
/**
 * Destination.
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
 * Destination Class Doc Comment.
 *
 * @category    Class
 *
 * @author      Swagger Codegen team
 *
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Destination implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Destination';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'account_number' => 'string',
        'id'             => 'string',
        'name'           => 'string',
        'sort_code'      => 'string',
        'type'           => 'string',
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
        'account_number' => 'accountNumber',
        'id'             => 'id',
        'name'           => 'name',
        'sort_code'      => 'sortCode',
        'type'           => 'type',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'account_number' => 'setAccountNumber',
        'id'             => 'setId',
        'name'           => 'setName',
        'sort_code'      => 'setSortCode',
        'type'           => 'setType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'account_number' => 'getAccountNumber',
        'id'             => 'getId',
        'name'           => 'getName',
        'sort_code'      => 'getSortCode',
        'type'           => 'getType',
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

    const TYPE_BENEFICIARY = 'BENEFICIARY';
    const TYPE_ACCOUNT = 'ACCOUNT';
    const TYPE_SCAN = 'SCAN';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BENEFICIARY,
            self::TYPE_ACCOUNT,
            self::TYPE_SCAN,
        ];
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
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sort_code'] = isset($data['sort_code']) ? $data['sort_code'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['account_number']) && !preg_match('/^[0-9]{8}$/', $this->container['account_number'])) {
            $invalid_properties[] = "invalid value for 'account_number', must be conform to the pattern /^[0-9]{8}$/.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 100)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['name']) && !preg_match("/^(.*?[A-Za-z0-9]){1,}['\\.\\-/&\\s]*_/", $this->container['name'])) {
            $invalid_properties[] = "invalid value for 'name', must be conform to the pattern /^(.*?[A-Za-z0-9]){1,}['\\.\\-/&\\s]*_/.";
        }

        if (!is_null($this->container['sort_code']) && !preg_match('/^[0-9]{6}$/', $this->container['sort_code'])) {
            $invalid_properties[] = "invalid value for 'sort_code', must be conform to the pattern /^[0-9]{6}$/.";
        }

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = ['BENEFICIARY', 'ACCOUNT', 'SCAN'];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'BENEFICIARY', 'ACCOUNT', 'SCAN'.";
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
        if (!preg_match('/^[0-9]{8}$/', $this->container['account_number'])) {
            return false;
        }
        if (strlen($this->container['name']) > 100) {
            return false;
        }
        if (!preg_match("/^(.*?[A-Za-z0-9]){1,}['\\.\\-/&\\s]*_/", $this->container['name'])) {
            return false;
        }
        if (!preg_match('/^[0-9]{6}$/', $this->container['sort_code'])) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = ['BENEFICIARY', 'ACCOUNT', 'SCAN'];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }

        return true;
    }

    /**
     * Gets account_number.
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number.
     *
     * @param string $account_number Account Number of destination account if using SCAN type.
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        if (!is_null($account_number) && (!preg_match('/^[0-9]{8}$/', $account_number))) {
            throw new \InvalidArgumentException("invalid value for $account_number when calling Destination., must conform to the pattern /^[0-9]{8}$/.");
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param string $id Identifier for the Payment destination if using ACCOUNT or BENEFICIARY type. Can be either: a) Beneficiary id for an external Payment, b) Account id for a transfer to another Account
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name Name for new destination beneficiary if one is created.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Destination., must be smaller than or equal to 100.');
        }
        if (!is_null($name) && (!preg_match("/^(.*?[A-Za-z0-9]){1,}['\\.\\-/&\\s]*_/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling Destination., must conform to the pattern /^(.*?[A-Za-z0-9]){1,}['\\.\\-/&\\s]*_/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sort_code.
     *
     * @return string
     */
    public function getSortCode()
    {
        return $this->container['sort_code'];
    }

    /**
     * Sets sort_code.
     *
     * @param string $sort_code Sort Code of destination account if using SCAN type.
     *
     * @return $this
     */
    public function setSortCode($sort_code)
    {
        if (!is_null($sort_code) && (!preg_match('/^[0-9]{6}$/', $sort_code))) {
            throw new \InvalidArgumentException("invalid value for $sort_code when calling Destination., must conform to the pattern /^[0-9]{6}$/.");
        }

        $this->container['sort_code'] = $sort_code;

        return $this;
    }

    /**
     * Gets type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param string $type Indicates the type of destination. Can be one of
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = ['BENEFICIARY', 'ACCOUNT', 'SCAN'];
        if ((!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'BENEFICIARY', 'ACCOUNT', 'SCAN'");
        }
        $this->container['type'] = $type;

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
