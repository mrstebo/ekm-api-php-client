<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use \DateTime;
use EKM\Models\Order;

final class OrderTest extends TestCase
{
    public function testGetId()
    {
        $order = new Order([ 'id' => 12]);

        $this->assertEquals(12, $order->getId());
    }

    public function testGetOrderNumber()
    {
        $order = new Order([ 'order_number' => 'test123' ]);

        $this->assertEquals('test123', $order->getOrderNumber());
    }

    public function testGetOrderDate()
    {
        $order = new Order([ 'order_date' => '1997-07-23T03:54:26.014379Z' ]);

        $orderDate = $order->getOrderDate();

        $this->assertInstanceOf(DateTime::class, $orderDate);
        $this->assertEquals('1997', $orderDate->format("Y"));
        $this->assertEquals("07", $orderDate->format("m"));
        $this->assertEquals("23", $orderDate->format("d"));
        $this->assertEquals("03", $orderDate->format("H"));
        $this->assertEquals("54", $orderDate->format("i"));
        $this->assertEquals("26", $orderDate->format("s"));
        $this->assertEquals("014379", $orderDate->format("u"));
    }

    public function testGetIsConfirmed()
    {
        $order = new Order([ 'is_confirmed' => true ]);

        $this->assertTrue($order->getIsConfirmed());
    }

    public function testGetSubTotal()
    {
        $order = new Order([ 'sub_total' => 0.6847536497212731 ]);

        $this->assertEquals(0.6847536497212731, $order->getSubTotal());
    }

    public function testGetTotalDelivery()
    {
        $order = new Order([ 'total_delivery' => 0.4697027357619734 ]);

        $this->assertEquals(0.4697027357619734, $order->getTotalDelivery());
    }

    public function testGetTotalTax()
    {
        $order = new Order([ 'total_tax' => 0.13229455339363522 ]);

        $this->assertEquals(0.13229455339363522, $order->getTotalTax());
    }

    public function testGetTotalCost()
    {
        $order = new Order([ 'total_cost' => 0.571873842539207 ]);

        $this->assertEquals(0.571873842539207, $order->getTotalCost());
    }

    public function testGetStatus()
    {
        $order = new Order([ 'status' => 'FAILED' ]);

        $this->assertEquals('FAILED', $order->getStatus());
    }

    public function testGetPaymentStatus()
    {
        $order = new Order([ 'payment_status' => 'UNKNOWN' ]);

        $this->assertEquals('UNKNOWN', $order->getPaymentStatus());
    }

    public function testGetDeliveryMethod()
    {
        $order = new Order([ 'delivery_method' => 'post' ]);

        $this->assertEquals('post', $order->getDeliveryMethod());
    }

    public function testGetTransactionId()
    {
        $order = new Order([ 'transaction_id' => '34de096b-aa17-4ecd-91da-ec254e667c79' ]);

        $this->assertEquals('34de096b-aa17-4ecd-91da-ec254e667c79', $order->getTransactionId());
    }

    public function testGetTransactionStatus()
    {
        $order = new Order([ 'transaction_status' => 'COMPLETE' ]);

        $this->assertEquals('COMPLETE', $order->getTransactionStatus());
    }

    public function testGetOrderType()
    {
        $order = new Order([ 'order_type' => 'PHONE' ]);

        $this->assertEquals('PHONE', $order->getOrderType());
    }

    public function testGetUseShippingAddress()
    {
        $order = new Order([ 'use_shipping_address' => true ]);

        $this->assertTrue($order->getUseShippingAddress());
    }

    public function testGetShippingAddress()
    {
        $order = new Order([ 'shipping_address' => '' ]);

        $this->assertEquals('x', $order->getShippingAddress());
    }

    public function testGetInternalNotes()
    {
        $order = new Order([ 'internal_notes' => 'test notes' ]);

        $this->assertEquals('test notes', $order->getInternalNotes());
    }

    public function testGetCustomerFacingNotes()
    {
        $order = new Order([ 'customer_facing_notes' => 'test notes' ]);

        $this->assertEquals('test notes', $order->getCustomerFacingNotes());
    }

    public function testGetEmailed()
    {
        $order = new Order([ 'emailed' => true ]);

        $this->assertTrue($order->getEmailed());
    }

    public function testGetDiscounts()
    {
        $order = new Order([ 'discounts' => 'test1' ]);

        $this->assertEquals('test1', $order->getDiscounts());
    }

    public function testGetDiscountsTotal()
    {
        $order = new Order([ 'discounts_total' => 3.42 ]);

        $this->assertEquals(3.42, $order->getDiscountsTotal());
    }

    public function testGetShippingCompany()
    {
        $order = new Order([ 'shipping_company' => 'UPS' ]);

        $this->assertEquals('UPS', $order->getShippingCompany());
    }

    public function testGetIpAddress()
    {
        $order = new Order([ 'ip_address' => '30.23.42.102' ]);

        $this->assertEquals('30.23.42.102', $order->getIpAddress());
    }

    public function testGetGuid()
    {
        $order = new Order([ 'guid' => 'test-guid' ]);

        $this->assertEquals('test-guid', $order->getGuid());
    }

    public function testGetItems()
    {
        $order = new Order([ 'items' => '' ]);

        $this->assertEquals('x', $order->getItems());
    }

    public function testGetCustomerDetails()
    {
        $order = new Order([ 'customer_details' => '' ]);

        $this->assertEquals('x', $order->getCustomerDetails());
    }
}