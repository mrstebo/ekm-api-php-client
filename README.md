<p align="center">
    <a href="https://www.ekm.com">
        <img src="//assets/ekm-logo-EKMBLUE-230x130.png">
    </a>
</p>

<p align="center">
    <a href="https://travis-ci.org/mrstebo/ekm-api-php-client" rel="nofollow">
        <img src="https://camo.githubusercontent.com/b2ccb10fb510875d8ebb2ee39c41a025ab44e461/68747470733a2f2f7472617669732d63692e6f72672f6d72737465626f2f656b6d2d6170692d7068702d636c69656e742e7376673f6272616e63683d6d6173746572" alt="Build Status" data-canonical-src="https://travis-ci.org/mrstebo/ekm-api-php-client.svg?branch=master" style="max-width:100%;">
    </a>
</p>

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