<?php

namespace EKM\Api;

use EKM\Models\GetOrderStatusesResponse;

class OrderStatusesApi
{
    private $client;

    /**
     * Constructs an instance of the Order Statuses API
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
        $response = $this->client->request('GET', '/v1/settings/orderstatuses');
        return new GetOrderStatusesResponse($response);
    }
}