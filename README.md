# ekm-api-php-client
A PHP client library for accessing EKM APIs

## Getting started

Below is an example of how to use the client:

```php
$config = new ConfigurationBuilder()
    ->withClientId("my-client-id")
    ->withClientSecret("my-client-secret")
    ->withRedirectUri("https://my-site.com/callback")
    ->withAccessToken("my-access-token")
    ->build();
$client = new EkmClient($config);

// Refresh the token (automatically sets the access token)
$refreshTokenResponse = $client->refreshToken();

// Get an order statuses response from the API.
$orderStatusesResponse = $client->orderStatuses()->getOrderStatuses();

```