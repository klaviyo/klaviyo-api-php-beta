<?php
/**
 * GetEventResponseCollectionWithIncludedSectionDataInnerAttributes
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
 * GetEventResponseCollectionWithIncludedSectionDataInnerAttributes Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoBeta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetEventResponseCollectionWithIncludedSectionDataInnerAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetEventResponseCollectionWithIncludedSection_data_inner_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'metric_id' => 'string',
        'profile_id' => 'string',
        'timestamp' => 'string',
        'event_properties' => 'object',
        'datetime' => 'string',
        'uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'metric_id' => null,
        'profile_id' => null,
        'timestamp' => null,
        'event_properties' => null,
        'datetime' => null,
        'uuid' => null
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
        'metric_id' => 'metric_id',
        'profile_id' => 'profile_id',
        'timestamp' => 'timestamp',
        'event_properties' => 'event_properties',
        'datetime' => 'datetime',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'metric_id' => 'setMetricId',
        'profile_id' => 'setProfileId',
        'timestamp' => 'setTimestamp',
        'event_properties' => 'setEventProperties',
        'datetime' => 'setDatetime',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'metric_id' => 'getMetricId',
        'profile_id' => 'getProfileId',
        'timestamp' => 'getTimestamp',
        'event_properties' => 'getEventProperties',
        'datetime' => 'getDatetime',
        'uuid' => 'getUuid'
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
        $this->container['metric_id'] = $data['metric_id'] ?? null;
        $this->container['profile_id'] = $data['profile_id'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['event_properties'] = $data['event_properties'] ?? null;
        $this->container['datetime'] = $data['datetime'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['metric_id'] === null) {
            $invalidProperties[] = "'metric_id' can't be null";
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
     * Gets metric_id
     *
     * @return string
     */
    public function getMetricId()
    {
        return $this->container['metric_id'];
    }

    /**
     * Sets metric_id
     *
     * @param string $metric_id metric_id
     *
     * @return self
     */
    public function setMetricId($metric_id)
    {
        $this->container['metric_id'] = $metric_id;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return string|null
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string|null $profile_id profile_id
     *
     * @return self
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string|null $timestamp timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets event_properties
     *
     * @return object|null
     */
    public function getEventProperties()
    {
        return $this->container['event_properties'];
    }

    /**
     * Sets event_properties
     *
     * @param object|null $event_properties event_properties
     *
     * @return self
     */
    public function setEventProperties($event_properties)
    {
        $this->container['event_properties'] = $event_properties;

        return $this;
    }

    /**
     * Gets datetime
     *
     * @return string|null
     */
    public function getDatetime()
    {
        return $this->container['datetime'];
    }

    /**
     * Sets datetime
     *
     * @param string|null $datetime datetime
     *
     * @return self
     */
    public function setDatetime($datetime)
    {
        $this->container['datetime'] = $datetime;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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


