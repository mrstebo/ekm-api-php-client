<?php

namespace EKM;

use EKM\Api\OrdersApi;
use EKM\Api\OrderStatusesApi;

class EkmClient
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function getOrdersApi()
    {
        return new OrdersApi($this->config);
    }

    public function getOrderStatusesApi()
    {
        return new OrderStatusesApi($this->config);
    }
}
