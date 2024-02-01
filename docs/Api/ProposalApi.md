# OpenAPI\Client\ProposalApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listProposals()**](ProposalApi.md#listProposals) | **GET** /proposals | Returns proposals |
| [**proposalFilterPresets()**](ProposalApi.md#proposalFilterPresets) | **GET** /proposals/filter-presets | Returns proposal filter presets |


## `listProposals()`

```php
listProposals($provider_id, $service_type, $access_policy, $access_policy_source, $country, $ip_type, $compatibility_min, $compatibility_max, $quality_min, $nat_compatibility): \OpenAPI\Client\Model\ListProposalsResponse
```

Returns proposals

Returns list of proposals filtered by provider id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProposalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$provider_id = 'provider_id_example'; // string | id of provider proposals
$service_type = 'service_type_example'; // string | the service type of the proposal. Possible values are \"openvpn\", \"wireguard\" and \"noop\"
$access_policy = 'access_policy_example'; // string | the access policy id to filter the proposals by
$access_policy_source = 'access_policy_source_example'; // string | the access policy source to filter the proposals by
$country = 'country_example'; // string | If given will filter proposals by node location country.
$ip_type = 'ip_type_example'; // string | IP Type (residential, datacenter, etc.).
$compatibility_min = 56; // int | Minimum compatibility level of the proposal.
$compatibility_max = 56; // int | Maximum compatibility level of the proposal.
$quality_min = 3.4; // float | Minimum quality of the provider.
$nat_compatibility = 'nat_compatibility_example'; // string | Pick nodes compatible with NAT of specified type. Specify \"auto\" to probe NAT.

try {
    $result = $apiInstance->listProposals($provider_id, $service_type, $access_policy, $access_policy_source, $country, $ip_type, $compatibility_min, $compatibility_max, $quality_min, $nat_compatibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProposalApi->listProposals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **string**| id of provider proposals | [optional] |
| **service_type** | **string**| the service type of the proposal. Possible values are \&quot;openvpn\&quot;, \&quot;wireguard\&quot; and \&quot;noop\&quot; | [optional] |
| **access_policy** | **string**| the access policy id to filter the proposals by | [optional] |
| **access_policy_source** | **string**| the access policy source to filter the proposals by | [optional] |
| **country** | **string**| If given will filter proposals by node location country. | [optional] |
| **ip_type** | **string**| IP Type (residential, datacenter, etc.). | [optional] |
| **compatibility_min** | **int**| Minimum compatibility level of the proposal. | [optional] |
| **compatibility_max** | **int**| Maximum compatibility level of the proposal. | [optional] |
| **quality_min** | **float**| Minimum quality of the provider. | [optional] |
| **nat_compatibility** | **string**| Pick nodes compatible with NAT of specified type. Specify \&quot;auto\&quot; to probe NAT. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListProposalsResponse**](../Model/ListProposalsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proposalFilterPresets()`

```php
proposalFilterPresets(): \OpenAPI\Client\Model\ListProposalFilterPresetsResponse
```

Returns proposal filter presets

Returns proposal filter presets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProposalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->proposalFilterPresets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProposalApi->proposalFilterPresets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ListProposalFilterPresetsResponse**](../Model/ListProposalFilterPresetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
