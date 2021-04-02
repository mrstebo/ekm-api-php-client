<?php

declare(strict_types=1);

use EKM\Configuration;
use EKM\EkmClient;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class EkmClientTest extends TestCase
{
    public function testRefreshAccessToken()
    {
        $config = Configuration::create();
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar'], json_encode([
                'access_token' => 'my-access-token',
                'refresh_token' => 'my-refresh-token',
                'expires_in' => 3600
            ]))
        ]);
        $handler = HandlerStack::create($mock);
        $http = new Client(['handler' => $handler]);
        $client = new EkmClient($config, $http);

        $result = $client->refreshAccessToken('abc-123-xyz');

        $this->assertInstanceOf(EKM\OAuth\RefreshToken\RefreshTokenResponse::class, $result);
        $this->assertEquals('my-access-token', $result->getAccessToken());
        $this->assertEquals('my-refresh-token', $result->getRefreshToken());
        $this->assertEquals(3600, $result->getExpiresIn());
        $this->assertEquals('my-access-token', $config->getAccessToken());
    }

    public function testOrderStatuses()
    {
        $config = Configuration::create();
        $client = new EkmClient($config);

        $this->assertInstanceOf(
            EKM\OrderStatuses\OrderStatusesApi::class,
            $client->orderStatuses()
        );
    }
}