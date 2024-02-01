# OpenAPI\Client\TermsApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTerms()**](TermsApi.md#getTerms) | **GET** /terms | Get terms |
| [**updateTerms()**](TermsApi.md#updateTerms) | **POST** /terms | Update terms agreement |


## `getTerms()`

```php
getTerms(): \OpenAPI\Client\Model\TermsResponse
```

Get terms

Return an object with the current terms config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTerms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->getTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TermsResponse**](../Model/TermsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTerms()`

```php
updateTerms($body)
```

Update terms agreement

Takes the given data and tries to update terms agreement config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\TermsRequest(); // \OpenAPI\Client\Model\TermsRequest | Required data to update terms

try {
    $apiInstance->updateTerms($body);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->updateTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\TermsRequest**](../Model/TermsRequest.md)| Required data to update terms | [optional] |

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
