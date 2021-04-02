<?php

declare(strict_types=1);

use EKM\OAuth\RefreshToken\RefreshTokenResponse;
use PHPUnit\Framework\TestCase;

final class RefreshTokenResponseTest extends TestCase
{
    public function testConstructorUsingNull()
    {
        $response = new RefreshTokenResponse(null);

        $this->assertEquals('', $response->getAccessToken());
        $this->assertEquals('', $response->getRefreshToken());
        $this->assertEquals(0, $response->getExpiresIn());
    }

    public function testGetAccessToken()
    {
        $response = new RefreshTokenResponse([ 'access_token' => 'test' ]);

        $this->assertEquals('test', $response->getAccessToken());
    }

    public function testGetRefreshToken()
    {
        $response = new RefreshTokenResponse([ 'refresh_token' => 'test' ]);

        $this->assertEquals('test', $response->getRefreshToken());
    }

    public function testGetExpiresIn()
    {
        $response = new RefreshTokenResponse([ 'expires_in' => 3600 ]);

        $this->assertEquals(3600, $response->getExpiresIn());
    }
}