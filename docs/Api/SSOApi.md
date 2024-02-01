# OpenAPI\Client\SSOApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loginMystnodesInit()**](SSOApi.md#loginMystnodesInit) | **GET** /auth/login-mystnodes | LoginMystnodesInit |
| [**loginMystnodesWithGrant()**](SSOApi.md#loginMystnodesWithGrant) | **POST** /auth/login-mystnodes | LoginMystnodesWithGrant |


## `loginMystnodesInit()`

```php
loginMystnodesInit($redirect_url): \OpenAPI\Client\Model\MystnodesSSOLinkResponse
```

LoginMystnodesInit

SSO init endpoint to auth via mystnodes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SSOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redirect_url = 'redirect_url_example'; // string | a redirect to send authorization grant to

try {
    $result = $apiInstance->loginMystnodesInit($redirect_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSOApi->loginMystnodesInit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redirect_url** | **string**| a redirect to send authorization grant to | [optional] |

### Return type

[**\OpenAPI\Client\Model\MystnodesSSOLinkResponse**](../Model/MystnodesSSOLinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginMystnodesWithGrant()`

```php
loginMystnodesWithGrant()
```

LoginMystnodesWithGrant

SSO login using grant provided by mystnodes.com

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SSOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->loginMystnodesWithGrant();
} catch (Exception $e) {
    echo 'Exception when calling SSOApi->loginMystnodesWithGrant: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
