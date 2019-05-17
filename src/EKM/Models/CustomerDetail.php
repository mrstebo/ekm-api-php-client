<?php

namespace EKM\Models;

class CustomerDetail
{
    private $customerDetail;

    public function __construct($customerDetail)
    {
        $this->customerDetail = $customerDetail;
    }

    /**
     * Gets the customer ID
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return array_key_exists('customer_id', $this->customerDetail)
            ? intval($this->customerDetail['customer_id'])
            : 0;
    }

    /**
     * Gets the email address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return array_key_exists('email_address', $this->customerDetail)
            ? $this->customerDetail['email_address']
            : '';
    }

    /**
     * Gets the first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return array_key_exists('first_name', $this->customerDetail)
            ? $this->customerDetail['first_name']
            : '';
    }

    /**
     * Gets the last name
     *
     * @return string
     */
    public function getLastName()
    {
        return array_key_exists('last_name', $this->customerDetail)
            ? $this->customerDetail['last_name']
            : '';
    }

    /**
     * Gets the company
     *
     * @return string
     */
    public function getCompany()
    {
        return array_key_exists('company', $this->customerDetail)
            ? $this->customerDetail['company']
            : '';
    }

    /**
     * Gets the first line of the address
     *
     * @return string
     */
    public function getAddress()
    {
        return array_key_exists('address', $this->customerDetail)
            ? $this->customerDetail['address']
            : '';
    }

    /**
     * Gets the second line of the address
     *
     * @return string
     */
    public function getAddress2()
    {
        return array_key_exists('address2', $this->customerDetail)
            ? $this->customerDetail['address2']
            : '';
    }

    /**
     * Gets the town
     *
     * @return string
     */
    public function getTown()
    {
        return array_key_exists('town', $this->customerDetail)
            ? $this->customerDetail['town']
            : '';
    }

    /**
     * Gets the county
     *
     * @return string
     */
    public function getCounty()
    {
        return array_key_exists('county', $this->customerDetail)
            ? $this->customerDetail['county']
            : '';
    }

    /**
     * Gets the postcode
     *
     * @return string
     */
    public function getPostCode()
    {
        return array_key_exists('post_code', $this->customerDetail)
            ? $this->customerDetail['post_code']
            : '';
    }

    /**
     * Gets the country
     *
     * @return string
     */
    public function getCountry()
    {
        return array_key_exists('country', $this->customerDetail)
            ? $this->customerDetail['country']
            : '';
    }

    /**
     * Gets the telephone number
     *
     * @return string
     */
    public function getTelephone()
    {
        return array_key_exists('telephone', $this->customerDetail)
            ? $this->customerDetail['telephone']
            : '';
    }

    /**
     * Gets the fax number
     *
     * @return string
     */
    public function getFax()
    {
        return array_key_exists('fax', $this->customerDetail)
            ? $this->customerDetail['fax']
            : '';
    }

    /**
     * Gets whether the billing address has been verified
     *
     * @return boolean
     */
    public function getBillingAddressVerified()
    {
        return array_key_exists('billing_address_verified', $this->customerDetail)
            ? boolval($this->customerDetail['billing_address_verified'])
            : false;
    }
}