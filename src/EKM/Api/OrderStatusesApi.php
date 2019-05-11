<?php

namespace EKM\Api;

use EKM\EkmClient;

class OrderStatusesApi
{
    private $client;

    public function __construct(EkmClient $client)
    {
        $this->client = $client;
    }

    public function getOrderStatuses()
    {
        $response = $this->client->request('GET', '/v1/settings/orderstatuses');
        return $response;
    }
}
