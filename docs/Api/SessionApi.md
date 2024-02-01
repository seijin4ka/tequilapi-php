# OpenAPI\Client\SessionApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sessionList()**](SessionApi.md#sessionList) | **GET** /sessions | Returns sessions history |
| [**sessionStatsAggregated()**](SessionApi.md#sessionStatsAggregated) | **GET** /sessions/stats-aggregated | Returns sessions stats |
| [**sessionStatsDaily()**](SessionApi.md#sessionStatsDaily) | **GET** /sessions/stats-daily | Returns sessions stats |


## `sessionList()`

```php
sessionList($page_size, $page, $date_from, $date_to, $direction, $consumer_id, $hermes_id, $provider_id, $service_type, $status): \OpenAPI\Client\Model\SessionListResponse
```

Returns sessions history

Returns list of sessions history filtered by given query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_size = 50; // int | Number of items per page.
$page = 1; // int | Page to filter the items by.
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter the sessions from this date. Formatted in RFC3339 e.g. 2020-07-01.
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter the sessions until this date. Formatted in RFC3339 e.g. 2020-07-30.
$direction = 'direction_example'; // string | Direction to filter the sessions by. Possible values are \"Provided\", \"Consumed\".
$consumer_id = 'consumer_id_example'; // string | Consumer identity to filter the sessions by.
$hermes_id = 'hermes_id_example'; // string | Hermes ID to filter the sessions by.
$provider_id = 'provider_id_example'; // string | Provider identity to filter the sessions by.
$service_type = 'service_type_example'; // string | Service type to filter the sessions by.
$status = 'status_example'; // string | Status to filter the sessions by. Possible values are \"New\", \"Completed\".

try {
    $result = $apiInstance->sessionList($page_size, $page, $date_from, $date_to, $direction, $consumer_id, $hermes_id, $provider_id, $service_type, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->sessionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_size** | **int**| Number of items per page. | [optional] [default to 50] |
| **page** | **int**| Page to filter the items by. | [optional] [default to 1] |
| **date_from** | **\DateTime**| Filter the sessions from this date. Formatted in RFC3339 e.g. 2020-07-01. | [optional] |
| **date_to** | **\DateTime**| Filter the sessions until this date. Formatted in RFC3339 e.g. 2020-07-30. | [optional] |
| **direction** | **string**| Direction to filter the sessions by. Possible values are \&quot;Provided\&quot;, \&quot;Consumed\&quot;. | [optional] |
| **consumer_id** | **string**| Consumer identity to filter the sessions by. | [optional] |
| **hermes_id** | **string**| Hermes ID to filter the sessions by. | [optional] |
| **provider_id** | **string**| Provider identity to filter the sessions by. | [optional] |
| **service_type** | **string**| Service type to filter the sessions by. | [optional] |
| **status** | **string**| Status to filter the sessions by. Possible values are \&quot;New\&quot;, \&quot;Completed\&quot;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SessionListResponse**](../Model/SessionListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionStatsAggregated()`

```php
sessionStatsAggregated($date_from, $date_to, $direction, $consumer_id, $hermes_id, $provider_id, $service_type, $status): \OpenAPI\Client\Model\SessionStatsAggregatedResponse
```

Returns sessions stats

Returns aggregated statistics of sessions filtered by given query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter the sessions from this date. Formatted in RFC3339 e.g. 2020-07-01.
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter the sessions until this date. Formatted in RFC3339 e.g. 2020-07-30.
$direction = 'direction_example'; // string | Direction to filter the sessions by. Possible values are \"Provided\", \"Consumed\".
$consumer_id = 'consumer_id_example'; // string | Consumer identity to filter the sessions by.
$hermes_id = 'hermes_id_example'; // string | Hermes ID to filter the sessions by.
$provider_id = 'provider_id_example'; // string | Provider identity to filter the sessions by.
$service_type = 'service_type_example'; // string | Service type to filter the sessions by.
$status = 'status_example'; // string | Status to filter the sessions by. Possible values are \"New\", \"Completed\".

try {
    $result = $apiInstance->sessionStatsAggregated($date_from, $date_to, $direction, $consumer_id, $hermes_id, $provider_id, $service_type, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->sessionStatsAggregated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **\DateTime**| Filter the sessions from this date. Formatted in RFC3339 e.g. 2020-07-01. | [optional] |
| **date_to** | **\DateTime**| Filter the sessions until this date. Formatted in RFC3339 e.g. 2020-07-30. | [optional] |
| **direction** | **string**| Direction to filter the sessions by. Possible values are \&quot;Provided\&quot;, \&quot;Consumed\&quot;. | [optional] |
| **consumer_id** | **string**| Consumer identity to filter the sessions by. | [optional] |
| **hermes_id** | **string**| Hermes ID to filter the sessions by. | [optional] |
| **provider_id** | **string**| Provider identity to filter the sessions by. | [optional] |
| **service_type** | **string**| Service type to filter the sessions by. | [optional] |
| **status** | **string**| Status to filter the sessions by. Possible values are \&quot;New\&quot;, \&quot;Completed\&quot;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SessionStatsAggregatedResponse**](../Model/SessionStatsAggregatedResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionStatsDaily()`

```php
sessionStatsDaily($date_from, $date_to, $direction, $consumer_id, $hermes_id, $provider_id, $service_type, $status): \OpenAPI\Client\Model\SessionStatsDTO
```

Returns sessions stats

Returns aggregated daily statistics of sessions filtered by given query (date_from=<now -30d> and date_to=<now> by default)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter the sessions from this date. Formatted in RFC3339 e.g. 2020-07-01.
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter the sessions until this date. Formatted in RFC3339 e.g. 2020-07-30.
$direction = 'direction_example'; // string | Direction to filter the sessions by. Possible values are \"Provided\", \"Consumed\".
$consumer_id = 'consumer_id_example'; // string | Consumer identity to filter the sessions by.
$hermes_id = 'hermes_id_example'; // string | Hermes ID to filter the sessions by.
$provider_id = 'provider_id_example'; // string | Provider identity to filter the sessions by.
$service_type = 'service_type_example'; // string | Service type to filter the sessions by.
$status = 'status_example'; // string | Status to filter the sessions by. Possible values are \"New\", \"Completed\".

try {
    $result = $apiInstance->sessionStatsDaily($date_from, $date_to, $direction, $consumer_id, $hermes_id, $provider_id, $service_type, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->sessionStatsDaily: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **\DateTime**| Filter the sessions from this date. Formatted in RFC3339 e.g. 2020-07-01. | [optional] |
| **date_to** | **\DateTime**| Filter the sessions until this date. Formatted in RFC3339 e.g. 2020-07-30. | [optional] |
| **direction** | **string**| Direction to filter the sessions by. Possible values are \&quot;Provided\&quot;, \&quot;Consumed\&quot;. | [optional] |
| **consumer_id** | **string**| Consumer identity to filter the sessions by. | [optional] |
| **hermes_id** | **string**| Hermes ID to filter the sessions by. | [optional] |
| **provider_id** | **string**| Provider identity to filter the sessions by. | [optional] |
| **service_type** | **string**| Service type to filter the sessions by. | [optional] |
| **status** | **string**| Status to filter the sessions by. Possible values are \&quot;New\&quot;, \&quot;Completed\&quot;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SessionStatsDTO**](../Model/SessionStatsDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
