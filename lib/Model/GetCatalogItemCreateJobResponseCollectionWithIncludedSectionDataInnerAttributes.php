<?php
/**
 * GetCatalogItemCreateJobResponseCollectionWithIncludedSectionDataInnerAttributes
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
 * GetCatalogItemCreateJobResponseCollectionWithIncludedSectionDataInnerAttributes Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoBeta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCatalogItemCreateJobResponseCollectionWithIncludedSectionDataInnerAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetCatalogItemCreateJobResponseCollectionWithIncludedSection_data_inner_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'job_id' => 'string',
        'status' => 'string',
        'created_at' => '\DateTime',
        'total_count' => 'int',
        'completed_count' => 'int',
        'failed_count' => 'int',
        'completed_at' => '\DateTime',
        'expires_at' => '\DateTime',
        'errors' => '\KlaviyoBeta\Model\CatalogJobErrorPayload[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'job_id' => null,
        'status' => null,
        'created_at' => 'date-time',
        'total_count' => null,
        'completed_count' => null,
        'failed_count' => null,
        'completed_at' => 'date-time',
        'expires_at' => 'date-time',
        'errors' => null
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
        'job_id' => 'job_id',
        'status' => 'status',
        'created_at' => 'created_at',
        'total_count' => 'total_count',
        'completed_count' => 'completed_count',
        'failed_count' => 'failed_count',
        'completed_at' => 'completed_at',
        'expires_at' => 'expires_at',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'job_id' => 'setJobId',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'total_count' => 'setTotalCount',
        'completed_count' => 'setCompletedCount',
        'failed_count' => 'setFailedCount',
        'completed_at' => 'setCompletedAt',
        'expires_at' => 'setExpiresAt',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'job_id' => 'getJobId',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'total_count' => 'getTotalCount',
        'completed_count' => 'getCompletedCount',
        'failed_count' => 'getFailedCount',
        'completed_at' => 'getCompletedAt',
        'expires_at' => 'getExpiresAt',
        'errors' => 'getErrors'
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

    public const STATUS_COMPLETE = 'complete';
    public const STATUS_PROCESSING = 'processing';
    public const STATUS_QUEUED = 'queued';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_COMPLETE,
            self::STATUS_PROCESSING,
            self::STATUS_QUEUED,
        ];
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
        $this->container['job_id'] = $data['job_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['total_count'] = $data['total_count'] ?? null;
        $this->container['completed_count'] = $data['completed_count'] ?? null;
        $this->container['failed_count'] = $data['failed_count'] ?? null;
        $this->container['completed_at'] = $data['completed_at'] ?? null;
        $this->container['expires_at'] = $data['expires_at'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['job_id'] === null) {
            $invalidProperties[] = "'job_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['total_count'] === null) {
            $invalidProperties[] = "'total_count' can't be null";
        }
        if ($this->container['completed_count'] === null) {
            $invalidProperties[] = "'completed_count' can't be null";
        }
        if ($this->container['failed_count'] === null) {
            $invalidProperties[] = "'failed_count' can't be null";
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
     * Gets job_id
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     *
     * @param string $job_id job_id
     *
     * @return self
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The valid top level statuses for an asynchronous query
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param int $total_count total_count
     *
     * @return self
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

        return $this;
    }

    /**
     * Gets completed_count
     *
     * @return int
     */
    public function getCompletedCount()
    {
        return $this->container['completed_count'];
    }

    /**
     * Sets completed_count
     *
     * @param int $completed_count completed_count
     *
     * @return self
     */
    public function setCompletedCount($completed_count)
    {
        $this->container['completed_count'] = $completed_count;

        return $this;
    }

    /**
     * Gets failed_count
     *
     * @return int
     */
    public function getFailedCount()
    {
        return $this->container['failed_count'];
    }

    /**
     * Sets failed_count
     *
     * @param int $failed_count failed_count
     *
     * @return self
     */
    public function setFailedCount($failed_count)
    {
        $this->container['failed_count'] = $failed_count;

        return $this;
    }

    /**
     * Gets completed_at
     *
     * @return \DateTime|null
     */
    public function getCompletedAt()
    {
        return $this->container['completed_at'];
    }

    /**
     * Sets completed_at
     *
     * @param \DateTime|null $completed_at completed_at
     *
     * @return self
     */
    public function setCompletedAt($completed_at)
    {
        $this->container['completed_at'] = $completed_at;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime|null $expires_at expires_at
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \KlaviyoBeta\Model\CatalogJobErrorPayload[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \KlaviyoBeta\Model\CatalogJobErrorPayload[]|null $errors errors
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

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


