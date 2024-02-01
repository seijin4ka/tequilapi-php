# OpenAPI\Client\ConnectionApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**connectionCancel()**](ConnectionApi.md#connectionCancel) | **DELETE** /connection | Stops connection |
| [**connectionCreate()**](ConnectionApi.md#connectionCreate) | **PUT** /connection | Starts new connection |
| [**connectionStatistics()**](ConnectionApi.md#connectionStatistics) | **GET** /connection/statistics | Returns connection statistics |
| [**connectionStatus()**](ConnectionApi.md#connectionStatus) | **GET** /connection | Returns connection status |
| [**connectionTraffic()**](ConnectionApi.md#connectionTraffic) | **GET** /connection/traffic | Returns connection traffic information |
| [**getConnectionIP()**](ConnectionApi.md#getConnectionIP) | **GET** /connection/ip | Returns IP address |
| [**getConnectionLocation()**](ConnectionApi.md#getConnectionLocation) | **GET** /connection/location | Returns connection location |
| [**getProxyIP()**](ConnectionApi.md#getProxyIP) | **GET** /connection/proxy/ip | Returns IP address |
| [**getProxyLocation()**](ConnectionApi.md#getProxyLocation) | **GET** /connection/proxy/location | Returns proxy connection location |


## `connectionCancel()`

```php
connectionCancel()
```

Stops connection

Stops current connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->connectionCancel();
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->connectionCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectionCreate()`

```php
connectionCreate($body): \OpenAPI\Client\Model\ConnectionInfoDTO
```

Starts new connection

Consumer opens connection to provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\ConnectionCreateRequestDTO(); // \OpenAPI\Client\Model\ConnectionCreateRequestDTO | Parameters in body (consumer_id, provider_id, service_type) required for creating new connection

try {
    $result = $apiInstance->connectionCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->connectionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ConnectionCreateRequestDTO**](../Model/ConnectionCreateRequestDTO.md)| Parameters in body (consumer_id, provider_id, service_type) required for creating new connection | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConnectionInfoDTO**](../Model/ConnectionInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectionStatistics()`

```php
connectionStatistics(): \OpenAPI\Client\Model\ConnectionStatisticsDTO
```

Returns connection statistics

Returns statistics about current connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->connectionStatistics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->connectionStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ConnectionStatisticsDTO**](../Model/ConnectionStatisticsDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectionStatus()`

```php
connectionStatus(): \OpenAPI\Client\Model\ConnectionInfoDTO
```

Returns connection status

Returns status of current connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->connectionStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->connectionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ConnectionInfoDTO**](../Model/ConnectionInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectionTraffic()`

```php
connectionTraffic(): \OpenAPI\Client\Model\ConnectionTrafficDTO
```

Returns connection traffic information

Returns traffic information about requested connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->connectionTraffic();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->connectionTraffic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ConnectionTrafficDTO**](../Model/ConnectionTrafficDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectionIP()`

```php
getConnectionIP(): \OpenAPI\Client\Model\IPDTO
```

Returns IP address

Returns current public IP address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getConnectionIP();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->getConnectionIP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\IPDTO**](../Model/IPDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectionLocation()`

```php
getConnectionLocation(): \OpenAPI\Client\Model\LocationDTO
```

Returns connection location

Returns connection locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getConnectionLocation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->getConnectionLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\LocationDTO**](../Model/LocationDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProxyIP()`

```php
getProxyIP(): \OpenAPI\Client\Model\IPDTO
```

Returns IP address

Returns proxy public IP address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getProxyIP();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->getProxyIP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\IPDTO**](../Model/IPDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProxyLocation()`

```php
getProxyLocation(): \OpenAPI\Client\Model\LocationDTO
```

Returns proxy connection location

Returns proxy connection locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getProxyLocation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->getProxyLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\LocationDTO**](../Model/LocationDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
