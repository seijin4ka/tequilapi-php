# OpenAPI\Client\OrderApi

All URIs are relative to http://127.0.0.1:4050, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentGatewayOrder()**](OrderApi.md#createPaymentGatewayOrder) | **POST** /v2/identities/{id}/{gw}/payment-order | Create order |
| [**getPaymentGatewayOrder()**](OrderApi.md#getPaymentGatewayOrder) | **GET** /v2/identities/{id}/payment-order/{order_id} | Get order |
| [**getPaymentGatewayOrderInvoice()**](OrderApi.md#getPaymentGatewayOrderInvoice) | **GET** /v2/identities/{id}/payment-order/{order_id}/invoice | Get invoice |
| [**getPaymentGatewayOrders()**](OrderApi.md#getPaymentGatewayOrders) | **GET** /v2/identities/{id}/payment-order | Get all orders for identity |
| [**getPaymentGateways()**](OrderApi.md#getPaymentGateways) | **GET** /v2/payment-order-gateways | Get payment gateway configuration. |
| [**getRegistrationPaymentStatus()**](OrderApi.md#getRegistrationPaymentStatus) | **GET** /v2/identities/{id}/registration-payment | Check for registration payment |


## `createPaymentGatewayOrder()`

```php
createPaymentGatewayOrder($id, $gw, $body): \OpenAPI\Client\Model\PaymentOrderResponse
```

Create order

Takes the given data and tries to create a new payment order in the pilvytis service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identity for which to create an order
$gw = 'gw_example'; // string | Gateway for which a payment order is created
$body = new \OpenAPI\Client\Model\PaymentOrderRequest(); // \OpenAPI\Client\Model\PaymentOrderRequest | Required data to create a new order

try {
    $result = $apiInstance->createPaymentGatewayOrder($id, $gw, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createPaymentGatewayOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identity for which to create an order | |
| **gw** | **string**| Gateway for which a payment order is created | |
| **body** | [**\OpenAPI\Client\Model\PaymentOrderRequest**](../Model/PaymentOrderRequest.md)| Required data to create a new order | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentOrderResponse**](../Model/PaymentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentGatewayOrder()`

```php
getPaymentGatewayOrder($id, $order_id): \OpenAPI\Client\Model\PaymentOrderResponse
```

Get order

Gets an order for a given identity and order id combo from the pilvytis service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identity for which to get an order
$order_id = 56; // int | Order id

try {
    $result = $apiInstance->getPaymentGatewayOrder($id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPaymentGatewayOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identity for which to get an order | |
| **order_id** | **int**| Order id | |

### Return type

[**\OpenAPI\Client\Model\PaymentOrderResponse**](../Model/PaymentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentGatewayOrderInvoice()`

```php
getPaymentGatewayOrderInvoice($id, $order_id)
```

Get invoice

Gets an invoice for payment order matching the given ID and identity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identity for which to get an order invoice
$order_id = 56; // int | Order id

try {
    $apiInstance->getPaymentGatewayOrderInvoice($id, $order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPaymentGatewayOrderInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identity for which to get an order invoice | |
| **order_id** | **int**| Order id | |

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

## `getPaymentGatewayOrders()`

```php
getPaymentGatewayOrders($id): \OpenAPI\Client\Model\PaymentOrderResponse[]
```

Get all orders for identity

Gets all orders for a given identity from the pilvytis service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identity for which to get orders

try {
    $result = $apiInstance->getPaymentGatewayOrders($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPaymentGatewayOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identity for which to get orders | |

### Return type

[**\OpenAPI\Client\Model\PaymentOrderResponse[]**](../Model/PaymentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentGateways()`

```php
getPaymentGateways($options_currency): \OpenAPI\Client\Model\GatewaysResponse[]
```

Get payment gateway configuration.

Returns gateway configuration including supported currencies, minimum amounts, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$options_currency = 'MYST'; // string | Currency for payment order options

try {
    $result = $apiInstance->getPaymentGateways($options_currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPaymentGateways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **options_currency** | **string**| Currency for payment order options | [optional] [default to &#39;MYST&#39;] |

### Return type

[**\OpenAPI\Client\Model\GatewaysResponse[]**](../Model/GatewaysResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRegistrationPaymentStatus()`

```php
getRegistrationPaymentStatus($id): \OpenAPI\Client\Model\RegistrationPaymentResponse
```

Check for registration payment

Checks if a registration payment order for an identity has been paid in pilvytis.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identity for which to check

try {
    $result = $apiInstance->getRegistrationPaymentStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRegistrationPaymentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identity for which to check | |

### Return type

[**\OpenAPI\Client\Model\RegistrationPaymentResponse**](../Model/RegistrationPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
