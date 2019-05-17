<?php

namespace EKM\Models;

use \DateTime;

class ShippingAddress
{
    private $shippingAddress;

    public function __construct($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress ?: [];
    }

    /**
     * Gets the ID
     *
     * @return integer
     */
    public function getId()
    {
        return array_key_exists('id', $this->shippingAddress)
            ? intval($this->shippingAddress['id'])
            : 0;
    }

    /**
     * Gets the Customer ID
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return array_key_exists('customer_id', $this->shippingAddress)
            ? intval($this->shippingAddress['customer_id'])
            : 0;
    }

    /**
     * Gets the first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return array_key_exists('first_name', $this->shippingAddress)
            ? $this->shippingAddress['first_name']
            : '';
    }

    /**
     * Gets the last name
     *
     * @return string
     */
    public function getLastName()
    {
        return array_key_exists('last_name', $this->shippingAddress)
            ? $this->shippingAddress['last_name']
            : '';
    }

    /**
     * Gets whether this is the preferred billing address
     *
     * @return boolean
     */
    public function getIsPreferredBillingAddress()
    {
        return array_key_exists('is_preferred_billing_address', $this->shippingAddress)
            ? boolval($this->shippingAddress['is_preferred_billing_address'])
            : false;
    }

    /**
     * Gets whether this is the preferred shipping address
     *
     * @return boolean
     */
    public function getIsPreferredShippingAddress()
    {
        return array_key_exists('is_preferred_shipping_address', $this->shippingAddress)
            ? boolval($this->shippingAddress['is_preferred_shipping_address'])
            : false;
    }

    /**
     * Gets the company
     *
     * @return string
     */
    public function getCompany()
    {
        return array_key_exists('company', $this->shippingAddress)
            ? $this->shippingAddress['company']
            : '';
    }

    /**
     * Gets the first line of the address
     *
     * @return string
     */
    public function getAddress()
    {
        return array_key_exists('address', $this->shippingAddress)
            ? $this->shippingAddress['address']
            : '';
    }

    /**
     * Gets the second line of the address
     *
     * @return string
     */
    public function getAddress2()
    {
        return array_key_exists('address2', $this->shippingAddress)
            ? $this->shippingAddress['address2']
            : '';
    }

    /**
     * Gets the town
     *
     * @return string
     */
    public function getTown()
    {
        return array_key_exists('town', $this->shippingAddress)
            ? $this->shippingAddress['town']
            : '';
    }

    /**
     * Gets the county
     *
     * @return string
     */
    public function getCounty()
    {
        return array_key_exists('county', $this->shippingAddress)
            ? $this->shippingAddress['county']
            : '';
    }

    /**
     * Gets the postcode
     *
     * @return string
     */
    public function getPostCode()
    {
        return array_key_exists('post_code', $this->shippingAddress)
            ? $this->shippingAddress['post_code']
            : '';
    }

    /**
     * Gets the country
     *
     * @return string
     */
    public function getCountry()
    {
        return array_key_exists('country', $this->shippingAddress)
            ? $this->shippingAddress['country']
            : '';
    }

    /**
     * Gets the friendly country
     *
     * @return string
     */
    public function getFriendlyCountry()
    {
        return array_key_exists('friendly_country', $this->shippingAddress)
            ? $this->shippingAddress['friendly_country']
            : '';
    }

    /**
     * Gets the telephone number
     *
     * @return string
     */
    public function getTelephone()
    {
        return array_key_exists('telephone', $this->shippingAddress)
            ? $this->shippingAddress['telephone']
            : '';
    }

    /**
     * Gets the fax number
     *
     * @return string
     */
    public function getFax()
    {
        return array_key_exists('fax', $this->shippingAddress)
            ? $this->shippingAddress['fax']
            : '';
    }

    /**
     * Gets the created date
     *
     * @return DateTime
     */
    public function getCreatedDate()
    {
        return array_key_exists('created_date', $this->shippingAddress)
            ? new DateTime($this->shippingAddress['created_date'])
            : new DateTime(1970, 0, 1);
    }

    /**
     * Gets the modified date
     *
     * @return DateTime
     */
    public function getModifiedDate()
    {
        return array_key_exists('modified_date', $this->shippingAddress)
            ? new DateTime($this->shippingAddress['modified_date'])
            : new DateTime(1970, 0, 1);
    }
}