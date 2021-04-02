<?php

namespace EKM\OAuth\RefreshToken;

class RefreshTokenResponse
{
    private $response;

    public function __construct($response)
    {
        $this->response = $response ?: [];
    }

    /**
     * Gets the access token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return array_key_exists('access_token', $this->response)
            ? $this->response['access_token']
            : '';
    }

    /**
     * Gets the refresh token
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return array_key_exists('refresh_token', $this->response)
            ? $this->response['refresh_token']
            : '';
    }

    /**
     * Gets the expiry time of the token
     *
     * @return integer
     */
    public function getExpiresIn()
    {
        return array_key_exists('expires_in', $this->response)
            ? $this->response['expires_in']
            : 0;
    }
}