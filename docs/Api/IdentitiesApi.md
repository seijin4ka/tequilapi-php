# OpenAPI\Client\IdentitiesApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**importIdentity()**](IdentitiesApi.md#importIdentity) | **POST** /identities-import | Imports a given identity. |


## `importIdentity()`

```php
importIdentity($body): \OpenAPI\Client\Model\IdentityRefDTO
```

Imports a given identity.

Imports a given identity returning it is a blob of text which can later be used to import it back.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\IdentityImportRequest(); // \OpenAPI\Client\Model\IdentityImportRequest | Parameter in body used to import an identity.

try {
    $result = $apiInstance->importIdentity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->importIdentity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\IdentityImportRequest**](../Model/IdentityImportRequest.md)| Parameter in body used to import an identity. | [optional] |

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
