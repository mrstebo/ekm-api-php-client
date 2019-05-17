<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use EKM\Models\CustomerDetail;

final class CustomerDetailTest extends TestCase
{
    public function testGetCustomerId()
    {
        $customerDetail = new CustomerDetail([ 'customer_id' => 2314232 ]);

        $this->assertEquals(2314232, $customerDetail->getCustomerId());
    }

    public function testGetEmailAddress()
    {
        $customerDetail = new CustomerDetail([ 'email_address' => 'tomas_volkman@gmail.com' ]);

        $this->assertEquals('tomas_volkman@gmail.com', $customerDetail->getEmailAddress());
    }

    public function testGetFirstName()
    {
        $customerDetail = new CustomerDetail([ 'first_name' => 'Tomas' ]);

        $this->assertEquals('Tomas', $customerDetail->getFirstName());
    }

    public function testGetLastName()
    {
        $customerDetail = new CustomerDetail([ 'last_name' => 'Volkman' ]);

        $this->assertEquals('Volkman', $customerDetail->getLastName());
    }

    public function testGetCompany()
    {
        $customerDetail = new CustomerDetail([ 'company' => 'Durgan, Quitzon and Ruecker' ]);

        $this->assertEquals('Durgan, Quitzon and Ruecker', $customerDetail->getCompany());
    }

    public function testGetAddress()
    {
        $customerDetail = new CustomerDetail([ 'address' => '32324 O\'Keefe Brooks' ]);

        $this->assertEquals('32324 O\'Keefe Brooks', $customerDetail->getAddress());
    }

    public function testGetAddress2()
    {
        $customerDetail = new CustomerDetail([ 'address2' => 'Giovannychester' ]);

        $this->assertEquals('Giovannychester', $customerDetail->getAddress2());
    }

    public function testGetTown()
    {
        $customerDetail = new CustomerDetail([ 'town' => 'Thompsonville' ]);

        $this->assertEquals('Thompsonville', $customerDetail->getTown());
    }

    public function testGetCounty()
    {
        $customerDetail = new CustomerDetail([ 'county' => 'Buckinghamshire' ]);

        $this->assertEquals('Buckinghamshire', $customerDetail->getCounty());
    }

    public function testGetPostCode()
    {
        $customerDetail = new CustomerDetail([ 'post_code' => 'HO3 2FS' ]);

        $this->assertEquals('HO3 2FS', $customerDetail->getPostCode());
    }

    public function testGetCountry()
    {
        $customerDetail = new CustomerDetail([ 'country' => 'GB' ]);

        $this->assertEquals('GB', $customerDetail->getCountry());
    }

    public function testGetTelephone()
    {
        $customerDetail = new CustomerDetail([ 'telephone' => '887-419-3882 x627' ]);

        $this->assertEquals('887-419-3882 x627', $customerDetail->getTelephone());
    }

    public function testGetFax()
    {
        $customerDetail = new CustomerDetail([ 'fax' => '(564) 527-7913' ]);

        $this->assertEquals('(564) 527-7913', $customerDetail->getFax());
    }

    public function testGetBillingAddressVerified()
    {
        $customerDetail = new CustomerDetail([ 'billing_address_verified' => true ]);

        $this->assertTrue($customerDetail->getBillingAddressVerified());
    }
}