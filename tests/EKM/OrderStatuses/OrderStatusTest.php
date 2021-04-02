<?php

declare(strict_types=1);

use EKM\OrderStatuses\OrderStatus;
use PHPUnit\Framework\TestCase;

final class OrderStatusTest extends TestCase
{
    public function testGetName()
    {
        $orderStatus = new OrderStatus([ 'name' => 'Pending']);

        $this->assertEquals('Pending', $orderStatus->getName());
    }

    public function testGetColour()
    {
        $orderStatus = new OrderStatus([ 'colour' => '#000099']);

        $this->assertEquals('#000099', $orderStatus->getColour());
    }

    public function testGetShowInQuickStats()
    {
        $orderStatus = new OrderStatus([ 'show_in_quick_stats' => true ]);

        $this->assertTrue($orderStatus->getShowInQuickStats());
    }
}