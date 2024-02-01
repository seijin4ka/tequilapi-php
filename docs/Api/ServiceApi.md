# OpenAPI\Client\ServiceApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**serviceGet()**](ServiceApi.md#serviceGet) | **GET** /services/:id | Information about service |
| [**serviceListResponse()**](ServiceApi.md#serviceListResponse) | **GET** /services | List of services |
| [**serviceStart()**](ServiceApi.md#serviceStart) | **POST** /services | Starts service |
| [**serviceStop()**](ServiceApi.md#serviceStop) | **DELETE** /services/:id | Stops service |


## `serviceGet()`

```php
serviceGet(): \OpenAPI\Client\Model\ServiceInfoDTO
```

Information about service

ServiceGet provides info for requested service on the node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->serviceGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ServiceInfoDTO**](../Model/ServiceInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceListResponse()`

```php
serviceListResponse(): \OpenAPI\Client\Model\ServiceInfoDTO[]
```

List of services

ServiceList provides a list of running services on the node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->serviceListResponse();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceListResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ServiceInfoDTO[]**](../Model/ServiceInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceStart()`

```php
serviceStart($body): \OpenAPI\Client\Model\ServiceInfoDTO
```

Starts service

Provider starts serving new service to consumers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\ServiceStartRequestDTO(); // \OpenAPI\Client\Model\ServiceStartRequestDTO | Parameters in body (providerID) required for starting new service

try {
    $result = $apiInstance->serviceStart($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ServiceStartRequestDTO**](../Model/ServiceStartRequestDTO.md)| Parameters in body (providerID) required for starting new service | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceInfoDTO**](../Model/ServiceInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceStop()`

```php
serviceStop()
```

Stops service

Initiates service stop

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->serviceStop();
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceStop: ', $e->getMessage(), PHP_EOL;
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
