# OpenAPIClient-php

The purpose of this documentation is to provide developers an insight of how to
interact with Mysterium Node via Tequila API.
This should demonstrate all the possible API calls with described parameters and responses.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AuthRequest(); // \OpenAPI\Client\Model\AuthRequest

try {
    $result = $apiInstance->authenticate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://127.0.0.1:4050*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**authenticate**](docs/Api/AuthenticationApi.md#authenticate) | **POST** /auth/authenticate | Authenticate
*AuthenticationApi* | [**changePassword**](docs/Api/AuthenticationApi.md#changepassword) | **PUT** /auth/password | Change password
*AuthenticationApi* | [**login**](docs/Api/AuthenticationApi.md#login) | **POST** /auth/login | Login
*AuthenticationApi* | [**logout**](docs/Api/AuthenticationApi.md#logout) | **DELETE** /auth/logout | Logout
*BeneficiaryApi* | [**address**](docs/Api/BeneficiaryApi.md#address) | **GET** /identities/{id}/beneficiary | Provide identity beneficiary address
*ClientApi* | [**applicationStop**](docs/Api/ClientApi.md#applicationstop) | **POST** /stop | Stops client
*ClientApi* | [**healthCheck**](docs/Api/ClientApi.md#healthcheck) | **GET** /healthcheck | Returns information about client
*ConfigurationApi* | [**getConfig**](docs/Api/ConfigurationApi.md#getconfig) | **GET** /config | Returns current configuration values
*ConfigurationApi* | [**getDefaultConfig**](docs/Api/ConfigurationApi.md#getdefaultconfig) | **GET** /config/default | Returns default configuration
*ConfigurationApi* | [**getUserConfig**](docs/Api/ConfigurationApi.md#getuserconfig) | **GET** /config/user | Returns current user configuration
*ConfigurationApi* | [**serUserConfig**](docs/Api/ConfigurationApi.md#seruserconfig) | **POST** /config/user | Sets and returns user configuration
*ConnectionApi* | [**connectionCancel**](docs/Api/ConnectionApi.md#connectioncancel) | **DELETE** /connection | Stops connection
*ConnectionApi* | [**connectionCreate**](docs/Api/ConnectionApi.md#connectioncreate) | **PUT** /connection | Starts new connection
*ConnectionApi* | [**connectionStatistics**](docs/Api/ConnectionApi.md#connectionstatistics) | **GET** /connection/statistics | Returns connection statistics
*ConnectionApi* | [**connectionStatus**](docs/Api/ConnectionApi.md#connectionstatus) | **GET** /connection | Returns connection status
*ConnectionApi* | [**connectionTraffic**](docs/Api/ConnectionApi.md#connectiontraffic) | **GET** /connection/traffic | Returns connection traffic information
*ConnectionApi* | [**getConnectionIP**](docs/Api/ConnectionApi.md#getconnectionip) | **GET** /connection/ip | Returns IP address
*ConnectionApi* | [**getConnectionLocation**](docs/Api/ConnectionApi.md#getconnectionlocation) | **GET** /connection/location | Returns connection location
*ConnectionApi* | [**getProxyIP**](docs/Api/ConnectionApi.md#getproxyip) | **GET** /connection/proxy/ip | Returns IP address
*ConnectionApi* | [**getProxyLocation**](docs/Api/ConnectionApi.md#getproxylocation) | **GET** /connection/proxy/location | Returns proxy connection location
*CountriesApi* | [**listCountries**](docs/Api/CountriesApi.md#listcountries) | **GET** /proposals/countries | Returns number of proposals per country
*DecreaseApi* | [**stake**](docs/Api/DecreaseApi.md#stake) | **POST** /transactor/stake/decrease | Decreases stake
*DefaultApi* | [**accessPolicies**](docs/Api/DefaultApi.md#accesspolicies) | **GET** /access-policies | Returns access policies
*DefaultApi* | [**affiliatorTokenReward**](docs/Api/DefaultApi.md#affiliatortokenreward) | **POST** /affiliator/token/{token}/reward | Returns the amount of reward for a token (affiliator)
*DefaultApi* | [**chains**](docs/Api/DefaultApi.md#chains) | **GET** /transactor/chains-summary | Returns available chain map
*DefaultApi* | [**combinedFeesResponse**](docs/Api/DefaultApi.md#combinedfeesresponse) | **GET** /v2/transactor/fees | Returns fees
*DefaultApi* | [**connectivityStatus**](docs/Api/DefaultApi.md#connectivitystatus) | **GET** /sessions-connectivity-status | Returns session connectivity status
*DefaultApi* | [**eligibility**](docs/Api/DefaultApi.md#eligibility) | **GET** /transactor/identities/{id}/eligibility | Checks if given id is eligible for free registration
*DefaultApi* | [**feesDTO**](docs/Api/DefaultApi.md#feesdto) | **GET** /transactor/fees | Returns fees
*DefaultApi* | [**providerEligibility**](docs/Api/DefaultApi.md#providereligibility) | **GET** /identities/provider/eligibility | Checks if provider is eligible for free registration
*DefaultApi* | [**reward**](docs/Api/DefaultApi.md#reward) | **POST** /transactor/token/{token}/reward | Returns the amount of reward for a token
*DefaultApi* | [**settleAsync**](docs/Api/DefaultApi.md#settleasync) | **POST** /transactor/settle/async | forces the settlement of promises for the given provider and hermes
*DefaultApi* | [**settleSync**](docs/Api/DefaultApi.md#settlesync) | **POST** /transactor/settle/sync | Forces the settlement of promises for the given provider and hermes
*DefaultApi* | [**settlementList**](docs/Api/DefaultApi.md#settlementlist) | **GET** /settle/history | Returns settlement history
*DefaultApi* | [**stakeIncreaseAsync**](docs/Api/DefaultApi.md#stakeincreaseasync) | **POST** /transactor/stake/increase/async | forces the settlement with stake increase of promises for the given provider and hermes.
*DefaultApi* | [**stakeIncreaseSync**](docs/Api/DefaultApi.md#stakeincreasesync) | **POST** /transactor/stake/increase/sync | Forces the settlement with stake increase of promises for the given provider and hermes.
*DefaultApi* | [**withdraw**](docs/Api/DefaultApi.md#withdraw) | **POST** /transactor/settle/withdraw | Asks to perform withdrawal to l1.
*EntertainmentApi* | [**estimate**](docs/Api/EntertainmentApi.md#estimate) | **GET** /entertainment | Estimate entertainment durations/data cap for the MYST amount specified.
*ExchangeApi* | [**exchangeMyst**](docs/Api/ExchangeApi.md#exchangemyst) | **GET** /exchange/myst/{currency} | Returns the myst price in the given currency
*ExportApi* | [**identity**](docs/Api/ExportApi.md#identity) | **POST** /export | Exports a given identity
*FeedbackApi* | [**bugReport**](docs/Api/FeedbackApi.md#bugreport) | **POST** /feedback/bug-report | Creates a bug report
*FeedbackApi* | [**reportIssueGithub**](docs/Api/FeedbackApi.md#reportissuegithub) | **POST** /feedback/issue | Reports user issue to github
*FeedbackApi* | [**reportIssueIntercom**](docs/Api/FeedbackApi.md#reportissueintercom) | **POST** /feedback/issue/intercom | Reports user issue to intercom
*IdentitiesApi* | [**importIdentity**](docs/Api/IdentitiesApi.md#importidentity) | **POST** /identities-import | Imports a given identity.
*IdentityApi* | [**address**](docs/Api/IdentityApi.md#address) | **GET** /identities/{id}/beneficiary | Provide identity beneficiary address
*IdentityApi* | [**balance**](docs/Api/IdentityApi.md#balance) | **PUT** /identities/{id}/balance/refresh | Refresh balance of given identity
*IdentityApi* | [**createIdentity**](docs/Api/IdentityApi.md#createidentity) | **POST** /identities | Creates new identity
*IdentityApi* | [**currentIdentity**](docs/Api/IdentityApi.md#currentidentity) | **PUT** /identities/current | Returns my current identity
*IdentityApi* | [**getIdentity**](docs/Api/IdentityApi.md#getidentity) | **GET** /identities/{id} | Get identity
*IdentityApi* | [**identityRegistration**](docs/Api/IdentityApi.md#identityregistration) | **GET** /identities/{id}/registration | Provide identity registration status
*IdentityApi* | [**listIdentities**](docs/Api/IdentityApi.md#listidentities) | **GET** /identities | Returns identities
*IdentityApi* | [**registerIdentity**](docs/Api/IdentityApi.md#registeridentity) | **POST** /identities/{id}/register | Registers identity
*IdentityApi* | [**unlockIdentity**](docs/Api/IdentityApi.md#unlockidentity) | **PUT** /identities/{id}/unlock | Unlocks identity
*LocationApi* | [**getOriginLocation**](docs/Api/LocationApi.md#getoriginlocation) | **GET** /location | Returns original location
*MMNApi* | [**clearApiKey**](docs/Api/MMNApi.md#clearapikey) | **DELETE** /mmn/api-key | Clears MMN&#39;s API key from config
*MMNApi* | [**getApiKey**](docs/Api/MMNApi.md#getapikey) | **GET** /mmn/report | returns MMN&#39;s API key
*MMNApi* | [**getClaimLink**](docs/Api/MMNApi.md#getclaimlink) | **GET** /mmn/claim-link | Generate claim link
*MMNApi* | [**getOnboardingLink**](docs/Api/MMNApi.md#getonboardinglink) | **GET** /mmn/onboarding | Generate onboarding link
*MMNApi* | [**setApiKey**](docs/Api/MMNApi.md#setapikey) | **POST** /mmn/api-key | sets MMN&#39;s API key
*MMNApi* | [**verifyGrant**](docs/Api/MMNApi.md#verifygrant) | **POST** /mmn/onboarding | verify grant for onboarding
*NATApi* | [**nATTypeDTO**](docs/Api/NATApi.md#nattypedto) | **GET** /nat/type | Shows NAT type in terms of traversal capabilities.
*NodeApi* | [**getLatestRelease**](docs/Api/NodeApi.md#getlatestrelease) | **GET** /node/latest-release | Latest Node release information
*OrderApi* | [**createPaymentGatewayOrder**](docs/Api/OrderApi.md#createpaymentgatewayorder) | **POST** /v2/identities/{id}/{gw}/payment-order | Create order
*OrderApi* | [**getPaymentGatewayOrder**](docs/Api/OrderApi.md#getpaymentgatewayorder) | **GET** /v2/identities/{id}/payment-order/{order_id} | Get order
*OrderApi* | [**getPaymentGatewayOrderInvoice**](docs/Api/OrderApi.md#getpaymentgatewayorderinvoice) | **GET** /v2/identities/{id}/payment-order/{order_id}/invoice | Get invoice
*OrderApi* | [**getPaymentGatewayOrders**](docs/Api/OrderApi.md#getpaymentgatewayorders) | **GET** /v2/identities/{id}/payment-order | Get all orders for identity
*OrderApi* | [**getPaymentGateways**](docs/Api/OrderApi.md#getpaymentgateways) | **GET** /v2/payment-order-gateways | Get payment gateway configuration.
*OrderApi* | [**getRegistrationPaymentStatus**](docs/Api/OrderApi.md#getregistrationpaymentstatus) | **GET** /v2/identities/{id}/registration-payment | Check for registration payment
*ProposalApi* | [**listProposals**](docs/Api/ProposalApi.md#listproposals) | **GET** /proposals | Returns proposals
*ProposalApi* | [**proposalFilterPresets**](docs/Api/ProposalApi.md#proposalfilterpresets) | **GET** /proposals/filter-presets | Returns proposal filter presets
*ProviderApi* | [**getProviderActivityStats**](docs/Api/ProviderApi.md#getprovideractivitystats) | **GET** /node/provider/activity-stats | Provides Node activity stats
*ProviderApi* | [**getProviderConsumersCount**](docs/Api/ProviderApi.md#getproviderconsumerscount) | **GET** /node/provider/consumers-count | Provides Node consumers number served during a period of time
*ProviderApi* | [**getProviderEarningsSeries**](docs/Api/ProviderApi.md#getproviderearningsseries) | **GET** /node/provider/series/earnings | Provides Node  time series metrics of earnings during a period of time
*ProviderApi* | [**getProviderQuality**](docs/Api/ProviderApi.md#getproviderquality) | **GET** /node/provider/quality | Provides Node quality
*ProviderApi* | [**getProviderServiceEarnings**](docs/Api/ProviderApi.md#getproviderserviceearnings) | **GET** /node/provider/service-earnings | Provides Node earnings per service and total earnings in the all network
*ProviderApi* | [**getProviderSessions**](docs/Api/ProviderApi.md#getprovidersessions) | **GET** /node/provider/sessions | Provides Node sessions data during a period of time
*ProviderApi* | [**getProviderSessionsCount**](docs/Api/ProviderApi.md#getprovidersessionscount) | **GET** /node/provider/sessions-count | Provides Node sessions number during a period of time
*ProviderApi* | [**getProviderSessionsSeries**](docs/Api/ProviderApi.md#getprovidersessionsseries) | **GET** /node/provider/series/sessions | Provides Node data series metrics of sessions started during a period of time
*ProviderApi* | [**getProviderTransferredData**](docs/Api/ProviderApi.md#getprovidertransferreddata) | **GET** /node/provider/transferred-data | Provides total traffic served by the provider during a period of time
*ProviderApi* | [**getProviderTransferredDataSeries**](docs/Api/ProviderApi.md#getprovidertransferreddataseries) | **GET** /node/provider/series/data | Provides Node data series metrics of transferred bytes
*ProviderApi* | [**monitoringAgentStatuses**](docs/Api/ProviderApi.md#monitoringagentstatuses) | **GET** /node/monitoring-agent-statuses | Provides Node connectivity statuses from monitoring agent
*ProviderApi* | [**nodeStatus**](docs/Api/ProviderApi.md#nodestatus) | **GET** /node/monitoring-status | Provides Node proposal status
*SSOApi* | [**loginMystnodesInit**](docs/Api/SSOApi.md#loginmystnodesinit) | **GET** /auth/login-mystnodes | LoginMystnodesInit
*SSOApi* | [**loginMystnodesWithGrant**](docs/Api/SSOApi.md#loginmystnodeswithgrant) | **POST** /auth/login-mystnodes | LoginMystnodesWithGrant
*ServiceApi* | [**serviceGet**](docs/Api/ServiceApi.md#serviceget) | **GET** /services/:id | Information about service
*ServiceApi* | [**serviceListResponse**](docs/Api/ServiceApi.md#servicelistresponse) | **GET** /services | List of services
*ServiceApi* | [**serviceStart**](docs/Api/ServiceApi.md#servicestart) | **POST** /services | Starts service
*ServiceApi* | [**serviceStop**](docs/Api/ServiceApi.md#servicestop) | **DELETE** /services/:id | Stops service
*SessionApi* | [**sessionList**](docs/Api/SessionApi.md#sessionlist) | **GET** /sessions | Returns sessions history
*SessionApi* | [**sessionStatsAggregated**](docs/Api/SessionApi.md#sessionstatsaggregated) | **GET** /sessions/stats-aggregated | Returns sessions stats
*SessionApi* | [**sessionStatsDaily**](docs/Api/SessionApi.md#sessionstatsdaily) | **GET** /sessions/stats-daily | Returns sessions stats
*TermsApi* | [**getTerms**](docs/Api/TermsApi.md#getterms) | **GET** /terms | Get terms
*TermsApi* | [**updateTerms**](docs/Api/TermsApi.md#updateterms) | **POST** /terms | Update terms agreement
*UIApi* | [**ui**](docs/Api/UIApi.md#ui) | **GET** /ui/info | Node UI information
*UIApi* | [**uiDownload**](docs/Api/UIApi.md#uidownload) | **POST** /ui/download-version | Download
*UIApi* | [**uiDownloadStatus**](docs/Api/UIApi.md#uidownloadstatus) | **GET** /ui/download-status | Download status
*UIApi* | [**uiLocalVersions**](docs/Api/UIApi.md#uilocalversions) | **GET** /ui/local-versions | List remote
*UIApi* | [**uiRemoteVersions**](docs/Api/UIApi.md#uiremoteversions) | **GET** /ui/remote-versions | List local
*UIApi* | [**uiSwitchVersion**](docs/Api/UIApi.md#uiswitchversion) | **POST** /ui/switch-version | Switch Version

## Models

- [APIError](docs/Model/APIError.md)
- [AccessPolicies](docs/Model/AccessPolicies.md)
- [AccessPolicy](docs/Model/AccessPolicy.md)
- [AccessRule](docs/Model/AccessRule.md)
- [ActivityStatsResponse](docs/Model/ActivityStatsResponse.md)
- [AuthRequest](docs/Model/AuthRequest.md)
- [AuthResponse](docs/Model/AuthResponse.md)
- [BalanceDTO](docs/Model/BalanceDTO.md)
- [BeneficiaryAddressRequest](docs/Model/BeneficiaryAddressRequest.md)
- [BeneficiaryTxStatus](docs/Model/BeneficiaryTxStatus.md)
- [BugReport](docs/Model/BugReport.md)
- [BuildInfoDTO](docs/Model/BuildInfoDTO.md)
- [ChainSummary](docs/Model/ChainSummary.md)
- [ChangePasswordRequest](docs/Model/ChangePasswordRequest.md)
- [CipherparamsJSON](docs/Model/CipherparamsJSON.md)
- [CombinedFeesResponse](docs/Model/CombinedFeesResponse.md)
- [ConfigPayload](docs/Model/ConfigPayload.md)
- [ConnectOptionsDTO](docs/Model/ConnectOptionsDTO.md)
- [ConnectionCreateFilter](docs/Model/ConnectionCreateFilter.md)
- [ConnectionCreateRequestDTO](docs/Model/ConnectionCreateRequestDTO.md)
- [ConnectionDTO](docs/Model/ConnectionDTO.md)
- [ConnectionInfoDTO](docs/Model/ConnectionInfoDTO.md)
- [ConnectionStatisticsDTO](docs/Model/ConnectionStatisticsDTO.md)
- [ConnectionTrafficDTO](docs/Model/ConnectionTrafficDTO.md)
- [ConnectivityStatus](docs/Model/ConnectivityStatus.md)
- [CreateBugReportResponse](docs/Model/CreateBugReportResponse.md)
- [CryptoJSON](docs/Model/CryptoJSON.md)
- [CurrencyExchangeDTO](docs/Model/CurrencyExchangeDTO.md)
- [CurrentPriceResponse](docs/Model/CurrentPriceResponse.md)
- [DecreaseStakeRequest](docs/Model/DecreaseStakeRequest.md)
- [DownloadNodeUIRequest](docs/Model/DownloadNodeUIRequest.md)
- [DownloadStatus](docs/Model/DownloadStatus.md)
- [EarningsDTO](docs/Model/EarningsDTO.md)
- [EarningsPerServiceResponse](docs/Model/EarningsPerServiceResponse.md)
- [EligibilityResponse](docs/Model/EligibilityResponse.md)
- [EntertainmentEstimateResponse](docs/Model/EntertainmentEstimateResponse.md)
- [Err](docs/Model/Err.md)
- [FeesDTO](docs/Model/FeesDTO.md)
- [FieldError](docs/Model/FieldError.md)
- [FilterPreset](docs/Model/FilterPreset.md)
- [GatewaysResponse](docs/Model/GatewaysResponse.md)
- [HealthCheckDTO](docs/Model/HealthCheckDTO.md)
- [IPDTO](docs/Model/IPDTO.md)
- [IdentityBeneficiaryResponseDTO](docs/Model/IdentityBeneficiaryResponseDTO.md)
- [IdentityCreateRequestDTO](docs/Model/IdentityCreateRequestDTO.md)
- [IdentityCurrentRequestDTO](docs/Model/IdentityCurrentRequestDTO.md)
- [IdentityDTO](docs/Model/IdentityDTO.md)
- [IdentityExportRequestDTO](docs/Model/IdentityExportRequestDTO.md)
- [IdentityExportResponseDTO](docs/Model/IdentityExportResponseDTO.md)
- [IdentityImportRequest](docs/Model/IdentityImportRequest.md)
- [IdentityRefDTO](docs/Model/IdentityRefDTO.md)
- [IdentityRegisterRequestDTO](docs/Model/IdentityRegisterRequestDTO.md)
- [IdentityRegistrationResponseDTO](docs/Model/IdentityRegistrationResponseDTO.md)
- [IdentityUnlockRequestDTO](docs/Model/IdentityUnlockRequestDTO.md)
- [LatestReleaseResponse](docs/Model/LatestReleaseResponse.md)
- [ListIdentitiesResponse](docs/Model/ListIdentitiesResponse.md)
- [ListProposalFilterPresetsResponse](docs/Model/ListProposalFilterPresetsResponse.md)
- [ListProposalsResponse](docs/Model/ListProposalsResponse.md)
- [LocalVersion](docs/Model/LocalVersion.md)
- [LocalVersionsResponse](docs/Model/LocalVersionsResponse.md)
- [LocationDTO](docs/Model/LocationDTO.md)
- [MMNApiKeyRequest](docs/Model/MMNApiKeyRequest.md)
- [MMNGrantVerificationResponse](docs/Model/MMNGrantVerificationResponse.md)
- [MMNLinkRedirectResponse](docs/Model/MMNLinkRedirectResponse.md)
- [MigrationStatusResponse](docs/Model/MigrationStatusResponse.md)
- [MonitoringAgentResponse](docs/Model/MonitoringAgentResponse.md)
- [MystnodesSSOLinkResponse](docs/Model/MystnodesSSOLinkResponse.md)
- [NATTypeDTO](docs/Model/NATTypeDTO.md)
- [NodeStatusResponse](docs/Model/NodeStatusResponse.md)
- [PageableDTO](docs/Model/PageableDTO.md)
- [PaymentChannelDTO](docs/Model/PaymentChannelDTO.md)
- [PaymentOrderOptions](docs/Model/PaymentOrderOptions.md)
- [PaymentOrderRequest](docs/Model/PaymentOrderRequest.md)
- [PaymentOrderResponse](docs/Model/PaymentOrderResponse.md)
- [Price](docs/Model/Price.md)
- [ProposalDTO](docs/Model/ProposalDTO.md)
- [ProviderConsumersCountResponse](docs/Model/ProviderConsumersCountResponse.md)
- [ProviderEarningsSeriesResponse](docs/Model/ProviderEarningsSeriesResponse.md)
- [ProviderSeriesItem](docs/Model/ProviderSeriesItem.md)
- [ProviderSession](docs/Model/ProviderSession.md)
- [ProviderSessionsCountResponse](docs/Model/ProviderSessionsCountResponse.md)
- [ProviderSessionsResponse](docs/Model/ProviderSessionsResponse.md)
- [ProviderSessionsSeriesResponse](docs/Model/ProviderSessionsSeriesResponse.md)
- [ProviderTransferredDataResponse](docs/Model/ProviderTransferredDataResponse.md)
- [ProviderTransferredDataSeriesResponse](docs/Model/ProviderTransferredDataSeriesResponse.md)
- [Quality](docs/Model/Quality.md)
- [QualityInfoResponse](docs/Model/QualityInfoResponse.md)
- [ReferralTokenResponse](docs/Model/ReferralTokenResponse.md)
- [RegistrationPaymentResponse](docs/Model/RegistrationPaymentResponse.md)
- [RemoteVersion](docs/Model/RemoteVersion.md)
- [RemoteVersionsResponse](docs/Model/RemoteVersionsResponse.md)
- [ReportIssueGithubResponse](docs/Model/ReportIssueGithubResponse.md)
- [ServiceAccessPolicies](docs/Model/ServiceAccessPolicies.md)
- [ServiceInfoDTO](docs/Model/ServiceInfoDTO.md)
- [ServiceLocationDTO](docs/Model/ServiceLocationDTO.md)
- [ServiceStartRequestDTO](docs/Model/ServiceStartRequestDTO.md)
- [ServiceStatisticsDTO](docs/Model/ServiceStatisticsDTO.md)
- [SessionConnectivityStatus](docs/Model/SessionConnectivityStatus.md)
- [SessionDTO](docs/Model/SessionDTO.md)
- [SessionListResponse](docs/Model/SessionListResponse.md)
- [SessionStatsAggregatedResponse](docs/Model/SessionStatsAggregatedResponse.md)
- [SessionStatsDTO](docs/Model/SessionStatsDTO.md)
- [SessionStatsDailyResponse](docs/Model/SessionStatsDailyResponse.md)
- [SettleRequestDTO](docs/Model/SettleRequestDTO.md)
- [SettlementDTO](docs/Model/SettlementDTO.md)
- [SettlementListResponse](docs/Model/SettlementListResponse.md)
- [SwitchNodeUIRequest](docs/Model/SwitchNodeUIRequest.md)
- [TermsRequest](docs/Model/TermsRequest.md)
- [TermsResponse](docs/Model/TermsResponse.md)
- [TokenRewardAmount](docs/Model/TokenRewardAmount.md)
- [Tokens](docs/Model/Tokens.md)
- [TransactorFees](docs/Model/TransactorFees.md)
- [UI](docs/Model/UI.md)
- [UserReport](docs/Model/UserReport.md)
- [WithdrawRequestDTO](docs/Model/WithdrawRequestDTO.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `dev`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
