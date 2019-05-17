<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use EKM\Models\CustomerDetails;

final class CustomerDetailsTest extends TestCase
{
    public function testGetCustomerId()
    {
        $customerDetails = new CustomerDetails([ 'customer_id' => 2314232 ]);

        $this->assertEquals(2314232, $customerDetails->getCustomerId());
    }

    public function testGetEmailAddress()
    {
        $customerDetails = new CustomerDetails([ 'email_address' => 'tomas_volkman@gmail.com' ]);

        $this->assertEquals('tomas_volkman@gmail.com', $customerDetails->getEmailAddress());
    }

    public function testGetFirstName()
    {
        $customerDetails = new CustomerDetails([ 'first_name' => 'Tomas' ]);

        $this->assertEquals('Tomas', $customerDetails->getFirstName());
    }

    public function testGetLastName()
    {
        $customerDetails = new CustomerDetails([ 'last_name' => 'Volkman' ]);

        $this->assertEquals('Volkman', $customerDetails->getLastName());
    }

    public function testGetCompany()
    {
        $customerDetails = new CustomerDetails([ 'company' => 'Durgan, Quitzon and Ruecker' ]);

        $this->assertEquals('Durgan, Quitzon and Ruecker', $customerDetails->getCompany());
    }

    public function testGetAddress()
    {
        $customerDetails = new CustomerDetails([ 'address' => '32324 O\'Keefe Brooks' ]);

        $this->assertEquals('32324 O\'Keefe Brooks', $customerDetails->getAddress());
    }

    public function testGetAddress2()
    {
        $customerDetails = new CustomerDetails([ 'address2' => 'Giovannychester' ]);

        $this->assertEquals('Giovannychester', $customerDetails->getAddress2());
    }

    public function testGetTown()
    {
        $customerDetails = new CustomerDetails([ 'town' => 'Thompsonville' ]);

        $this->assertEquals('Thompsonville', $customerDetails->getTown());
    }

    public function testGetCounty()
    {
        $customerDetails = new CustomerDetails([ 'county' => 'Buckinghamshire' ]);

        $this->assertEquals('Buckinghamshire', $customerDetails->getCounty());
    }

    public function testGetPostCode()
    {
        $customerDetails = new CustomerDetails([ 'post_code' => 'HO3 2FS' ]);

        $this->assertEquals('HO3 2FS', $customerDetails->getPostCode());
    }

    public function testGetCountry()
    {
        $customerDetails = new CustomerDetails([ 'country' => 'GB' ]);

        $this->assertEquals('GB', $customerDetails->getCountry());
    }

    public function testGetTelephone()
    {
        $customerDetails = new CustomerDetails([ 'telephone' => '887-419-3882 x627' ]);

        $this->assertEquals('887-419-3882 x627', $customerDetails->getTelephone());
    }

    public function testGetFax()
    {
        $customerDetails = new CustomerDetails([ 'fax' => '(564) 527-7913' ]);

        $this->assertEquals('(564) 527-7913', $customerDetails->getFax());
    }

    public function testGetBillingAddressVerified()
    {
        $customerDetails = new CustomerDetails([ 'billing_address_verified' => true ]);

        $this->assertTrue($customerDetails->getBillingAddressVerified());
    }
}