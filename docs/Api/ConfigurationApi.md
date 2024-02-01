# OpenAPI\Client\ConfigurationApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getConfig()**](ConfigurationApi.md#getConfig) | **GET** /config | Returns current configuration values |
| [**getDefaultConfig()**](ConfigurationApi.md#getDefaultConfig) | **GET** /config/default | Returns default configuration |
| [**getUserConfig()**](ConfigurationApi.md#getUserConfig) | **GET** /config/user | Returns current user configuration |
| [**serUserConfig()**](ConfigurationApi.md#serUserConfig) | **POST** /config/user | Sets and returns user configuration |


## `getConfig()`

```php
getConfig(): \OpenAPI\Client\Model\ConfigPayload
```

Returns current configuration values

Returns default configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ConfigPayload**](../Model/ConfigPayload.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultConfig()`

```php
getDefaultConfig(): \OpenAPI\Client\Model\ConfigPayload
```

Returns default configuration

Returns default configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getDefaultConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getDefaultConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ConfigPayload**](../Model/ConfigPayload.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserConfig()`

```php
getUserConfig(): \OpenAPI\Client\Model\ConfigPayload
```

Returns current user configuration

Returns current user configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getUserConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getUserConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ConfigPayload**](../Model/ConfigPayload.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serUserConfig()`

```php
serUserConfig($body): \OpenAPI\Client\Model\ConfigPayload
```

Sets and returns user configuration

For keys present in the payload, it will set or remove the user config values (if the key is null). Changes are persisted to the config file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\ConfigPayload(); // \OpenAPI\Client\Model\ConfigPayload | configuration keys/values

try {
    $result = $apiInstance->serUserConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->serUserConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ConfigPayload**](../Model/ConfigPayload.md)| configuration keys/values | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConfigPayload**](../Model/ConfigPayload.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
