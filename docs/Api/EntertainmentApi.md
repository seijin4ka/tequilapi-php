# OpenAPI\Client\EntertainmentApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**estimate()**](EntertainmentApi.md#estimate) | **GET** /entertainment | Estimate entertainment durations/data cap for the MYST amount specified. |


## `estimate()`

```php
estimate($amount): \OpenAPI\Client\Model\EntertainmentEstimateResponse
```

Estimate entertainment durations/data cap for the MYST amount specified.

Estimate entertainment durations/data cap for the MYST amount specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EntertainmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amount = 56; // int | Amount of MYST to give entertainment estimates for.

try {
    $result = $apiInstance->estimate($amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntertainmentApi->estimate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **amount** | **int**| Amount of MYST to give entertainment estimates for. | |

### Return type

[**\OpenAPI\Client\Model\EntertainmentEstimateResponse**](../Model/EntertainmentEstimateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
