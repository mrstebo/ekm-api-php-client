<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use EKM\Configuration;

final class ConfigurationTest extends TestCase
{
    public function testGetClientId()
    {
        $config = Configuration::create()->setClientId('test');
        $this->assertEquals('test', $config->getClientId());
    }

    public function testGetClientIdHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals('', $config->getClientId());
    }

    public function testGetClientSecret()
    {
        $config = Configuration::create()->setClientSecret('test');
        $this->assertEquals('test', $config->getClientSecret());
    }

    public function testGetClientSecretHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals('', $config->getClientSecret());
    }

    public function testGetRedirectUri()
    {
        $config = Configuration::create()->setRedirectUri('test');
        $this->assertEquals('test', $config->getRedirectUri());
    }

    public function testGetRedirectUriHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals('', $config->getRedirectUri());
    }

    public function testGetScopes()
    {
        $scopes = ['tempest.products.read', 'tempest.products.write'];
        $config = Configuration::create()->setScopes($scopes);
        $this->assertEquals($scopes, $config->getScopes());
    }

    public function testGetScopesHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals([], $config->getScopes());
    }

    public function testGetAccessToken()
    {
        $config = Configuration::create()->setAccessToken('test');
        $this->assertEquals('test', $config->getAccessToken());
    }

    public function testGetAccessTokenHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals('', $config->getAccessToken());
    }

    public function testGetHost()
    {
        $config = Configuration::create()->setHost('test');
        $this->assertEquals('test', $config->getHost());
    }

    public function testGetHostHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals('https://api.ekm.net', $config->getHost());
    }

    public function testGetUserAgent()
    {
        $config = Configuration::create()->setUserAgent('test');
        $this->assertEquals('test', $config->getUserAgent());
    }

    public function testGetUserAgentHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals('EKM-PHP-Client/1.0.0/PHP', $config->getUserAgent());
    }
}