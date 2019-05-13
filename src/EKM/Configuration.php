<?php

namespace EKM;

class Configuration
{
    /**
     * Client ID for OAuth
     *
     * @var string
     */
    private $clientId = '';

    /**
     * Client Secret for OAuth
     *
     * @var string
     */
    private $clientSecret = '';

    /**
     * Redirect URI for OAuth
     *
     * @var string
     */
    private $redirectUri = '';

    /**
     * The scopes (permissions) for OAuth
     *
     * @var string[]
     */
    private $scopes = [];

    /**
     * Access token for OAuth
     *
     * @var string
     */
    private $accessToken = '';

    /**
     * The host
     *
     * @var string
     */
    private $host = 'https://api.ekm.net';

    /**
     * User agent of the HTTP request, set to "EKM-PHP-Client" by default
     *
     * @var string
     */
    private $userAgent = "EKM-PHP-Client/1.0.0/PHP";

    private function __construct()
    {
        // Use Configuration::create();
    }

    /**
     * Sets the client ID for OAuth
     *
     * @param string $clientId Client ID for OAuth
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * Gets the client ID for OAuth
     *
     * @return string Client ID for OAuth
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Sets the client secret for OAuth
     *
     * @param string $clientSecret Client secret for OAuth
     *
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }

    /**
     * Gets the client secret for OAuth
     *
     * @return string Client secret for OAuth
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Sets the redirect URI for OAuth
     *
     * @param string $redirectUri Redirect URI for OAuth
     *
     * @return $this
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;
        return $this;
    }

    /**
     * Gets the redirect URI for OAuth
     *
     * @return string Redirect URI for OAuth
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * Sets the scopes for OAuth
     *
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->scopes = $scopes;
        return $this;
    }

    /**
     * Gets the scopes for OAuth
     *
     * @return string[] Scopes for OAuth
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Creates a new configuration instance
     *
     * @return Configuration
     */
    public static function create()
    {
        return new Configuration();
    }
}