<?php

namespace EKM\OrderStatuses;

use EKM\OrderStatuses\GetOrderStatuses\GetOrderStatusesRequest;
use EKM\OrderStatuses\GetOrderStatuses\GetOrderStatusesResponse;

class OrderStatusesApi
{
    private $client;

    /**
     * Constructs an instance of the OrderStatusesApi class
     *
     * @param EkmClient $client The EKM Client
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * Requests order statuses from the API
     *
     * @return GetOrderStatusesResponse
     */
    public function getOrderStatuses()
    {
        $request = new GetOrderStatusesRequest($this->client);

        return $request->execute();
    }
}