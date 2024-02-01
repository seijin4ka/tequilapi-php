# OpenAPI\Client\ProviderApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProviderActivityStats()**](ProviderApi.md#getProviderActivityStats) | **GET** /node/provider/activity-stats | Provides Node activity stats |
| [**getProviderConsumersCount()**](ProviderApi.md#getProviderConsumersCount) | **GET** /node/provider/consumers-count | Provides Node consumers number served during a period of time |
| [**getProviderEarningsSeries()**](ProviderApi.md#getProviderEarningsSeries) | **GET** /node/provider/series/earnings | Provides Node  time series metrics of earnings during a period of time |
| [**getProviderQuality()**](ProviderApi.md#getProviderQuality) | **GET** /node/provider/quality | Provides Node quality |
| [**getProviderServiceEarnings()**](ProviderApi.md#getProviderServiceEarnings) | **GET** /node/provider/service-earnings | Provides Node earnings per service and total earnings in the all network |
| [**getProviderSessions()**](ProviderApi.md#getProviderSessions) | **GET** /node/provider/sessions | Provides Node sessions data during a period of time |
| [**getProviderSessionsCount()**](ProviderApi.md#getProviderSessionsCount) | **GET** /node/provider/sessions-count | Provides Node sessions number during a period of time |
| [**getProviderSessionsSeries()**](ProviderApi.md#getProviderSessionsSeries) | **GET** /node/provider/series/sessions | Provides Node data series metrics of sessions started during a period of time |
| [**getProviderTransferredData()**](ProviderApi.md#getProviderTransferredData) | **GET** /node/provider/transferred-data | Provides total traffic served by the provider during a period of time |
| [**getProviderTransferredDataSeries()**](ProviderApi.md#getProviderTransferredDataSeries) | **GET** /node/provider/series/data | Provides Node data series metrics of transferred bytes |
| [**monitoringAgentStatuses()**](ProviderApi.md#monitoringAgentStatuses) | **GET** /node/monitoring-agent-statuses | Provides Node connectivity statuses from monitoring agent |
| [**nodeStatus()**](ProviderApi.md#nodeStatus) | **GET** /node/monitoring-status | Provides Node proposal status |


## `getProviderActivityStats()`

```php
getProviderActivityStats(): \OpenAPI\Client\Model\ActivityStatsResponse
```

Provides Node activity stats

Node activity stats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getProviderActivityStats();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->getProviderActivityStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ActivityStatsResponse**](../Model/ActivityStatsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProviderConsumersCount()`

```php
getProviderConsumersCount($range): \OpenAPI\Client\Model\ProviderConsumersCountResponse
```

Provides Node consumers number served during a period of time

Node unique consumers count served during a period of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$range = 'range_example'; // string | period of time (\"1d\", \"7d\", \"30d\")

try {
    $result = $apiInstance->getProviderConsumersCount($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->getProviderConsumersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **range** | **string**| period of time (\&quot;1d\&quot;, \&quot;7d\&quot;, \&quot;30d\&quot;) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProviderConsumersCountResponse**](../Model/ProviderConsumersCountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProviderEarningsSeries()`

```php
getProviderEarningsSeries($range): \OpenAPI\Client\Model\ProviderEarningsSeriesResponse
```

Provides Node  time series metrics of earnings during a period of time

Node time series metrics of earnings during a period of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$range = 'range_example'; // string | period of time (\"1d\", \"7d\", \"30d\")

try {
    $result = $apiInstance->getProviderEarningsSeries($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->getProviderEarningsSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **range** | **string**| period of time (\&quot;1d\&quot;, \&quot;7d\&quot;, \&quot;30d\&quot;) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProviderEarningsSeriesResponse**](../Model/ProviderEarningsSeriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProviderQuality()`

```php
getProviderQuality(): \OpenAPI\Client\Model\QualityInfoResponse
```

Provides Node quality

Node connectivity quality

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getProviderQuality();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->getProviderQuality: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\QualityInfoResponse**](../Model/QualityInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProviderServiceEarnings()`

```php
getProviderServiceEarnings(): \OpenAPI\Client\Model\EarningsPerServiceResponse
```

Provides Node earnings per service and total earnings in the all network

Node earnings per service and total earnings in the all network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getProviderServiceEarnings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->getProviderServiceEarnings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\EarningsPerServiceResponse**](../Model/EarningsPerServiceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProviderSessions()`

```php
getProviderSessions($range): \OpenAPI\Client\Model\ProviderSessionsResponse
```

Provides Node sessions data during a period of time

Node sessions metrics during a period of time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$range = 'range_example'; // string | period of time (\"1d\", \"7d\", \"30d\")

try {
    $result = $apiInstance->getProviderSessions($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->getProviderSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **range** | **string**| period of time (\&quot;1d\&quot;, \&quot;7d\&quot;, \&quot;30d\&quot;) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProviderSessionsResponse**](../Model/ProviderSessionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProviderSessionsCount()`

```php
getProviderSessionsCount($range): \OpenAPI\Client\Model\ProviderSessionsCountResponse
```

Provides Node sessions number during a period of time

Node sessions count during a period of time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$range = 'range_example'; // string | period of time (\"1d\", \"7d\", \"30d\")

try {
    $result = $apiInstance->getProviderSessionsCount($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->getProviderSessionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **range** | **string**| period of time (\&quot;1d\&quot;, \&quot;7d\&quot;, \&quot;30d\&quot;) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProviderSessionsCountResponse**](../Model/ProviderSessionsCountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProviderSessionsSeries()`

```php
getProviderSessionsSeries($range): \OpenAPI\Client\Model\ProviderSessionsSeriesResponse
```

Provides Node data series metrics of sessions started during a period of time

Node time series metrics of sessions started during a period of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$range = 'range_example'; // string | period of time (\"1d\", \"7d\", \"30d\")

try {
    $result = $apiInstance->getProviderSessionsSeries($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->getProviderSessionsSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **range** | **string**| period of time (\&quot;1d\&quot;, \&quot;7d\&quot;, \&quot;30d\&quot;) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProviderSessionsSeriesResponse**](../Model/ProviderSessionsSeriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProviderTransferredData()`

```php
getProviderTransferredData($range): \OpenAPI\Client\Model\ProviderTransferredDataResponse
```

Provides total traffic served by the provider during a period of time

Node transferred data during a period of time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$range = 'range_example'; // string | period of time (\"1d\", \"7d\", \"30d\")

try {
    $result = $apiInstance->getProviderTransferredData($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->getProviderTransferredData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **range** | **string**| period of time (\&quot;1d\&quot;, \&quot;7d\&quot;, \&quot;30d\&quot;) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProviderTransferredDataResponse**](../Model/ProviderTransferredDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProviderTransferredDataSeries()`

```php
getProviderTransferredDataSeries($range): \OpenAPI\Client\Model\ProviderTransferredDataSeriesResponse
```

Provides Node data series metrics of transferred bytes

Node data series metrics of transferred bytes during a period of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$range = 'range_example'; // string | period of time (\"1d\", \"7d\", \"30d\")

try {
    $result = $apiInstance->getProviderTransferredDataSeries($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->getProviderTransferredDataSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **range** | **string**| period of time (\&quot;1d\&quot;, \&quot;7d\&quot;, \&quot;30d\&quot;) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProviderTransferredDataSeriesResponse**](../Model/ProviderTransferredDataSeriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `monitoringAgentStatuses()`

```php
monitoringAgentStatuses(): \OpenAPI\Client\Model\MonitoringAgentResponse
```

Provides Node connectivity statuses from monitoring agent

Node connectivity statuses as seen by monitoring agent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->monitoringAgentStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->monitoringAgentStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MonitoringAgentResponse**](../Model/MonitoringAgentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nodeStatus()`

```php
nodeStatus(): \OpenAPI\Client\Model\NodeStatusResponse
```

Provides Node proposal status

Node Status as seen by monitoring agent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->nodeStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->nodeStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NodeStatusResponse**](../Model/NodeStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
