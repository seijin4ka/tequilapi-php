# OpenAPI\Client\DecreaseApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**stake()**](DecreaseApi.md#stake) | **POST** /transactor/stake/decrease | Decreases stake |


## `stake()`

```php
stake($body)
```

Decreases stake

Decreases stake on eth blockchain via the mysterium transactor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecreaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DecreaseStakeRequest(); // \OpenAPI\Client\Model\DecreaseStakeRequest | decrease stake request

try {
    $apiInstance->stake($body);
} catch (Exception $e) {
    echo 'Exception when calling DecreaseApi->stake: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DecreaseStakeRequest**](../Model/DecreaseStakeRequest.md)| decrease stake request | [optional] |

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
