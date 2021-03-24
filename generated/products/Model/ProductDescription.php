<?php
/**
 * ProductDescription
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Otto\Market\Products
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Public Partner Product API
 *
 * Manage your product data, send images and                   much more.
 *
 * The version of the OpenAPI document: V1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Otto\Market\Products\Model;

use \ArrayAccess;
use \Otto\Market\Products\ObjectSerializer;

/**
 * ProductDescription Class Doc Comment
 *
 * @category Class
 * @description Extensive description of the product.
 * @package  Otto\Market\Products
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ProductDescription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductDescription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category' => 'string',
        'brand' => 'string',
        'productLine' => 'string',
        'manufacturer' => 'string',
        'productionDate' => '\DateTime',
        'multiPack' => 'bool',
        'bundle' => 'bool',
        'fscCertified' => 'bool',
        'disposal' => 'bool',
        'productUrl' => 'string',
        'description' => 'string',
        'bulletPoints' => 'string[]',
        'attributes' => '\Otto\Market\Products\Model\Attribute[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category' => null,
        'brand' => null,
        'productLine' => null,
        'manufacturer' => null,
        'productionDate' => 'date-time',
        'multiPack' => null,
        'bundle' => null,
        'fscCertified' => null,
        'disposal' => null,
        'productUrl' => null,
        'description' => null,
        'bulletPoints' => null,
        'attributes' => null
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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'category' => 'category',
        'brand' => 'brand',
        'productLine' => 'productLine',
        'manufacturer' => 'manufacturer',
        'productionDate' => 'productionDate',
        'multiPack' => 'multiPack',
        'bundle' => 'bundle',
        'fscCertified' => 'fscCertified',
        'disposal' => 'disposal',
        'productUrl' => 'productUrl',
        'description' => 'description',
        'bulletPoints' => 'bulletPoints',
        'attributes' => 'attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'brand' => 'setBrand',
        'productLine' => 'setProductLine',
        'manufacturer' => 'setManufacturer',
        'productionDate' => 'setProductionDate',
        'multiPack' => 'setMultiPack',
        'bundle' => 'setBundle',
        'fscCertified' => 'setFscCertified',
        'disposal' => 'setDisposal',
        'productUrl' => 'setProductUrl',
        'description' => 'setDescription',
        'bulletPoints' => 'setBulletPoints',
        'attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'brand' => 'getBrand',
        'productLine' => 'getProductLine',
        'manufacturer' => 'getManufacturer',
        'productionDate' => 'getProductionDate',
        'multiPack' => 'getMultiPack',
        'bundle' => 'getBundle',
        'fscCertified' => 'getFscCertified',
        'disposal' => 'getDisposal',
        'productUrl' => 'getProductUrl',
        'description' => 'getDescription',
        'bulletPoints' => 'getBulletPoints',
        'attributes' => 'getAttributes'
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
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
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
        $this->container['category'] = $data['category'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['productLine'] = $data['productLine'] ?? null;
        $this->container['manufacturer'] = $data['manufacturer'] ?? null;
        $this->container['productionDate'] = $data['productionDate'] ?? null;
        $this->container['multiPack'] = $data['multiPack'] ?? null;
        $this->container['bundle'] = $data['bundle'] ?? null;
        $this->container['fscCertified'] = $data['fscCertified'] ?? null;
        $this->container['disposal'] = $data['disposal'] ?? null;
        $this->container['productUrl'] = $data['productUrl'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['bulletPoints'] = $data['bulletPoints'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['brand'] === null) {
            $invalidProperties[] = "'brand' can't be null";
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
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category Denotes the assortment type of the product, like 'bag' or 'shirt'. Mandatory. Must be identical for all variants of a product. Must be present in the Category service offered via Category endpoint
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand Denotes the brand name of a product, like 'Levis'. Must be identical for all variants of a product. Must be present in the Brand service offered via Brand endpoint.
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets productLine
     *
     * @return string|null
     */
    public function getProductLine()
    {
        return $this->container['productLine'];
    }

    /**
     * Sets productLine
     *
     * @param string|null $productLine Denotes the proper name of a product, like '501'. May contain a maximum of 50 characters. If provided, it must be identical for all variants of a product.
     *
     * @return self
     */
    public function setProductLine($productLine)
    {
        $this->container['productLine'] = $productLine;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer Denotes the manufacturer of a product. If provided, it must be identical for all variants of a product.
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets productionDate
     *
     * @return \DateTime|null
     */
    public function getProductionDate()
    {
        return $this->container['productionDate'];
    }

    /**
     * Sets productionDate
     *
     * @param \DateTime|null $productionDate Denotes the date of manufacture of a product variant.
     *
     * @return self
     */
    public function setProductionDate($productionDate)
    {
        $this->container['productionDate'] = $productionDate;

        return $this;
    }

    /**
     * Gets multiPack
     *
     * @return bool|null
     */
    public function getMultiPack()
    {
        return $this->container['multiPack'];
    }

    /**
     * Sets multiPack
     *
     * @param bool|null $multiPack If the product variant is part of a set: 'true'; otherwise 'false'
     *
     * @return self
     */
    public function setMultiPack($multiPack)
    {
        $this->container['multiPack'] = $multiPack;

        return $this;
    }

    /**
     * Gets bundle
     *
     * @return bool|null
     */
    public function getBundle()
    {
        return $this->container['bundle'];
    }

    /**
     * Sets bundle
     *
     * @param bool|null $bundle If the product variant is part of a bundle: 'true'; otherwise 'false'
     *
     * @return self
     */
    public function setBundle($bundle)
    {
        $this->container['bundle'] = $bundle;

        return $this;
    }

    /**
     * Gets fscCertified
     *
     * @return bool|null
     */
    public function getFscCertified()
    {
        return $this->container['fscCertified'];
    }

    /**
     * Sets fscCertified
     *
     * @param bool|null $fscCertified If the product variant is certified by the Forest Stewardship Council: 'true'; otherwise 'false'
     *
     * @return self
     */
    public function setFscCertified($fscCertified)
    {
        $this->container['fscCertified'] = $fscCertified;

        return $this;
    }

    /**
     * Gets disposal
     *
     * @return bool|null
     */
    public function getDisposal()
    {
        return $this->container['disposal'];
    }

    /**
     * Sets disposal
     *
     * @param bool|null $disposal If true, otto.de will present information about the disposal of the product (or parts of it).
     *
     * @return self
     */
    public function setDisposal($disposal)
    {
        $this->container['disposal'] = $disposal;

        return $this;
    }

    /**
     * Gets productUrl
     *
     * @return string|null
     */
    public function getProductUrl()
    {
        return $this->container['productUrl'];
    }

    /**
     * Sets productUrl
     *
     * @param string|null $productUrl Refers to a representation of the product variant in a shop of the partner. Should be a valid URL.
     *
     * @return self
     */
    public function setProductUrl($productUrl)
    {
        $this->container['productUrl'] = $productUrl;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Represents a textual description of a product variant. May contain HTML elements. Relevant for SEO.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets bulletPoints
     *
     * @return string[]|null
     */
    public function getBulletPoints()
    {
        return $this->container['bulletPoints'];
    }

    /**
     * Sets bulletPoints
     *
     * @param string[]|null $bulletPoints Lists some key information about a product variant a partner can provide. At least one bullet point must be provided. Up to five bullet points can be specified. May contain a minimum of 3 and a maximum of 180 characters.
     *
     * @return self
     */
    public function setBulletPoints($bulletPoints)
    {
        $this->container['bulletPoints'] = $bulletPoints;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \Otto\Market\Products\Model\Attribute[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Otto\Market\Products\Model\Attribute[]|null $attributes Lists all the descriptive information about a product variant a partner can provide. Must be provided in the form of a key values pair. Will be validated against the AttributeDefinitions from Category endpoint provided by Otto market.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

