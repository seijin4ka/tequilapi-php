# OpenAPI\Client\IdentityApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**address()**](IdentityApi.md#address) | **GET** /identities/{id}/beneficiary | Provide identity beneficiary address |
| [**balance()**](IdentityApi.md#balance) | **PUT** /identities/{id}/balance/refresh | Refresh balance of given identity |
| [**createIdentity()**](IdentityApi.md#createIdentity) | **POST** /identities | Creates new identity |
| [**currentIdentity()**](IdentityApi.md#currentIdentity) | **PUT** /identities/current | Returns my current identity |
| [**getIdentity()**](IdentityApi.md#getIdentity) | **GET** /identities/{id} | Get identity |
| [**identityRegistration()**](IdentityApi.md#identityRegistration) | **GET** /identities/{id}/registration | Provide identity registration status |
| [**listIdentities()**](IdentityApi.md#listIdentities) | **GET** /identities | Returns identities |
| [**registerIdentity()**](IdentityApi.md#registerIdentity) | **POST** /identities/{id}/register | Registers identity |
| [**unlockIdentity()**](IdentityApi.md#unlockIdentity) | **PUT** /identities/{id}/unlock | Unlocks identity |


## `address()`

```php
address($id): \OpenAPI\Client\Model\IdentityBeneficiaryResponseDTO
```

Provide identity beneficiary address

Provides beneficiary address for given identity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | hex address of identity

try {
    $result = $apiInstance->address($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->address: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hex address of identity | |

### Return type

[**\OpenAPI\Client\Model\IdentityBeneficiaryResponseDTO**](../Model/IdentityBeneficiaryResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `balance()`

```php
balance($id): \OpenAPI\Client\Model\BalanceDTO
```

Refresh balance of given identity

Refresh balance of given identity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | hex address of identity

try {
    $result = $apiInstance->balance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->balance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hex address of identity | |

### Return type

[**\OpenAPI\Client\Model\BalanceDTO**](../Model/BalanceDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIdentity()`

```php
createIdentity($body): \OpenAPI\Client\Model\IdentityRefDTO
```

Creates new identity

Creates identity and stores in keystore encrypted with passphrase

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\IdentityCreateRequestDTO(); // \OpenAPI\Client\Model\IdentityCreateRequestDTO | Parameter in body (passphrase) required for creating new identity

try {
    $result = $apiInstance->createIdentity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->createIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\IdentityCreateRequestDTO**](../Model/IdentityCreateRequestDTO.md)| Parameter in body (passphrase) required for creating new identity | [optional] |

### Return type

[**\OpenAPI\Client\Model\IdentityRefDTO**](../Model/IdentityRefDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `currentIdentity()`

```php
currentIdentity($body): \OpenAPI\Client\Model\IdentityRefDTO
```

Returns my current identity

Tries to retrieve the last used identity, the first identity, or creates and returns a new identity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\IdentityCurrentRequestDTO(); // \OpenAPI\Client\Model\IdentityCurrentRequestDTO | Parameter in body (passphrase) required for creating new identity

try {
    $result = $apiInstance->currentIdentity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->currentIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\IdentityCurrentRequestDTO**](../Model/IdentityCurrentRequestDTO.md)| Parameter in body (passphrase) required for creating new identity | [optional] |

### Return type

[**\OpenAPI\Client\Model\IdentityRefDTO**](../Model/IdentityRefDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIdentity()`

```php
getIdentity($id): \OpenAPI\Client\Model\IdentityRefDTO
```

Get identity

Provide identity details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | hex address of identity

try {
    $result = $apiInstance->getIdentity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->getIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hex address of identity | |

### Return type

[**\OpenAPI\Client\Model\IdentityRefDTO**](../Model/IdentityRefDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityRegistration()`

```php
identityRegistration($id): \OpenAPI\Client\Model\IdentityRegistrationResponseDTO
```

Provide identity registration status

Provides registration status for given identity, if identity is not registered - provides additional data required for identity registration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | hex address of identity

try {
    $result = $apiInstance->identityRegistration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->identityRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| hex address of identity | |

### Return type

[**\OpenAPI\Client\Model\IdentityRegistrationResponseDTO**](../Model/IdentityRegistrationResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIdentities()`

```php
listIdentities(): \OpenAPI\Client\Model\ListIdentitiesResponse
```

Returns identities

Returns list of identities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listIdentities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->listIdentities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ListIdentitiesResponse**](../Model/ListIdentitiesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerIdentity()`

```php
registerIdentity($id, $body)
```

Registers identity

Registers identity on Mysterium Network smart contracts using Transactor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identity address to register
$body = new \OpenAPI\Client\Model\IdentityRegisterRequestDTO(); // \OpenAPI\Client\Model\IdentityRegisterRequestDTO | all body parameters a optional

try {
    $apiInstance->registerIdentity($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->registerIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identity address to register | |
| **body** | [**\OpenAPI\Client\Model\IdentityRegisterRequestDTO**](../Model/IdentityRegisterRequestDTO.md)| all body parameters a optional | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlockIdentity()`

```php
unlockIdentity($id, $body)
```

Unlocks identity

Uses passphrase to decrypt identity stored in keystore

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identity stored in keystore
$body = new \OpenAPI\Client\Model\IdentityUnlockRequestDTO(); // \OpenAPI\Client\Model\IdentityUnlockRequestDTO | Parameter in body (passphrase) required for unlocking identity

try {
    $apiInstance->unlockIdentity($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->unlockIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identity stored in keystore | |
| **body** | [**\OpenAPI\Client\Model\IdentityUnlockRequestDTO**](../Model/IdentityUnlockRequestDTO.md)| Parameter in body (passphrase) required for unlocking identity | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
