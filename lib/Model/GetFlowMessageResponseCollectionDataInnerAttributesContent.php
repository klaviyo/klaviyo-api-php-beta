<?php
/**
 * GetFlowMessageResponseCollectionDataInnerAttributesContent
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
 * GetFlowMessageResponseCollectionDataInnerAttributesContent Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoBeta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetFlowMessageResponseCollectionDataInnerAttributesContent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetFlowMessageResponseCollection_data_inner_attributes_content';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subject' => 'string',
        'preview_text' => 'string',
        'from_email' => 'string',
        'from_name' => 'string',
        'body' => 'string',
        'media' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'subject' => null,
        'preview_text' => null,
        'from_email' => null,
        'from_name' => null,
        'body' => null,
        'media' => null
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
        'subject' => 'subject',
        'preview_text' => 'preview_text',
        'from_email' => 'from_email',
        'from_name' => 'from_name',
        'body' => 'body',
        'media' => 'media'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subject' => 'setSubject',
        'preview_text' => 'setPreviewText',
        'from_email' => 'setFromEmail',
        'from_name' => 'setFromName',
        'body' => 'setBody',
        'media' => 'setMedia'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subject' => 'getSubject',
        'preview_text' => 'getPreviewText',
        'from_email' => 'getFromEmail',
        'from_name' => 'getFromName',
        'body' => 'getBody',
        'media' => 'getMedia'
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
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['preview_text'] = $data['preview_text'] ?? null;
        $this->container['from_email'] = $data['from_email'] ?? null;
        $this->container['from_name'] = $data['from_name'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['media'] = $data['media'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['preview_text'] === null) {
            $invalidProperties[] = "'preview_text' can't be null";
        }
        if ($this->container['from_email'] === null) {
            $invalidProperties[] = "'from_email' can't be null";
        }
        if ($this->container['from_name'] === null) {
            $invalidProperties[] = "'from_name' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['media'] === null) {
            $invalidProperties[] = "'media' can't be null";
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
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets preview_text
     *
     * @return string
     */
    public function getPreviewText()
    {
        return $this->container['preview_text'];
    }

    /**
     * Sets preview_text
     *
     * @param string $preview_text preview_text
     *
     * @return self
     */
    public function setPreviewText($preview_text)
    {
        $this->container['preview_text'] = $preview_text;

        return $this;
    }

    /**
     * Gets from_email
     *
     * @return string
     */
    public function getFromEmail()
    {
        return $this->container['from_email'];
    }

    /**
     * Sets from_email
     *
     * @param string $from_email from_email
     *
     * @return self
     */
    public function setFromEmail($from_email)
    {
        $this->container['from_email'] = $from_email;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return string
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string $from_name from_name
     *
     * @return self
     */
    public function setFromName($from_name)
    {
        $this->container['from_name'] = $from_name;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body body
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets media
     *
     * @return string
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param string $media media
     *
     * @return self
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

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

