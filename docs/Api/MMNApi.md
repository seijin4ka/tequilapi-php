# OpenAPI\Client\MMNApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clearApiKey()**](MMNApi.md#clearApiKey) | **DELETE** /mmn/api-key | Clears MMN&#39;s API key from config |
| [**getApiKey()**](MMNApi.md#getApiKey) | **GET** /mmn/report | returns MMN&#39;s API key |
| [**getClaimLink()**](MMNApi.md#getClaimLink) | **GET** /mmn/claim-link | Generate claim link |
| [**getOnboardingLink()**](MMNApi.md#getOnboardingLink) | **GET** /mmn/onboarding | Generate onboarding link |
| [**setApiKey()**](MMNApi.md#setApiKey) | **POST** /mmn/api-key | sets MMN&#39;s API key |
| [**verifyGrant()**](MMNApi.md#verifyGrant) | **POST** /mmn/onboarding | verify grant for onboarding |


## `clearApiKey()`

```php
clearApiKey()
```

Clears MMN's API key from config

Clears MMN's API key from config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MMNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->clearApiKey();
} catch (Exception $e) {
    echo 'Exception when calling MMNApi->clearApiKey: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKey()`

```php
getApiKey(): \OpenAPI\Client\Model\MMNApiKeyRequest
```

returns MMN's API key

returns MMN's API key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MMNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getApiKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MMNApi->getApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MMNApiKeyRequest**](../Model/MMNApiKeyRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaimLink()`

```php
getClaimLink(): \OpenAPI\Client\Model\MMNLinkRedirectResponse
```

Generate claim link

Generates claim link to claim Node on mystnodes.com with a click

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MMNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getClaimLink();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MMNApi->getClaimLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MMNLinkRedirectResponse**](../Model/MMNLinkRedirectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOnboardingLink()`

```php
getOnboardingLink(): \OpenAPI\Client\Model\MMNLinkRedirectResponse
```

Generate onboarding link

Generates onboarding link for one click onboarding

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MMNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOnboardingLink();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MMNApi->getOnboardingLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MMNLinkRedirectResponse**](../Model/MMNLinkRedirectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setApiKey()`

```php
setApiKey($body)
```

sets MMN's API key

sets MMN's API key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MMNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\MMNApiKeyRequest(); // \OpenAPI\Client\Model\MMNApiKeyRequest | api_key field

try {
    $apiInstance->setApiKey($body);
} catch (Exception $e) {
    echo 'Exception when calling MMNApi->setApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\MMNApiKeyRequest**](../Model/MMNApiKeyRequest.md)| api_key field | [optional] |

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

## `verifyGrant()`

```php
verifyGrant(): \OpenAPI\Client\Model\MMNGrantVerificationResponse
```

verify grant for onboarding

verify grant for onboarding

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MMNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->verifyGrant();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MMNApi->verifyGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MMNGrantVerificationResponse**](../Model/MMNGrantVerificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
