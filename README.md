[![Build Status](https://travis-ci.org/mrstebo/ekm-api-php-client.svg?branch=master)](https://travis-ci.org/mrstebo/ekm-api-php-client)

# ekm-api-php-client
A PHP client library for accessing EKM APIs

## Getting started

Below is an example of how to use the client:

```php
$config = Configuration::create()
    ->setClientId('my-client-id')
    ->setClientSecret('my-client-secret')
    ->setRedirectUri('https://my-site.com/callback')
    ->setScopes(['tempest.products.read', 'tempest.products.write'])
    ->setAccessToken('my-access-token');
$client = new EkmClient($config);

// Refresh the token (automatically sets the access token)
$refreshTokenResponse = $client->refreshAccessToken('my-refresh-token');

// Get an order statuses response from the API.
$orderStatusesResponse = $client->orderStatuses()->getOrderStatuses();

```