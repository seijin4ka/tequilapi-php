<?php
/**
 * EntertainmentEstimateResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Tequila API
 *
 * The purpose of this documentation is to provide developers an insight of how to interact with Mysterium Node via Tequila API. This should demonstrate all the possible API calls with described parameters and responses.
 *
 * The version of the OpenAPI document: dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * EntertainmentEstimateResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EntertainmentEstimateResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EntertainmentEstimateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'browsing_minutes' => 'int',
        'music_minutes' => 'int',
        'price_gib' => 'float',
        'price_min' => 'float',
        'traffic_mb' => 'int',
        'video_minutes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'browsing_minutes' => 'uint64',
        'music_minutes' => 'uint64',
        'price_gib' => 'double',
        'price_min' => 'double',
        'traffic_mb' => 'uint64',
        'video_minutes' => 'uint64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'browsing_minutes' => false,
        'music_minutes' => false,
        'price_gib' => false,
        'price_min' => false,
        'traffic_mb' => false,
        'video_minutes' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'browsing_minutes' => 'browsing_minutes',
        'music_minutes' => 'music_minutes',
        'price_gib' => 'price_gib',
        'price_min' => 'price_min',
        'traffic_mb' => 'traffic_mb',
        'video_minutes' => 'video_minutes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'browsing_minutes' => 'setBrowsingMinutes',
        'music_minutes' => 'setMusicMinutes',
        'price_gib' => 'setPriceGib',
        'price_min' => 'setPriceMin',
        'traffic_mb' => 'setTrafficMb',
        'video_minutes' => 'setVideoMinutes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'browsing_minutes' => 'getBrowsingMinutes',
        'music_minutes' => 'getMusicMinutes',
        'price_gib' => 'getPriceGib',
        'price_min' => 'getPriceMin',
        'traffic_mb' => 'getTrafficMb',
        'video_minutes' => 'getVideoMinutes'
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
        $this->setIfExists('browsing_minutes', $data ?? [], null);
        $this->setIfExists('music_minutes', $data ?? [], null);
        $this->setIfExists('price_gib', $data ?? [], null);
        $this->setIfExists('price_min', $data ?? [], null);
        $this->setIfExists('traffic_mb', $data ?? [], null);
        $this->setIfExists('video_minutes', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets browsing_minutes
     *
     * @return int|null
     */
    public function getBrowsingMinutes()
    {
        return $this->container['browsing_minutes'];
    }

    /**
     * Sets browsing_minutes
     *
     * @param int|null $browsing_minutes browsing_minutes
     *
     * @return self
     */
    public function setBrowsingMinutes($browsing_minutes)
    {
        if (is_null($browsing_minutes)) {
            throw new \InvalidArgumentException('non-nullable browsing_minutes cannot be null');
        }
        $this->container['browsing_minutes'] = $browsing_minutes;

        return $this;
    }

    /**
     * Gets music_minutes
     *
     * @return int|null
     */
    public function getMusicMinutes()
    {
        return $this->container['music_minutes'];
    }

    /**
     * Sets music_minutes
     *
     * @param int|null $music_minutes music_minutes
     *
     * @return self
     */
    public function setMusicMinutes($music_minutes)
    {
        if (is_null($music_minutes)) {
            throw new \InvalidArgumentException('non-nullable music_minutes cannot be null');
        }
        $this->container['music_minutes'] = $music_minutes;

        return $this;
    }

    /**
     * Gets price_gib
     *
     * @return float|null
     */
    public function getPriceGib()
    {
        return $this->container['price_gib'];
    }

    /**
     * Sets price_gib
     *
     * @param float|null $price_gib price_gib
     *
     * @return self
     */
    public function setPriceGib($price_gib)
    {
        if (is_null($price_gib)) {
            throw new \InvalidArgumentException('non-nullable price_gib cannot be null');
        }
        $this->container['price_gib'] = $price_gib;

        return $this;
    }

    /**
     * Gets price_min
     *
     * @return float|null
     */
    public function getPriceMin()
    {
        return $this->container['price_min'];
    }

    /**
     * Sets price_min
     *
     * @param float|null $price_min price_min
     *
     * @return self
     */
    public function setPriceMin($price_min)
    {
        if (is_null($price_min)) {
            throw new \InvalidArgumentException('non-nullable price_min cannot be null');
        }
        $this->container['price_min'] = $price_min;

        return $this;
    }

    /**
     * Gets traffic_mb
     *
     * @return int|null
     */
    public function getTrafficMb()
    {
        return $this->container['traffic_mb'];
    }

    /**
     * Sets traffic_mb
     *
     * @param int|null $traffic_mb traffic_mb
     *
     * @return self
     */
    public function setTrafficMb($traffic_mb)
    {
        if (is_null($traffic_mb)) {
            throw new \InvalidArgumentException('non-nullable traffic_mb cannot be null');
        }
        $this->container['traffic_mb'] = $traffic_mb;

        return $this;
    }

    /**
     * Gets video_minutes
     *
     * @return int|null
     */
    public function getVideoMinutes()
    {
        return $this->container['video_minutes'];
    }

    /**
     * Sets video_minutes
     *
     * @param int|null $video_minutes video_minutes
     *
     * @return self
     */
    public function setVideoMinutes($video_minutes)
    {
        if (is_null($video_minutes)) {
            throw new \InvalidArgumentException('non-nullable video_minutes cannot be null');
        }
        $this->container['video_minutes'] = $video_minutes;

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

