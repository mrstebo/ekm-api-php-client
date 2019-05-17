<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use \DateTime;
use EKM\Models\CustomerDetails;
use EKM\Models\Order;
use EKM\Models\ShippingAddress;

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
        $this->assertEquals('1997-07-23T03:54:26+00:00', $orderDate->format('c'));
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
        $order = new Order([ 'shipping_address' => [
            'id' => 246697252,
            'customer_id' => 485430526,
            'first_name' => 'Nichole',
            'last_name' => 'Volkman',
            'created_date' => '2018-11-28T07:27:03.142518Z',
            'modified_date' => '2019-03-24T21:48:45.7682812Z',
            'is_preferred_billing_address' => true,
            'is_preferred_shipping_address' => false,
            'company' => 'Collier Group',
            'address' => '81658 Schowalter Crossing',
            'address2' => 'Germainechester',
            'town' => 'Bednarstad',
            'county' => 'Berkshire',
            'country' => 'GB',
            'friendly_country' => 'United Kingdom',
            'post_code' => 'GD7 1NT',
            'telephone' => '458.437.1285 x8162',
            'fax' => '(737) 711-9542 x188'
        ] ]);

        $shippingAddress = $order->getShippingAddress();

        $this->assertInstanceOf(ShippingAddress::class, $shippingAddress);
        $this->assertEquals(246697252, $shippingAddress->getId());
        $this->assertEquals(485430526, $shippingAddress->getCustomerId());
        $this->assertEquals('Nichole', $shippingAddress->getFirstName());
        $this->assertEquals('Volkman', $shippingAddress->getLastName());
        $this->assertEquals('2018-11-28T07:27:03+00:00', $shippingAddress->getCreatedDate()->format('c'));
        $this->assertEquals('2019-03-24T21:48:45+00:00', $shippingAddress->getModifiedDate()->format('c'));
        $this->assertTrue($shippingAddress->getIsPreferredBillingAddress());
        $this->assertFalse($shippingAddress->getIsPreferredShippingAddress());
        $this->assertEquals('Collier Group', $shippingAddress->getCompany());
        $this->assertEquals('81658 Schowalter Crossing', $shippingAddress->getAddress());
        $this->assertEquals('Germainechester', $shippingAddress->getAddress2());
        $this->assertEquals('Bednarstad', $shippingAddress->getTown());
        $this->assertEquals('Berkshire', $shippingAddress->getCounty());
        $this->assertEquals('GB', $shippingAddress->getCountry());
        $this->assertEquals('United Kingdom', $shippingAddress->getFriendlyCountry());
        $this->assertEquals('GD7 1NT', $shippingAddress->getPostCode());
        $this->assertEquals('458.437.1285 x8162', $shippingAddress->getTelephone());
        $this->assertEquals('(737) 711-9542 x188', $shippingAddress->getFax());
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
        $order = new Order([ 'customer_details' => [
            'customer_id' => 2314232,
            'email_address' => 'tomas_volkman@gmail.com',
            'first_name' => 'Tomas',
            'last_name' => 'Volkman',
            'company' => 'Durgan, Quitzon and Ruecker',
            'address' => '32324 O\'Keefe Brooks',
            'address2' => 'Giovannychester',
            'town' => 'Thompsonville',
            'county' => 'Buckinghamshire',
            'post_code' => 'HO3 2FS',
            'country' => 'GB',
            'telephone' => '887-419-3882 x627',
            'fax' => '(564) 527-7913',
            'billing_address_verified' => true
        ] ]);

        $customerDetails = $order->getCustomerDetails();

        $this->assertInstanceOf(CustomerDetails::class, $customerDetails);
        $this->assertEquals(2314232, $customerDetails->getCustomerId());
        $this->assertEquals('tomas_volkman@gmail.com', $customerDetails->getEmailAddress());
        $this->assertEquals('Tomas', $customerDetails->getFirstName());
        $this->assertEquals('Volkman', $customerDetails->getLastName());
        $this->assertEquals('Durgan, Quitzon and Ruecker', $customerDetails->getCompany());
        $this->assertEquals('32324 O\'Keefe Brooks', $customerDetails->getAddress());
        $this->assertEquals('Giovannychester', $customerDetails->getAddress2());
        $this->assertEquals('Thompsonville', $customerDetails->getTown());
        $this->assertEquals('Buckinghamshire', $customerDetails->getCounty());
        $this->assertEquals('HO3 2FS', $customerDetails->getPostCode());
        $this->assertEquals('GB', $customerDetails->getCountry());
        $this->assertEquals('887-419-3882 x627', $customerDetails->getTelephone());
        $this->assertEquals('(564) 527-7913', $customerDetails->getFax());
        $this->assertTrue($customerDetails->getBillingAddressVerified());
    }
}