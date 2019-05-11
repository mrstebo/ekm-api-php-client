<?php

namespace EKM;

class EkmClient
{
    private $config;

    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }

    public function getOrdersApi()
    {
        return new Api\OrdersApi($this->config);
    }

    public function getOrderStatusesApi()
    {
        return new Api\OrderStatusesApi($this->config);
    }
}
