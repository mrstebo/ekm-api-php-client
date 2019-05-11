<?php

namespace EKM\Api;

use EKM\Configuration;

class OrderStatusesApi
{
    private $config;

    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }
}
