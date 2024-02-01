# OpenAPI\Client\ExportApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**identity()**](ExportApi.md#identity) | **POST** /export | Exports a given identity |


## `identity()`

```php
identity($body): \OpenAPI\Client\Model\IdentityExportResponseDTO
```

Exports a given identity

Creates identity and stores in keystore encrypted with passphrase

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\IdentityExportRequestDTO(); // \OpenAPI\Client\Model\IdentityExportRequestDTO | Parameter in body (passphrase) required for creating new identity

try {
    $result = $apiInstance->identity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->identity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\IdentityExportRequestDTO**](../Model/IdentityExportRequestDTO.md)| Parameter in body (passphrase) required for creating new identity | [optional] |

### Return type

[**\OpenAPI\Client\Model\IdentityExportResponseDTO**](../Model/IdentityExportResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
