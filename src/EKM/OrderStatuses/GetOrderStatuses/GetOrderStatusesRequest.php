<?php

namespace EKM\OrderStatuses\GetOrderStatuses;

use EKM\EkmClient;

class GetOrderStatusesRequest
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
    public function execute()
    {
        $response = $this->client->request('GET', '/v1/settings/orderstatuses');

        return new GetOrderStatusesResponse($response);
    }
}