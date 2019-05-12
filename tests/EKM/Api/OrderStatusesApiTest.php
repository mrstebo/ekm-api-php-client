<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use EKM\EkmClient;
use EKM\Api\OrderStatusesApi;
use EKM\Models\GetOrderStatusesResponse;

final class OrderStatusesApiTest extends TestCase
{
    public function testGetOrderStatuses()
    {
        $client = $this->createMock(EkmClient::class);
        $api = new OrderStatusesApi($client);

        $client->method('request')
            ->willReturn([
                'meta' => [],
                'links' => [],
                'data' => [
                    'statuses' => [
                        [
                            'name' => 'Test',
                            'colour' => '#00FF00',
                            'show_in_quick_stats' => true
                        ]
                    ]
                ]
            ]);

        $result = $api->getOrderStatuses();

        $this->assertInstanceOf(GetOrderStatusesResponse::class, $result);
        $this->assertEquals(1, sizeof($result->getStatuses()));
    }
}