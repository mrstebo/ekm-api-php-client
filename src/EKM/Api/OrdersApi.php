<?php

namespace EKM\Api;

use EKM\EkmClient;

class OrdersApi
{
    private $client;

    public function __construct(EkmClient $client)
    {
        $this->client = $client;
    }
}
