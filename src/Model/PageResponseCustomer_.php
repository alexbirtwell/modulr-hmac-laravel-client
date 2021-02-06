<?php
/**
 * PageResponseCustomer_.
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

namespace CrowdProperty\ModulrHmacPhpClient\Model;

use ArrayAccess;

/**
 * PageResponseCustomer_ Class Doc Comment.
 *
 * @category    Class
 *
 * @author      Swagger Codegen team
 *
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PageResponseCustomer_ implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PageResponse«Customer»';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'content'     => '\CrowdProperty\ModulrHmacPhpClient\Model\Customer[]',
        'page'        => 'int',
        'size'        => 'int',
        'total_pages' => 'int',
        'total_size'  => 'int',
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
        'content'     => 'content',
        'page'        => 'page',
        'size'        => 'size',
        'total_pages' => 'totalPages',
        'total_size'  => 'totalSize',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'content'     => 'setContent',
        'page'        => 'setPage',
        'size'        => 'setSize',
        'total_pages' => 'setTotalPages',
        'total_size'  => 'setTotalSize',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'content'     => 'getContent',
        'page'        => 'getPage',
        'size'        => 'getSize',
        'total_pages' => 'getTotalPages',
        'total_size'  => 'getTotalSize',
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['total_pages'] = isset($data['total_pages']) ? $data['total_pages'] : null;
        $this->container['total_size'] = isset($data['total_size']) ? $data['total_size'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['content'] === null) {
            $invalid_properties[] = "'content' can't be null";
        }
        if ($this->container['page'] === null) {
            $invalid_properties[] = "'page' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalid_properties[] = "'size' can't be null";
        }
        if ($this->container['total_pages'] === null) {
            $invalid_properties[] = "'total_pages' can't be null";
        }
        if ($this->container['total_size'] === null) {
            $invalid_properties[] = "'total_size' can't be null";
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
        if ($this->container['content'] === null) {
            return false;
        }
        if ($this->container['page'] === null) {
            return false;
        }
        if ($this->container['size'] === null) {
            return false;
        }
        if ($this->container['total_pages'] === null) {
            return false;
        }
        if ($this->container['total_size'] === null) {
            return false;
        }

        return true;
    }

    /**
     * Gets content.
     *
     * @return \CrowdProperty\ModulrHmacPhpClient\Model\Customer[]
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content.
     *
     * @param \CrowdProperty\ModulrHmacPhpClient\Model\Customer[] $content List of responses on the current page
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets page.
     *
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page.
     *
     * @param int $page Current page number. Its 0 based. i.e firstpage =0, secondpage=1
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets size.
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size.
     *
     * @param int $size Page size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets total_pages.
     *
     * @return int
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages.
     *
     * @param int $total_pages Total pages
     *
     * @return $this
     */
    public function setTotalPages($total_pages)
    {
        $this->container['total_pages'] = $total_pages;

        return $this;
    }

    /**
     * Gets total_size.
     *
     * @return int
     */
    public function getTotalSize()
    {
        return $this->container['total_size'];
    }

    /**
     * Sets total_size.
     *
     * @param int $total_size Total count
     *
     * @return $this
     */
    public function setTotalSize($total_size)
    {
        $this->container['total_size'] = $total_size;

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
            return json_encode(\CrowdProperty\ModulrHmacPhpClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CrowdProperty\ModulrHmacPhpClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}
