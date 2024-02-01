# OpenAPI\Client\NATApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**nATTypeDTO()**](NATApi.md#nATTypeDTO) | **GET** /nat/type | Shows NAT type in terms of traversal capabilities. |


## `nATTypeDTO()`

```php
nATTypeDTO(): \OpenAPI\Client\Model\NATTypeDTO
```

Shows NAT type in terms of traversal capabilities.

Returns NAT type. May produce invalid result while VPN connection is established

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NATApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->nATTypeDTO();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NATApi->nATTypeDTO: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NATTypeDTO**](../Model/NATTypeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
