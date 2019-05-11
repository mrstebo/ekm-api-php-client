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
        $this->http = $http;
    }

    public function request(string $method, string $uri, array $options = [])
    {
        $token = $this->config->getAccessToken();
        if (isset($token))
        {
            $request = $request['headers']['Authorization'] = 'Bearer '.$token;
        }
        return $this->http->request($method, $uri, $options);
    }

    public function getOrdersApi(): Api\OrdersApi
    {
        return new Api\OrdersApi($this);
    }

    public function getOrderStatusesApi(): Api\OrderStatusesApi
    {
        return new Api\OrderStatusesApi($this);
    }
}
