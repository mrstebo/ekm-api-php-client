<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use EKM\Models\ShippingAddress;

final class ShippingAddressTest extends TestCase
{
    public function testGetId()
    {
        $shippingAddress = new ShippingAddress([ 'id' => 12]);

        $this->assertEquals(12, $shippingAddress->getId());
    }

    public function testGetCustomerId()
    {
        $shippingAddress = new ShippingAddress([ 'customer_id' => 12 ]);

        $this->assertEquals(12, $shippingAddress->getCustomerId());
    }

    public function testGetFirstName()
    {
        $shippingAddress = new ShippingAddress([ 'first_name' => 'John' ]);

        $this->assertEquals('John', $shippingAddress->getFirstName());
    }

    public function testGetLastName()
    {
        $shippingAddress = new ShippingAddress([ 'last_name' => 'Smith' ]);

        $this->assertEquals('Smith', $shippingAddress->getLastName());
    }

    public function testGetIsPreferredBillingAddress()
    {
        $shippingAddress = new ShippingAddress([ 'is_preferred_billing_address' => true ]);

        $this->assertTrue($shippingAddress->getIsPreferredBillingAddress());
    }

    public function testGetIsPreferredShippingAddress()
    {
        $shippingAddress = new ShippingAddress([ 'is_preferred_shipping_address' => true ]);

        $this->assertTrue($shippingAddress->getIsPreferredShippingAddress());
    }

    public function testGetCompany()
    {
        $shippingAddress = new ShippingAddress([ 'company' => 'Test Company' ]);

        $this->assertEquals('Test Company', $shippingAddress->getCompany());
    }

    public function testGetAddress()
    {
        $shippingAddress = new ShippingAddress([ 'address' => '14 Jersey Street' ]);

        $this->assertEquals('14 Jersey Street', $shippingAddress->getAddress());
    }

    public function testGetAddress2()
    {
        $shippingAddress = new ShippingAddress([ 'address2' => 'Off Test Close' ]);

        $this->assertEquals('Off Test Close', $shippingAddress->getAddress2());
    }

    public function testGetTown()
    {
        $shippingAddress = new ShippingAddress([ 'town' => 'Manchester' ]);

        $this->assertEquals('Manchester', $shippingAddress->getTown());
    }

    public function testGetCounty()
    {
        $shippingAddress = new ShippingAddress([ 'county' => 'Lancashire' ]);

        $this->assertEquals('Lancashire', $shippingAddress->getCounty());
    }

    public function testGetPostCode()
    {
        $shippingAddress = new ShippingAddress([ 'post_code' => 'KP1 0UC' ]);

        $this->assertEquals('KP1 0UC', $shippingAddress->getPostCode());
    }

    public function testGetCountry()
    {
        $shippingAddress = new ShippingAddress([ 'country' => 'UK' ]);

        $this->assertEquals('UK', $shippingAddress->getCountry());
    }

    public function testGetFriendlyCountry()
    {
        $shippingAddress = new ShippingAddress([ 'friendly_country' => 'United Kingdom' ]);

        $this->assertEquals('United Kingdom', $shippingAddress->getFriendlyCountry());
    }

    public function testGetTelephone()
    {
        $shippingAddress = new ShippingAddress([ 'telephone' => '(574) 998-8421' ]);

        $this->assertEquals('(574) 998-8421', $shippingAddress->getTelephone());
    }

    public function testGetFax()
    {
        $shippingAddress = new ShippingAddress([ 'fax' => '673.594.7305' ]);

        $this->assertEquals('673.594.7305', $shippingAddress->getFax());
    }
}