<?php
/**
 * SendStrategySubObjectOptions
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  KlaviyoAPIBeta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klaviyo API (Beta)
 *
 * The Klaviyo REST API. Please visit https://developers.klaviyo.com for more details.
 *
 * The version of the OpenAPI document: 2022-11-14.pre
 * Contact: developers@klaviyo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KlaviyoAPIBeta\Model;

use \ArrayAccess;
use \KlaviyoAPIBeta\ObjectSerializer;

/**
 * SendStrategySubObjectOptions Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoAPIBeta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SendStrategySubObjectOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SendStrategySubObject_options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'datetime' => '\DateTime',
        'is_local' => 'bool',
        'send_past_recipients_immediately' => 'bool',
        'throttle_percentage' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'datetime' => 'date-time',
        'is_local' => null,
        'send_past_recipients_immediately' => null,
        'throttle_percentage' => null
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
        'datetime' => 'datetime',
        'is_local' => 'is_local',
        'send_past_recipients_immediately' => 'send_past_recipients_immediately',
        'throttle_percentage' => 'throttle_percentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'datetime' => 'setDatetime',
        'is_local' => 'setIsLocal',
        'send_past_recipients_immediately' => 'setSendPastRecipientsImmediately',
        'throttle_percentage' => 'setThrottlePercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'datetime' => 'getDatetime',
        'is_local' => 'getIsLocal',
        'send_past_recipients_immediately' => 'getSendPastRecipientsImmediately',
        'throttle_percentage' => 'getThrottlePercentage'
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
        $this->container['datetime'] = $data['datetime'] ?? null;
        $this->container['is_local'] = $data['is_local'] ?? null;
        $this->container['send_past_recipients_immediately'] = $data['send_past_recipients_immediately'] ?? null;
        $this->container['throttle_percentage'] = $data['throttle_percentage'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['datetime'] === null) {
            $invalidProperties[] = "'datetime' can't be null";
        }
        if ($this->container['is_local'] === null) {
            $invalidProperties[] = "'is_local' can't be null";
        }
        if ($this->container['throttle_percentage'] === null) {
            $invalidProperties[] = "'throttle_percentage' can't be null";
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
     * Gets datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->container['datetime'];
    }

    /**
     * Sets datetime
     *
     * @param \DateTime $datetime datetime
     *
     * @return self
     */
    public function setDatetime($datetime)
    {
        $this->container['datetime'] = $datetime;

        return $this;
    }

    /**
     * Gets is_local
     *
     * @return bool
     */
    public function getIsLocal()
    {
        return $this->container['is_local'];
    }

    /**
     * Sets is_local
     *
     * @param bool $is_local is_local
     *
     * @return self
     */
    public function setIsLocal($is_local)
    {
        $this->container['is_local'] = $is_local;

        return $this;
    }

    /**
     * Gets send_past_recipients_immediately
     *
     * @return bool|null
     */
    public function getSendPastRecipientsImmediately()
    {
        return $this->container['send_past_recipients_immediately'];
    }

    /**
     * Sets send_past_recipients_immediately
     *
     * @param bool|null $send_past_recipients_immediately send_past_recipients_immediately
     *
     * @return self
     */
    public function setSendPastRecipientsImmediately($send_past_recipients_immediately)
    {
        $this->container['send_past_recipients_immediately'] = $send_past_recipients_immediately;

        return $this;
    }

    /**
     * Gets throttle_percentage
     *
     * @return int
     */
    public function getThrottlePercentage()
    {
        return $this->container['throttle_percentage'];
    }

    /**
     * Sets throttle_percentage
     *
     * @param int $throttle_percentage throttle_percentage
     *
     * @return self
     */
    public function setThrottlePercentage($throttle_percentage)
    {
        $this->container['throttle_percentage'] = $throttle_percentage;

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


