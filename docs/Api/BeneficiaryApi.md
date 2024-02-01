# OpenAPI\Client\BeneficiaryApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**address()**](BeneficiaryApi.md#address) | **GET** /identities/{id}/beneficiary | Provide identity beneficiary address |


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



$apiInstance = new OpenAPI\Client\Api\BeneficiaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | hex address of identity

try {
    $result = $apiInstance->address($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiaryApi->address: ', $e->getMessage(), PHP_EOL;
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
