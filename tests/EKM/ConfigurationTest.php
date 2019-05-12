<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use EKM\Configuration;

final class ConfigurationTest extends TestCase
{
    public function testClientId()
    {
        $config = Configuration::create()->setClientId("test");
        $this->assertEquals("test", $config->getClientId());
    }

    public function testClientIdHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals("", $config->getClientId());
    }

    public function testClientSecret()
    {
        $config = Configuration::create()->setClientSecret("test");
        $this->assertEquals("test", $config->getClientSecret());
    }

    public function testClientSecretHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals("", $config->getClientSecret());
    }

    public function testRedirectUri()
    {
        $config = Configuration::create()->setRedirectUri("test");
        $this->assertEquals("test", $config->getRedirectUri());
    }
    
    public function testRedirectUriHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals("", $config->getRedirectUri());
    }

    public function testAccessToken()
    {
        $config = Configuration::create()->setAccessToken("test");
        $this->assertEquals("test", $config->getAccessToken());
    }

    public function testAccessTokenHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals("", $config->getAccessToken());
    }

    public function testHost()
    {
        $config = Configuration::create()->setHost("test");
        $this->assertEquals("test", $config->getHost());
    }

    public function testHostHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals("https://api.ekm.net", $config->getHost());
    }

    public function testUserAgent()
    {
        $config = Configuration::create()->setUserAgent("test");
        $this->assertEquals("test", $config->getUserAgent());
    }

    public function testUserAgentHasDefault()
    {
        $config = Configuration::create();
        $this->assertEquals("EKM-PHP-Client/1.0.0/PHP", $config->getUserAgent());
    }
}