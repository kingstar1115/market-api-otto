<?php
/**
 * ProductVariation
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
 * The version of the OpenAPI document: V2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
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
 * ProductVariation Class Doc Comment
 *
 * @category Class
 * @package  Otto\Market\Products
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductVariation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductVariation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'productReference' => 'string',
        'sku' => 'string',
        'ean' => 'string',
        'isbn' => 'string',
        'upc' => 'string',
        'pzn' => 'string',
        'mpn' => 'string',
        'moin' => 'string',
        'offeringStartDate' => '\DateTime',
        'releaseDate' => '\DateTime',
        'maxOrderQuantity' => 'int',
        'productDescription' => '\Otto\Market\Products\Model\ProductDescription',
        'mediaAssets' => '\Otto\Market\Products\Model\MediaAsset[]',
        'delivery' => '\Otto\Market\Products\Model\Delivery',
        'pricing' => '\Otto\Market\Products\Model\Pricing',
        'logistics' => '\Otto\Market\Products\Model\Logistics'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'productReference' => null,
        'sku' => null,
        'ean' => null,
        'isbn' => null,
        'upc' => null,
        'pzn' => null,
        'mpn' => null,
        'moin' => null,
        'offeringStartDate' => 'date-time',
        'releaseDate' => 'date-time',
        'maxOrderQuantity' => 'int32',
        'productDescription' => null,
        'mediaAssets' => null,
        'delivery' => null,
        'pricing' => null,
        'logistics' => null
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
        'productReference' => 'productReference',
        'sku' => 'sku',
        'ean' => 'ean',
        'isbn' => 'isbn',
        'upc' => 'upc',
        'pzn' => 'pzn',
        'mpn' => 'mpn',
        'moin' => 'moin',
        'offeringStartDate' => 'offeringStartDate',
        'releaseDate' => 'releaseDate',
        'maxOrderQuantity' => 'maxOrderQuantity',
        'productDescription' => 'productDescription',
        'mediaAssets' => 'mediaAssets',
        'delivery' => 'delivery',
        'pricing' => 'pricing',
        'logistics' => 'logistics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productReference' => 'setProductReference',
        'sku' => 'setSku',
        'ean' => 'setEan',
        'isbn' => 'setIsbn',
        'upc' => 'setUpc',
        'pzn' => 'setPzn',
        'mpn' => 'setMpn',
        'moin' => 'setMoin',
        'offeringStartDate' => 'setOfferingStartDate',
        'releaseDate' => 'setReleaseDate',
        'maxOrderQuantity' => 'setMaxOrderQuantity',
        'productDescription' => 'setProductDescription',
        'mediaAssets' => 'setMediaAssets',
        'delivery' => 'setDelivery',
        'pricing' => 'setPricing',
        'logistics' => 'setLogistics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productReference' => 'getProductReference',
        'sku' => 'getSku',
        'ean' => 'getEan',
        'isbn' => 'getIsbn',
        'upc' => 'getUpc',
        'pzn' => 'getPzn',
        'mpn' => 'getMpn',
        'moin' => 'getMoin',
        'offeringStartDate' => 'getOfferingStartDate',
        'releaseDate' => 'getReleaseDate',
        'maxOrderQuantity' => 'getMaxOrderQuantity',
        'productDescription' => 'getProductDescription',
        'mediaAssets' => 'getMediaAssets',
        'delivery' => 'getDelivery',
        'pricing' => 'getPricing',
        'logistics' => 'getLogistics'
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
        $this->container['productReference'] = $data['productReference'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['isbn'] = $data['isbn'] ?? null;
        $this->container['upc'] = $data['upc'] ?? null;
        $this->container['pzn'] = $data['pzn'] ?? null;
        $this->container['mpn'] = $data['mpn'] ?? null;
        $this->container['moin'] = $data['moin'] ?? null;
        $this->container['offeringStartDate'] = $data['offeringStartDate'] ?? null;
        $this->container['releaseDate'] = $data['releaseDate'] ?? null;
        $this->container['maxOrderQuantity'] = $data['maxOrderQuantity'] ?? null;
        $this->container['productDescription'] = $data['productDescription'] ?? null;
        $this->container['mediaAssets'] = $data['mediaAssets'] ?? null;
        $this->container['delivery'] = $data['delivery'] ?? null;
        $this->container['pricing'] = $data['pricing'] ?? null;
        $this->container['logistics'] = $data['logistics'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['productReference'] === null) {
            $invalidProperties[] = "'productReference' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['ean'] === null) {
            $invalidProperties[] = "'ean' can't be null";
        }
        if ($this->container['delivery'] === null) {
            $invalidProperties[] = "'delivery' can't be null";
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
     * Gets productReference
     *
     * @return string
     */
    public function getProductReference()
    {
        return $this->container['productReference'];
    }

    /**
     * Sets productReference
     *
     * @param string $productReference The productReference groups all variations, that you want to combine into one product. This is not visible to the customer. The productReference can be freely assigned and may consist of maximum 50 characters. You can only use the productReference once within your product catalog. You should therefore use a value that makes sense for all variations of the product and does not refer to any specifics of a particular variation. You will find the product reference, for example, in the product overview in the portal.
     *
     * @return self
     */
    public function setProductReference($productReference)
    {
        $this->container['productReference'] = $productReference;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku Identifier for a product variation, provided by the partner, must be unique for a partner. It is mandatory and may consist of a maximum of 50 characters.
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean External identifier of a product, must be unique in a partner assortment, must not start with a 2.
     *
     * @return self
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets isbn
     *
     * @return string|null
     */
    public function getIsbn()
    {
        return $this->container['isbn'];
    }

    /**
     * Sets isbn
     *
     * @param string|null $isbn International Standard Book Number, internationally used for identifying media artifacts, like books.
     *
     * @return self
     */
    public function setIsbn($isbn)
    {
        $this->container['isbn'] = $isbn;

        return $this;
    }

    /**
     * Gets upc
     *
     * @return string|null
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string|null $upc Universal Product Code.
     *
     * @return self
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

        return $this;
    }

    /**
     * Gets pzn
     *
     * @return string|null
     */
    public function getPzn()
    {
        return $this->container['pzn'];
    }

    /**
     * Sets pzn
     *
     * @param string|null $pzn Pharmazentralnummer, a german standard for identifying pharmaceutical products.
     *
     * @return self
     */
    public function setPzn($pzn)
    {
        $this->container['pzn'] = $pzn;

        return $this;
    }

    /**
     * Gets mpn
     *
     * @return string|null
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn
     *
     * @param string|null $mpn Manufacturer part number, may consist of a maximum of 50 characters.
     *
     * @return self
     */
    public function setMpn($mpn)
    {
        $this->container['mpn'] = $mpn;

        return $this;
    }

    /**
     * Gets moin
     *
     * @return string|null
     */
    public function getMoin()
    {
        return $this->container['moin'];
    }

    /**
     * Sets moin
     *
     * @param string|null $moin My Otto Identification Number. The market place ID of the product, is generated by the marketplace and returned to the partner, when product is created on the market place.
     *
     * @return self
     */
    public function setMoin($moin)
    {
        $this->container['moin'] = $moin;

        return $this;
    }

    /**
     * Gets offeringStartDate
     *
     * @return \DateTime|null
     */
    public function getOfferingStartDate()
    {
        return $this->container['offeringStartDate'];
    }

    /**
     * Sets offeringStartDate
     *
     * @param \DateTime|null $offeringStartDate Date to which the product can be ordered via OTTO marketplace.
     *
     * @return self
     */
    public function setOfferingStartDate($offeringStartDate)
    {
        $this->container['offeringStartDate'] = $offeringStartDate;

        return $this;
    }

    /**
     * Gets releaseDate
     *
     * @return \DateTime|null
     */
    public function getReleaseDate()
    {
        return $this->container['releaseDate'];
    }

    /**
     * Sets releaseDate
     *
     * @param \DateTime|null $releaseDate Date to which the product is released by the manufacturer, e.g. computer games.
     *
     * @return self
     */
    public function setReleaseDate($releaseDate)
    {
        $this->container['releaseDate'] = $releaseDate;

        return $this;
    }

    /**
     * Gets maxOrderQuantity
     *
     * @return int|null
     */
    public function getMaxOrderQuantity()
    {
        return $this->container['maxOrderQuantity'];
    }

    /**
     * Sets maxOrderQuantity
     *
     * @param int|null $maxOrderQuantity The maximum allowed order quantity for the customer.
     *
     * @return self
     */
    public function setMaxOrderQuantity($maxOrderQuantity)
    {
        $this->container['maxOrderQuantity'] = $maxOrderQuantity;

        return $this;
    }

    /**
     * Gets productDescription
     *
     * @return \Otto\Market\Products\Model\ProductDescription|null
     */
    public function getProductDescription()
    {
        return $this->container['productDescription'];
    }

    /**
     * Sets productDescription
     *
     * @param \Otto\Market\Products\Model\ProductDescription|null $productDescription productDescription
     *
     * @return self
     */
    public function setProductDescription($productDescription)
    {
        $this->container['productDescription'] = $productDescription;

        return $this;
    }

    /**
     * Gets mediaAssets
     *
     * @return \Otto\Market\Products\Model\MediaAsset[]|null
     */
    public function getMediaAssets()
    {
        return $this->container['mediaAssets'];
    }

    /**
     * Sets mediaAssets
     *
     * @param \Otto\Market\Products\Model\MediaAsset[]|null $mediaAssets mediaAssets
     *
     * @return self
     */
    public function setMediaAssets($mediaAssets)
    {
        $this->container['mediaAssets'] = $mediaAssets;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \Otto\Market\Products\Model\Delivery
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \Otto\Market\Products\Model\Delivery $delivery delivery
     *
     * @return self
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets pricing
     *
     * @return \Otto\Market\Products\Model\Pricing|null
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     *
     * @param \Otto\Market\Products\Model\Pricing|null $pricing pricing
     *
     * @return self
     */
    public function setPricing($pricing)
    {
        $this->container['pricing'] = $pricing;

        return $this;
    }

    /**
     * Gets logistics
     *
     * @return \Otto\Market\Products\Model\Logistics|null
     */
    public function getLogistics()
    {
        return $this->container['logistics'];
    }

    /**
     * Sets logistics
     *
     * @param \Otto\Market\Products\Model\Logistics|null $logistics logistics
     *
     * @return self
     */
    public function setLogistics($logistics)
    {
        $this->container['logistics'] = $logistics;

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


