<?php
/**
 * CurrentPriceResponse
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
 * CurrentPriceResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CurrentPriceResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CurrentPriceResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'price_per_gib' => 'string',
        'price_per_gib_tokens' => '\OpenAPI\Client\Model\Tokens',
        'price_per_hour' => 'string',
        'price_per_hour_tokens' => '\OpenAPI\Client\Model\Tokens',
        'service_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'price_per_gib' => null,
        'price_per_gib_tokens' => null,
        'price_per_hour' => null,
        'price_per_hour_tokens' => null,
        'service_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'price_per_gib' => false,
        'price_per_gib_tokens' => false,
        'price_per_hour' => false,
        'price_per_hour_tokens' => false,
        'service_type' => false
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
        'price_per_gib' => 'price_per_gib',
        'price_per_gib_tokens' => 'price_per_gib_tokens',
        'price_per_hour' => 'price_per_hour',
        'price_per_hour_tokens' => 'price_per_hour_tokens',
        'service_type' => 'service_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price_per_gib' => 'setPricePerGib',
        'price_per_gib_tokens' => 'setPricePerGibTokens',
        'price_per_hour' => 'setPricePerHour',
        'price_per_hour_tokens' => 'setPricePerHourTokens',
        'service_type' => 'setServiceType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price_per_gib' => 'getPricePerGib',
        'price_per_gib_tokens' => 'getPricePerGibTokens',
        'price_per_hour' => 'getPricePerHour',
        'price_per_hour_tokens' => 'getPricePerHourTokens',
        'service_type' => 'getServiceType'
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
        $this->setIfExists('price_per_gib', $data ?? [], null);
        $this->setIfExists('price_per_gib_tokens', $data ?? [], null);
        $this->setIfExists('price_per_hour', $data ?? [], null);
        $this->setIfExists('price_per_hour_tokens', $data ?? [], null);
        $this->setIfExists('service_type', $data ?? [], null);
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
     * Gets price_per_gib
     *
     * @return string|null
     */
    public function getPricePerGib()
    {
        return $this->container['price_per_gib'];
    }

    /**
     * Sets price_per_gib
     *
     * @param string|null $price_per_gib deprecated
     *
     * @return self
     */
    public function setPricePerGib($price_per_gib)
    {
        if (is_null($price_per_gib)) {
            throw new \InvalidArgumentException('non-nullable price_per_gib cannot be null');
        }
        $this->container['price_per_gib'] = $price_per_gib;

        return $this;
    }

    /**
     * Gets price_per_gib_tokens
     *
     * @return \OpenAPI\Client\Model\Tokens|null
     */
    public function getPricePerGibTokens()
    {
        return $this->container['price_per_gib_tokens'];
    }

    /**
     * Sets price_per_gib_tokens
     *
     * @param \OpenAPI\Client\Model\Tokens|null $price_per_gib_tokens price_per_gib_tokens
     *
     * @return self
     */
    public function setPricePerGibTokens($price_per_gib_tokens)
    {
        if (is_null($price_per_gib_tokens)) {
            throw new \InvalidArgumentException('non-nullable price_per_gib_tokens cannot be null');
        }
        $this->container['price_per_gib_tokens'] = $price_per_gib_tokens;

        return $this;
    }

    /**
     * Gets price_per_hour
     *
     * @return string|null
     */
    public function getPricePerHour()
    {
        return $this->container['price_per_hour'];
    }

    /**
     * Sets price_per_hour
     *
     * @param string|null $price_per_hour deprecated
     *
     * @return self
     */
    public function setPricePerHour($price_per_hour)
    {
        if (is_null($price_per_hour)) {
            throw new \InvalidArgumentException('non-nullable price_per_hour cannot be null');
        }
        $this->container['price_per_hour'] = $price_per_hour;

        return $this;
    }

    /**
     * Gets price_per_hour_tokens
     *
     * @return \OpenAPI\Client\Model\Tokens|null
     */
    public function getPricePerHourTokens()
    {
        return $this->container['price_per_hour_tokens'];
    }

    /**
     * Sets price_per_hour_tokens
     *
     * @param \OpenAPI\Client\Model\Tokens|null $price_per_hour_tokens price_per_hour_tokens
     *
     * @return self
     */
    public function setPricePerHourTokens($price_per_hour_tokens)
    {
        if (is_null($price_per_hour_tokens)) {
            throw new \InvalidArgumentException('non-nullable price_per_hour_tokens cannot be null');
        }
        $this->container['price_per_hour_tokens'] = $price_per_hour_tokens;

        return $this;
    }

    /**
     * Gets service_type
     *
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param string|null $service_type service_type
     *
     * @return self
     */
    public function setServiceType($service_type)
    {
        if (is_null($service_type)) {
            throw new \InvalidArgumentException('non-nullable service_type cannot be null');
        }
        $this->container['service_type'] = $service_type;

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


