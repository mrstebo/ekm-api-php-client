<?php

declare(strict_types=1);

use EKM\OrderStatuses\GetOrderStatuses\GetOrderStatusesResponse;
use EKM\OrderStatuses\OrderStatus;
use PHPUnit\Framework\TestCase;

final class GetOrderStatusesResponseTest extends TestCase
{
    public function testGetStatuses()
    {
        $response = new GetOrderStatusesResponse([
            'data' => [
                'statuses' => array([
                    'name' => 'Pending',
                    'colour' => '#000099',
                    'show_in_quick_stats' => true
                ])
            ]
        ]);
        $statuses = $response->getStatuses();

        $this->assertEquals(1, sizeof($statuses));
        $this->assertInstanceOf(OrderStatus::class, $statuses[0]);
        $this->assertEquals('Pending', $statuses[0]->getName());
        $this->assertEquals('#000099', $statuses[0]->getColour());
        $this->assertTrue($statuses[0]->getShowInQuickStats());
    }
}