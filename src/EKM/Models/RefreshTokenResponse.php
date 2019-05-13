<?php

namespace EKM\Models;

class RefreshTokenResponse
{
    private $accessToken;
    private $refreshToken;
    private $expiresIn;

    public function __construct($response)
    {
        $this->accessToken = strval($response['access_token']);
        $this->refreshToken = strval($response['refresh_token']);
        $this->expiresIn = intval($response['expires_in']);
    }

    /**
     * Gets the access token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Gets the refresh token
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * Gets the expiry time of the token
     *
     * @return integer
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }
}