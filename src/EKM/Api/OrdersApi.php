<?php

namespace mrstebo\EKM\Api;

use EKM\Configuration;

class OrdersApi
{
    private $config;

    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }
}
