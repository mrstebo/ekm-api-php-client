<?php

namespace EKM\Models;

class CustomerDetails
{
    private $customerDetails;

    public function __construct($customerDetails)
    {
        $this->customerDetails = $customerDetails ?: [];
    }

    /**
     * Gets the customer ID
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return array_key_exists('customer_id', $this->customerDetails)
            ? intval($this->customerDetails['customer_id'])
            : 0;
    }

    /**
     * Gets the email address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return array_key_exists('email_address', $this->customerDetails)
            ? $this->customerDetails['email_address']
            : '';
    }

    /**
     * Gets the first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return array_key_exists('first_name', $this->customerDetails)
            ? $this->customerDetails['first_name']
            : '';
    }

    /**
     * Gets the last name
     *
     * @return string
     */
    public function getLastName()
    {
        return array_key_exists('last_name', $this->customerDetails)
            ? $this->customerDetails['last_name']
            : '';
    }

    /**
     * Gets the company
     *
     * @return string
     */
    public function getCompany()
    {
        return array_key_exists('company', $this->customerDetails)
            ? $this->customerDetails['company']
            : '';
    }

    /**
     * Gets the first line of the address
     *
     * @return string
     */
    public function getAddress()
    {
        return array_key_exists('address', $this->customerDetails)
            ? $this->customerDetails['address']
            : '';
    }

    /**
     * Gets the second line of the address
     *
     * @return string
     */
    public function getAddress2()
    {
        return array_key_exists('address2', $this->customerDetails)
            ? $this->customerDetails['address2']
            : '';
    }

    /**
     * Gets the town
     *
     * @return string
     */
    public function getTown()
    {
        return array_key_exists('town', $this->customerDetails)
            ? $this->customerDetails['town']
            : '';
    }

    /**
     * Gets the county
     *
     * @return string
     */
    public function getCounty()
    {
        return array_key_exists('county', $this->customerDetails)
            ? $this->customerDetails['county']
            : '';
    }

    /**
     * Gets the postcode
     *
     * @return string
     */
    public function getPostCode()
    {
        return array_key_exists('post_code', $this->customerDetails)
            ? $this->customerDetails['post_code']
            : '';
    }

    /**
     * Gets the country
     *
     * @return string
     */
    public function getCountry()
    {
        return array_key_exists('country', $this->customerDetails)
            ? $this->customerDetails['country']
            : '';
    }

    /**
     * Gets the telephone number
     *
     * @return string
     */
    public function getTelephone()
    {
        return array_key_exists('telephone', $this->customerDetails)
            ? $this->customerDetails['telephone']
            : '';
    }

    /**
     * Gets the fax number
     *
     * @return string
     */
    public function getFax()
    {
        return array_key_exists('fax', $this->customerDetails)
            ? $this->customerDetails['fax']
            : '';
    }

    /**
     * Gets whether the billing address has been verified
     *
     * @return boolean
     */
    public function getBillingAddressVerified()
    {
        return array_key_exists('billing_address_verified', $this->customerDetails)
            ? boolval($this->customerDetails['billing_address_verified'])
            : false;
    }
}