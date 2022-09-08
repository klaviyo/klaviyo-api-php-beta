<?php
/**
 * GetFlowActionResponseCollectionDataInnerAttributesTrackingOptions
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  KlaviyoBeta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klaviyo API (Beta)
 *
 * The Klaviyo REST API. Please visit https://developers.klaviyo.com for more details.
 *
 * The version of the OpenAPI document: 2022-09-07.pre
 * Contact: developers@klaviyo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KlaviyoBeta\Model;

use \ArrayAccess;
use \KlaviyoBeta\ObjectSerializer;

/**
 * GetFlowActionResponseCollectionDataInnerAttributesTrackingOptions Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoBeta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetFlowActionResponseCollectionDataInnerAttributesTrackingOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetFlowActionResponseCollection_data_inner_attributes_tracking_options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'add_utm' => 'bool',
        'utm_params' => '\KlaviyoBeta\Model\UtmParamInfo[]',
        'is_tracking_opens' => 'bool',
        'is_tracking_clicks' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'add_utm' => null,
        'utm_params' => null,
        'is_tracking_opens' => null,
        'is_tracking_clicks' => null
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
        'add_utm' => 'add_utm',
        'utm_params' => 'utm_params',
        'is_tracking_opens' => 'is_tracking_opens',
        'is_tracking_clicks' => 'is_tracking_clicks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_utm' => 'setAddUtm',
        'utm_params' => 'setUtmParams',
        'is_tracking_opens' => 'setIsTrackingOpens',
        'is_tracking_clicks' => 'setIsTrackingClicks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_utm' => 'getAddUtm',
        'utm_params' => 'getUtmParams',
        'is_tracking_opens' => 'getIsTrackingOpens',
        'is_tracking_clicks' => 'getIsTrackingClicks'
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
        $this->container['add_utm'] = $data['add_utm'] ?? null;
        $this->container['utm_params'] = $data['utm_params'] ?? null;
        $this->container['is_tracking_opens'] = $data['is_tracking_opens'] ?? null;
        $this->container['is_tracking_clicks'] = $data['is_tracking_clicks'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['add_utm'] === null) {
            $invalidProperties[] = "'add_utm' can't be null";
        }
        if ($this->container['utm_params'] === null) {
            $invalidProperties[] = "'utm_params' can't be null";
        }
        if ($this->container['is_tracking_opens'] === null) {
            $invalidProperties[] = "'is_tracking_opens' can't be null";
        }
        if ($this->container['is_tracking_clicks'] === null) {
            $invalidProperties[] = "'is_tracking_clicks' can't be null";
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
     * Gets add_utm
     *
     * @return bool
     */
    public function getAddUtm()
    {
        return $this->container['add_utm'];
    }

    /**
     * Sets add_utm
     *
     * @param bool $add_utm add_utm
     *
     * @return self
     */
    public function setAddUtm($add_utm)
    {
        $this->container['add_utm'] = $add_utm;

        return $this;
    }

    /**
     * Gets utm_params
     *
     * @return \KlaviyoBeta\Model\UtmParamInfo[]
     */
    public function getUtmParams()
    {
        return $this->container['utm_params'];
    }

    /**
     * Sets utm_params
     *
     * @param \KlaviyoBeta\Model\UtmParamInfo[] $utm_params utm_params
     *
     * @return self
     */
    public function setUtmParams($utm_params)
    {
        $this->container['utm_params'] = $utm_params;

        return $this;
    }

    /**
     * Gets is_tracking_opens
     *
     * @return bool
     */
    public function getIsTrackingOpens()
    {
        return $this->container['is_tracking_opens'];
    }

    /**
     * Sets is_tracking_opens
     *
     * @param bool $is_tracking_opens is_tracking_opens
     *
     * @return self
     */
    public function setIsTrackingOpens($is_tracking_opens)
    {
        $this->container['is_tracking_opens'] = $is_tracking_opens;

        return $this;
    }

    /**
     * Gets is_tracking_clicks
     *
     * @return bool
     */
    public function getIsTrackingClicks()
    {
        return $this->container['is_tracking_clicks'];
    }

    /**
     * Sets is_tracking_clicks
     *
     * @param bool $is_tracking_clicks is_tracking_clicks
     *
     * @return self
     */
    public function setIsTrackingClicks($is_tracking_clicks)
    {
        $this->container['is_tracking_clicks'] = $is_tracking_clicks;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


