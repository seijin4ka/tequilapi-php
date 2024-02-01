# OpenAPI\Client\NodeApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLatestRelease()**](NodeApi.md#getLatestRelease) | **GET** /node/latest-release | Latest Node release information |


## `getLatestRelease()`

```php
getLatestRelease(): \OpenAPI\Client\Model\LatestReleaseResponse
```

Latest Node release information

Checks for latest Node release package and retrieves its information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLatestRelease();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->getLatestRelease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\LatestReleaseResponse**](../Model/LatestReleaseResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
