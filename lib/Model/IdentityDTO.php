<?php
/**
 * IdentityDTO
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
 * IdentityDTO Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IdentityDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IdentityDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'balance' => 'string',
        'balance_tokens' => '\OpenAPI\Client\Model\Tokens',
        'channel_address' => 'string',
        'earnings' => 'string',
        'earnings_per_hermes' => 'array<string,\OpenAPI\Client\Model\EarningsDTO>',
        'earnings_tokens' => '\OpenAPI\Client\Model\Tokens',
        'earnings_total' => 'string',
        'earnings_total_tokens' => '\OpenAPI\Client\Model\Tokens',
        'hermes_id' => 'string',
        'id' => 'string',
        'registration_status' => 'string',
        'stake' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'balance' => null,
        'balance_tokens' => null,
        'channel_address' => null,
        'earnings' => null,
        'earnings_per_hermes' => null,
        'earnings_tokens' => null,
        'earnings_total' => null,
        'earnings_total_tokens' => null,
        'hermes_id' => null,
        'id' => null,
        'registration_status' => null,
        'stake' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'balance' => false,
        'balance_tokens' => false,
        'channel_address' => false,
        'earnings' => false,
        'earnings_per_hermes' => false,
        'earnings_tokens' => false,
        'earnings_total' => false,
        'earnings_total_tokens' => false,
        'hermes_id' => false,
        'id' => false,
        'registration_status' => false,
        'stake' => false
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
        'balance' => 'balance',
        'balance_tokens' => 'balance_tokens',
        'channel_address' => 'channel_address',
        'earnings' => 'earnings',
        'earnings_per_hermes' => 'earnings_per_hermes',
        'earnings_tokens' => 'earnings_tokens',
        'earnings_total' => 'earnings_total',
        'earnings_total_tokens' => 'earnings_total_tokens',
        'hermes_id' => 'hermes_id',
        'id' => 'id',
        'registration_status' => 'registration_status',
        'stake' => 'stake'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance' => 'setBalance',
        'balance_tokens' => 'setBalanceTokens',
        'channel_address' => 'setChannelAddress',
        'earnings' => 'setEarnings',
        'earnings_per_hermes' => 'setEarningsPerHermes',
        'earnings_tokens' => 'setEarningsTokens',
        'earnings_total' => 'setEarningsTotal',
        'earnings_total_tokens' => 'setEarningsTotalTokens',
        'hermes_id' => 'setHermesId',
        'id' => 'setId',
        'registration_status' => 'setRegistrationStatus',
        'stake' => 'setStake'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance' => 'getBalance',
        'balance_tokens' => 'getBalanceTokens',
        'channel_address' => 'getChannelAddress',
        'earnings' => 'getEarnings',
        'earnings_per_hermes' => 'getEarningsPerHermes',
        'earnings_tokens' => 'getEarningsTokens',
        'earnings_total' => 'getEarningsTotal',
        'earnings_total_tokens' => 'getEarningsTotalTokens',
        'hermes_id' => 'getHermesId',
        'id' => 'getId',
        'registration_status' => 'getRegistrationStatus',
        'stake' => 'getStake'
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
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('balance_tokens', $data ?? [], null);
        $this->setIfExists('channel_address', $data ?? [], null);
        $this->setIfExists('earnings', $data ?? [], null);
        $this->setIfExists('earnings_per_hermes', $data ?? [], null);
        $this->setIfExists('earnings_tokens', $data ?? [], null);
        $this->setIfExists('earnings_total', $data ?? [], null);
        $this->setIfExists('earnings_total_tokens', $data ?? [], null);
        $this->setIfExists('hermes_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('registration_status', $data ?? [], null);
        $this->setIfExists('stake', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets balance
     *
     * @return string|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param string|null $balance deprecated
     *
     * @return self
     */
    public function setBalance($balance)
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets balance_tokens
     *
     * @return \OpenAPI\Client\Model\Tokens|null
     */
    public function getBalanceTokens()
    {
        return $this->container['balance_tokens'];
    }

    /**
     * Sets balance_tokens
     *
     * @param \OpenAPI\Client\Model\Tokens|null $balance_tokens balance_tokens
     *
     * @return self
     */
    public function setBalanceTokens($balance_tokens)
    {
        if (is_null($balance_tokens)) {
            throw new \InvalidArgumentException('non-nullable balance_tokens cannot be null');
        }
        $this->container['balance_tokens'] = $balance_tokens;

        return $this;
    }

    /**
     * Gets channel_address
     *
     * @return string|null
     */
    public function getChannelAddress()
    {
        return $this->container['channel_address'];
    }

    /**
     * Sets channel_address
     *
     * @param string|null $channel_address channel_address
     *
     * @return self
     */
    public function setChannelAddress($channel_address)
    {
        if (is_null($channel_address)) {
            throw new \InvalidArgumentException('non-nullable channel_address cannot be null');
        }
        $this->container['channel_address'] = $channel_address;

        return $this;
    }

    /**
     * Gets earnings
     *
     * @return string|null
     */
    public function getEarnings()
    {
        return $this->container['earnings'];
    }

    /**
     * Sets earnings
     *
     * @param string|null $earnings earnings
     *
     * @return self
     */
    public function setEarnings($earnings)
    {
        if (is_null($earnings)) {
            throw new \InvalidArgumentException('non-nullable earnings cannot be null');
        }
        $this->container['earnings'] = $earnings;

        return $this;
    }

    /**
     * Gets earnings_per_hermes
     *
     * @return array<string,\OpenAPI\Client\Model\EarningsDTO>|null
     */
    public function getEarningsPerHermes()
    {
        return $this->container['earnings_per_hermes'];
    }

    /**
     * Sets earnings_per_hermes
     *
     * @param array<string,\OpenAPI\Client\Model\EarningsDTO>|null $earnings_per_hermes earnings_per_hermes
     *
     * @return self
     */
    public function setEarningsPerHermes($earnings_per_hermes)
    {
        if (is_null($earnings_per_hermes)) {
            throw new \InvalidArgumentException('non-nullable earnings_per_hermes cannot be null');
        }
        $this->container['earnings_per_hermes'] = $earnings_per_hermes;

        return $this;
    }

    /**
     * Gets earnings_tokens
     *
     * @return \OpenAPI\Client\Model\Tokens|null
     */
    public function getEarningsTokens()
    {
        return $this->container['earnings_tokens'];
    }

    /**
     * Sets earnings_tokens
     *
     * @param \OpenAPI\Client\Model\Tokens|null $earnings_tokens earnings_tokens
     *
     * @return self
     */
    public function setEarningsTokens($earnings_tokens)
    {
        if (is_null($earnings_tokens)) {
            throw new \InvalidArgumentException('non-nullable earnings_tokens cannot be null');
        }
        $this->container['earnings_tokens'] = $earnings_tokens;

        return $this;
    }

    /**
     * Gets earnings_total
     *
     * @return string|null
     */
    public function getEarningsTotal()
    {
        return $this->container['earnings_total'];
    }

    /**
     * Sets earnings_total
     *
     * @param string|null $earnings_total earnings_total
     *
     * @return self
     */
    public function setEarningsTotal($earnings_total)
    {
        if (is_null($earnings_total)) {
            throw new \InvalidArgumentException('non-nullable earnings_total cannot be null');
        }
        $this->container['earnings_total'] = $earnings_total;

        return $this;
    }

    /**
     * Gets earnings_total_tokens
     *
     * @return \OpenAPI\Client\Model\Tokens|null
     */
    public function getEarningsTotalTokens()
    {
        return $this->container['earnings_total_tokens'];
    }

    /**
     * Sets earnings_total_tokens
     *
     * @param \OpenAPI\Client\Model\Tokens|null $earnings_total_tokens earnings_total_tokens
     *
     * @return self
     */
    public function setEarningsTotalTokens($earnings_total_tokens)
    {
        if (is_null($earnings_total_tokens)) {
            throw new \InvalidArgumentException('non-nullable earnings_total_tokens cannot be null');
        }
        $this->container['earnings_total_tokens'] = $earnings_total_tokens;

        return $this;
    }

    /**
     * Gets hermes_id
     *
     * @return string|null
     */
    public function getHermesId()
    {
        return $this->container['hermes_id'];
    }

    /**
     * Sets hermes_id
     *
     * @param string|null $hermes_id hermes_id
     *
     * @return self
     */
    public function setHermesId($hermes_id)
    {
        if (is_null($hermes_id)) {
            throw new \InvalidArgumentException('non-nullable hermes_id cannot be null');
        }
        $this->container['hermes_id'] = $hermes_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id identity in Ethereum address format
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets registration_status
     *
     * @return string|null
     */
    public function getRegistrationStatus()
    {
        return $this->container['registration_status'];
    }

    /**
     * Sets registration_status
     *
     * @param string|null $registration_status registration_status
     *
     * @return self
     */
    public function setRegistrationStatus($registration_status)
    {
        if (is_null($registration_status)) {
            throw new \InvalidArgumentException('non-nullable registration_status cannot be null');
        }
        $this->container['registration_status'] = $registration_status;

        return $this;
    }

    /**
     * Gets stake
     *
     * @return string|null
     */
    public function getStake()
    {
        return $this->container['stake'];
    }

    /**
     * Sets stake
     *
     * @param string|null $stake stake
     *
     * @return self
     */
    public function setStake($stake)
    {
        if (is_null($stake)) {
            throw new \InvalidArgumentException('non-nullable stake cannot be null');
        }
        $this->container['stake'] = $stake;

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


