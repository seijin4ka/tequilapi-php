# OpenAPI\Client\FeedbackApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bugReport()**](FeedbackApi.md#bugReport) | **POST** /feedback/bug-report | Creates a bug report |
| [**reportIssueGithub()**](FeedbackApi.md#reportIssueGithub) | **POST** /feedback/issue | Reports user issue to github |
| [**reportIssueIntercom()**](FeedbackApi.md#reportIssueIntercom) | **POST** /feedback/issue/intercom | Reports user issue to intercom |


## `bugReport()`

```php
bugReport($body): \OpenAPI\Client\Model\CreateBugReportResponse
```

Creates a bug report

Creates a bug report with logs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\BugReport(); // \OpenAPI\Client\Model\BugReport | Report a bug

try {
    $result = $apiInstance->bugReport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->bugReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\BugReport**](../Model/BugReport.md)| Report a bug | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateBugReportResponse**](../Model/CreateBugReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportIssueGithub()`

```php
reportIssueGithub($body): \OpenAPI\Client\Model\ReportIssueGithubResponse
```

Reports user issue to github

Reports user issue to github

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\BugReport(); // \OpenAPI\Client\Model\BugReport | Bug report issue request

try {
    $result = $apiInstance->reportIssueGithub($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->reportIssueGithub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\BugReport**](../Model/BugReport.md)| Bug report issue request | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportIssueGithubResponse**](../Model/ReportIssueGithubResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportIssueIntercom()`

```php
reportIssueIntercom($body)
```

Reports user issue to intercom

Reports user user to intercom

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UserReport(); // \OpenAPI\Client\Model\UserReport | Report issue request

try {
    $apiInstance->reportIssueIntercom($body);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->reportIssueIntercom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UserReport**](../Model/UserReport.md)| Report issue request | [optional] |

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
