# OpenAPI\Client\DefaultApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accessPolicies()**](DefaultApi.md#accessPolicies) | **GET** /access-policies | Returns access policies |
| [**affiliatorTokenReward()**](DefaultApi.md#affiliatorTokenReward) | **POST** /affiliator/token/{token}/reward | Returns the amount of reward for a token (affiliator) |
| [**chains()**](DefaultApi.md#chains) | **GET** /transactor/chains-summary | Returns available chain map |
| [**combinedFeesResponse()**](DefaultApi.md#combinedFeesResponse) | **GET** /v2/transactor/fees | Returns fees |
| [**connectivityStatus()**](DefaultApi.md#connectivityStatus) | **GET** /sessions-connectivity-status | Returns session connectivity status |
| [**eligibility()**](DefaultApi.md#eligibility) | **GET** /transactor/identities/{id}/eligibility | Checks if given id is eligible for free registration |
| [**feesDTO()**](DefaultApi.md#feesDTO) | **GET** /transactor/fees | Returns fees |
| [**providerEligibility()**](DefaultApi.md#providerEligibility) | **GET** /identities/provider/eligibility | Checks if provider is eligible for free registration |
| [**reward()**](DefaultApi.md#reward) | **POST** /transactor/token/{token}/reward | Returns the amount of reward for a token |
| [**settleAsync()**](DefaultApi.md#settleAsync) | **POST** /transactor/settle/async | forces the settlement of promises for the given provider and hermes |
| [**settleSync()**](DefaultApi.md#settleSync) | **POST** /transactor/settle/sync | Forces the settlement of promises for the given provider and hermes |
| [**settlementList()**](DefaultApi.md#settlementList) | **GET** /settle/history | Returns settlement history |
| [**stakeIncreaseAsync()**](DefaultApi.md#stakeIncreaseAsync) | **POST** /transactor/stake/increase/async | forces the settlement with stake increase of promises for the given provider and hermes. |
| [**stakeIncreaseSync()**](DefaultApi.md#stakeIncreaseSync) | **POST** /transactor/stake/increase/sync | Forces the settlement with stake increase of promises for the given provider and hermes. |
| [**withdraw()**](DefaultApi.md#withdraw) | **POST** /transactor/settle/withdraw | Asks to perform withdrawal to l1. |


## `accessPolicies()`

```php
accessPolicies(): \OpenAPI\Client\Model\AccessPolicies
```

Returns access policies

Returns list of access policies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accessPolicies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accessPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AccessPolicies**](../Model/AccessPolicies.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `affiliatorTokenReward()`

```php
affiliatorTokenReward($token): \OpenAPI\Client\Model\TokenRewardAmount
```

Returns the amount of reward for a token (affiliator)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | Token for which to lookup the reward

try {
    $result = $apiInstance->affiliatorTokenReward($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->affiliatorTokenReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| Token for which to lookup the reward | |

### Return type

[**\OpenAPI\Client\Model\TokenRewardAmount**](../Model/TokenRewardAmount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chains()`

```php
chains(): \OpenAPI\Client\Model\ChainSummary
```

Returns available chain map

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->chains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ChainSummary**](../Model/ChainSummary.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `combinedFeesResponse()`

```php
combinedFeesResponse(): \OpenAPI\Client\Model\CombinedFeesResponse
```

Returns fees

Returns fees applied by Transactor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->combinedFeesResponse();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->combinedFeesResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CombinedFeesResponse**](../Model/CombinedFeesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectivityStatus()`

```php
connectivityStatus(): \OpenAPI\Client\Model\ConnectivityStatus
```

Returns session connectivity status

Returns list of session connectivity status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->connectivityStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->connectivityStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ConnectivityStatus**](../Model/ConnectivityStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eligibility()`

```php
eligibility($id): \OpenAPI\Client\Model\EligibilityResponse
```

Checks if given id is eligible for free registration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identity address to register

try {
    $result = $apiInstance->eligibility($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eligibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identity address to register | |

### Return type

[**\OpenAPI\Client\Model\EligibilityResponse**](../Model/EligibilityResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feesDTO()`

```php
feesDTO(): \OpenAPI\Client\Model\FeesDTO
```

Returns fees

Returns fees applied by Transactor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->feesDTO();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->feesDTO: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FeesDTO**](../Model/FeesDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `providerEligibility()`

```php
providerEligibility(): \OpenAPI\Client\Model\EligibilityResponse
```

Checks if provider is eligible for free registration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->providerEligibility();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->providerEligibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\EligibilityResponse**](../Model/EligibilityResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reward()`

```php
reward($token): \OpenAPI\Client\Model\TokenRewardAmount
```

Returns the amount of reward for a token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | Token for which to lookup the reward

try {
    $result = $apiInstance->reward($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| Token for which to lookup the reward | |

### Return type

[**\OpenAPI\Client\Model\TokenRewardAmount**](../Model/TokenRewardAmount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settleAsync()`

```php
settleAsync($body)
```

forces the settlement of promises for the given provider and hermes

Forces a settlement for the hermes promises. Does not wait for completion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\SettleRequestDTO(); // \OpenAPI\Client\Model\SettleRequestDTO | Settle request

try {
    $apiInstance->settleAsync($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->settleAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SettleRequestDTO**](../Model/SettleRequestDTO.md)| Settle request | [optional] |

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

## `settleSync()`

```php
settleSync($body)
```

Forces the settlement of promises for the given provider and hermes

Forces a settlement for the hermes promises and blocks until the settlement is complete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\SettleRequestDTO(); // \OpenAPI\Client\Model\SettleRequestDTO | Settle request

try {
    $apiInstance->settleSync($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->settleSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SettleRequestDTO**](../Model/SettleRequestDTO.md)| Settle request | [optional] |

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

## `settlementList()`

```php
settlementList($page_size, $page, $date_from, $date_to, $provider_id, $hermes_id, $types): \OpenAPI\Client\Model\SettlementListResponse
```

Returns settlement history

Returns settlement history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_size = 50; // int | Number of items per page.
$page = 1; // int | Page to filter the items by.
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter the settlements from this date. Formatted in RFC3339 e.g. 2020-07-01.
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter the settlements until this date Formatted in RFC3339 e.g. 2020-07-30.
$provider_id = 'provider_id_example'; // string | Provider identity to filter the sessions by.
$hermes_id = 'hermes_id_example'; // string | Hermes ID to filter the sessions by.
$types = array('types_example'); // string[] | Settlement type to filter the sessions by. \"settlement\" or \"withdrawal\"

try {
    $result = $apiInstance->settlementList($page_size, $page, $date_from, $date_to, $provider_id, $hermes_id, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->settlementList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_size** | **int**| Number of items per page. | [optional] [default to 50] |
| **page** | **int**| Page to filter the items by. | [optional] [default to 1] |
| **date_from** | **\DateTime**| Filter the settlements from this date. Formatted in RFC3339 e.g. 2020-07-01. | [optional] |
| **date_to** | **\DateTime**| Filter the settlements until this date Formatted in RFC3339 e.g. 2020-07-30. | [optional] |
| **provider_id** | **string**| Provider identity to filter the sessions by. | [optional] |
| **hermes_id** | **string**| Hermes ID to filter the sessions by. | [optional] |
| **types** | [**string[]**](../Model/string.md)| Settlement type to filter the sessions by. \&quot;settlement\&quot; or \&quot;withdrawal\&quot; | [optional] |

### Return type

[**\OpenAPI\Client\Model\SettlementListResponse**](../Model/SettlementListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stakeIncreaseAsync()`

```php
stakeIncreaseAsync($body)
```

forces the settlement with stake increase of promises for the given provider and hermes.

Forces a settlement with stake increase for the hermes promises and does not block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\SettleRequestDTO(); // \OpenAPI\Client\Model\SettleRequestDTO | settle request body

try {
    $apiInstance->stakeIncreaseAsync($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stakeIncreaseAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SettleRequestDTO**](../Model/SettleRequestDTO.md)| settle request body | [optional] |

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

## `stakeIncreaseSync()`

```php
stakeIncreaseSync($body)
```

Forces the settlement with stake increase of promises for the given provider and hermes.

Forces a settlement with stake increase for the hermes promises and blocks until the settlement is complete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\SettleRequestDTO(); // \OpenAPI\Client\Model\SettleRequestDTO | Settle request

try {
    $apiInstance->stakeIncreaseSync($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stakeIncreaseSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SettleRequestDTO**](../Model/SettleRequestDTO.md)| Settle request | [optional] |

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

## `withdraw()`

```php
withdraw($body)
```

Asks to perform withdrawal to l1.

Asks to perform withdrawal to l1.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\WithdrawRequestDTO(); // \OpenAPI\Client\Model\WithdrawRequestDTO | withdraw request body

try {
    $apiInstance->withdraw($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->withdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\WithdrawRequestDTO**](../Model/WithdrawRequestDTO.md)| withdraw request body | [optional] |

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
