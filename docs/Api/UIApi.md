# OpenAPI\Client\UIApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ui()**](UIApi.md#ui) | **GET** /ui/info | Node UI information |
| [**uiDownload()**](UIApi.md#uiDownload) | **POST** /ui/download-version | Download |
| [**uiDownloadStatus()**](UIApi.md#uiDownloadStatus) | **GET** /ui/download-status | Download status |
| [**uiLocalVersions()**](UIApi.md#uiLocalVersions) | **GET** /ui/local-versions | List remote |
| [**uiRemoteVersions()**](UIApi.md#uiRemoteVersions) | **GET** /ui/remote-versions | List local |
| [**uiSwitchVersion()**](UIApi.md#uiSwitchVersion) | **POST** /ui/switch-version | Switch Version |


## `ui()`

```php
ui(): \OpenAPI\Client\Model\UI
```

Node UI information

Node UI information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ui();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UIApi->ui: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\UI**](../Model/UI.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uiDownload()`

```php
uiDownload()
```

Download

download a remote node UI release

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->uiDownload();
} catch (Exception $e) {
    echo 'Exception when calling UIApi->uiDownload: ', $e->getMessage(), PHP_EOL;
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

## `uiDownloadStatus()`

```php
uiDownloadStatus(): \OpenAPI\Client\Model\DownloadStatus
```

Download status

DownloadStatus can download one remote release at a time. This endpoint provides status of the download.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->uiDownloadStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UIApi->uiDownloadStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\DownloadStatus**](../Model/DownloadStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uiLocalVersions()`

```php
uiLocalVersions(): \OpenAPI\Client\Model\LocalVersionsResponse
```

List remote

provides a list of node UI releases that have been downloaded or bundled with node

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->uiLocalVersions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UIApi->uiLocalVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\LocalVersionsResponse**](../Model/LocalVersionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uiRemoteVersions()`

```php
uiRemoteVersions(): \OpenAPI\Client\Model\RemoteVersionsResponse
```

List local

provides a list of node UI releases from github repository

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->uiRemoteVersions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UIApi->uiRemoteVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RemoteVersionsResponse**](../Model/RemoteVersionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uiSwitchVersion()`

```php
uiSwitchVersion()
```

Switch Version

switch node UI version to locally available one

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->uiSwitchVersion();
} catch (Exception $e) {
    echo 'Exception when calling UIApi->uiSwitchVersion: ', $e->getMessage(), PHP_EOL;
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
