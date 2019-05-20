<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use EKM\Models\OrderItem;

final class OrderItemTest extends TestCase
{
    public function testGetId()
    {
        $orderItem = new OrderItem([ 'id' => 123 ]);

        $this->assertEquals(123, $orderItem->getId());
    }

    public function testGetOrderId()
    {
        $orderItem = new OrderItem([ 'order_id' => 123 ]);

        $this->assertEquals(123, $orderItem->getOrderId());
    }

    public function testGetItemDelivery()
    {
        $orderItem = new OrderItem([ 'item_delivery' => 3.28 ]);

        $this->assertEquals(3.28, $orderItem->getItemDelivery());
    }

    public function testGetItemDiscount()
    {
        $orderItem = new OrderItem([ 'item_discount' => 0.47 ]);

        $this->assertEquals(0.47, $orderItem->getItemDiscount());
    }

    public function testGetItemName()
    {
        $orderItem = new OrderItem([ 'item_name' => 'My Product' ]);

        $this->assertEquals('My Product', $orderItem->getItemName());
    }

    public function testGetItemPrice()
    {
        $orderItem = new OrderItem([ 'item_price' => 2.7 ]);

        $this->assertEquals(2.7, $orderItem->getItemPrice());
    }

    public function testGetItemTax()
    {
        $orderItem = new OrderItem([ 'item_tax' => 3.53 ]);

        $this->assertEquals(3.53, $orderItem->getItemTax());
    }

    public function testGetItemTaxId()
    {
        $orderItem = new OrderItem([ 'item_tax_id' => 837 ]);

        $this->assertEquals(837, $orderItem->getItemTaxId());
    }

    public function testGetItemTaxRate()
    {
        $orderItem = new OrderItem([ 'item_tax_rate' => 2.53 ]);

        $this->assertEquals(2.53, $orderItem->getItemTaxRate());
    }

    public function testGetQuantity()
    {
        $orderItem = new OrderItem([ 'quantity' => 52 ]);

        $this->assertEquals(52, $orderItem->getQuantity());
    }

    public function testGetOriginalItemId()
    {
        $orderItem = new OrderItem([ 'original_item_id' => 606 ]);

        $this->assertEquals(606, $orderItem->getOriginalItemId());
    }
}
