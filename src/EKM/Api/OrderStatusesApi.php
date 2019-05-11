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
}
