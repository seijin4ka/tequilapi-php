# OpenAPI\Client\ExchangeApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exchangeMyst()**](ExchangeApi.md#exchangeMyst) | **GET** /exchange/myst/{currency} | Returns the myst price in the given currency |


## `exchangeMyst()`

```php
exchangeMyst($currency): \OpenAPI\Client\Model\CurrencyExchangeDTO
```

Returns the myst price in the given currency

Returns the myst price in the given currency (dai is deprecated)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = 'currency_example'; // string | Currency to which MYST is converted

try {
    $result = $apiInstance->exchangeMyst($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeApi->exchangeMyst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | **string**| Currency to which MYST is converted | |

### Return type

[**\OpenAPI\Client\Model\CurrencyExchangeDTO**](../Model/CurrencyExchangeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
