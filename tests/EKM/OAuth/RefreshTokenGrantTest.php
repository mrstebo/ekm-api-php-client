<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use EKM\Configuration;
use EKM\EkmClient;
use EKM\Models\RefreshTokenResponse;
use EKM\OAuth\RefreshTokenGrant;

final class RefreshTokenGrantTest extends TestCase
{
    public function testCall()
    {
        $client = $this->createMock(EkmClient::class);
        $config = Configuration::create()
            ->setClientId('123')
            ->setClientSecret('abc')
            ->setScopes(['tempest.products.read', 'tempest.products.write']);
        $grant = new RefreshTokenGrant($client, $config);

        $client
            ->expects($this->once())
            ->method('request')
            ->with('POST', '/connect/token', [
                'form_params' => [
                    'client_id' => '123',
                    'client_secret' => 'abc',
                    'grant_type' => 'refresh_token',
                    'refresh_token' => 'abc-123-xyz',
                    'scope' => 'tempest.products.read,tempest.products.write'
                ]
            ])
            ->willReturn([
                'access_token' => 'my-access-token',
                'refresh_token' => 'my-refresh-token',
                'expires_in' => 3600
            ]);

        $result = $grant->call('abc-123-xyz');

        $this->assertInstanceOf(RefreshTokenResponse::class, $result);
        $this->assertEquals('my-access-token', $result->getAccessToken());
        $this->assertEquals('my-refresh-token', $result->getRefreshToken());
        $this->assertEquals(3600, $result->getExpiresIn());
    }
}