<?php

namespace EKM;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\HandlerStack;

class EkmClient
{
    private $config;
    private $http;

    public function __construct(Configuration $config, Guzzle $http = null)
    {
        $this->config = $config;
        $this->http = $http ?: new Guzzle([
            'base_uri' => $config->getHost()
        ]);
    }

    public function request(string $method, string $uri, array $options = [])
    {
        $token = $this->config->getAccessToken();
        if (isset($token))
        {
            $request = $request['headers']['Authorization'] = 'Bearer '.$token;
        }
        $response = $this->http->request($method, $uri, $options);
        $body = $response->getBody();
        $json = json_decode($body->getContents(), true);
        return $json;
    }

    /**
     * Get the Order Statuses API
     *
     * @return OrderStatusesApi
     */
    public function orderStatuses()
    {
        return new Api\OrderStatusesApi($this);
    }
}
