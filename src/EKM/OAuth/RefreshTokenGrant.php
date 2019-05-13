<?php

namespace EKM\OAuth;

use EKM\Models\RefreshTokenResponse;

class RefreshTokenGrant
{
    private $client;
    private $config;

    /**
     * Constructs an instance of the RefreshTokenGrant class
     *
     * @param EkmClient $client The EKM Client
     * @param Configuration $config The configuration
     */
    public function __construct($client, $config)
    {
        $this->client = $client;
        $this->config = $config;
    }

    /**
     * Makes a call to refresh the access token
     *
     * @return RefreshTokenResponse
     */
    public function call($refreshToken)
    {
        $form = [
            'client_id' => $this->config->getClientId(),
            'client_secret' => $this->config->getClientSecret(),
            'grant_type' => 'refresh_token',
            'refresh_token' => $refreshToken,
            'scope' => implode(',', $this->config->getScopes())
        ];
        $response = $this->client->request('POST', '/connect/token', ['form_params' => $form]);

        return new RefreshTokenResponse($response);
    }
}