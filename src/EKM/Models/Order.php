<?php

namespace EKM\Models;

use \DateTime;

class Order
{
    private $order;

    public function __construct($order)
    {
        $this->order = $order ?: [];
    }

    /**
     * Gets the ID
     *
     * @return int
     */
    public function getId()
    {
        return array_key_exists('id', $this->order)
            ? intval($this->order['id'])
            : 0;
    }

    /**
     * Gets the order number
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return array_key_exists('order_number', $this->order)
            ? $this->order['order_number']
            : '';
    }

    /**
     * Gets the order date
     *
     * @return DateTime
     */
    public function getOrderDate()
    {
        return array_key_exists('order_date', $this->order)
            ? new DateTime($this->order['order_date'])
            : new DateTime(1970, 0, 1);
    }

    /**
     * Gets whether the order is confirmed
     *
     * @return boolean
     */
    public function getIsConfirmed()
    {
        return array_key_exists('is_confirmed', $this->order)
            ? boolval($this->order['is_confirmed'])
            : false;
    }

    /**
     * Gets the sub total
     *
     * @return float
     */
    public function getSubTotal()
    {
        return array_key_exists('sub_total', $this->order)
            ? floatval($this->order['sub_total'])
            : 0;
    }

    /**
     * gets the total delivery cost
     *
     * @return float
     */
    public function getTotalDelivery()
    {
        return array_key_exists('total_delivery', $this->order)
            ? floatval($this->order['total_delivery'])
            : 0;
    }

    /**
     * Gets the total tax cost
     *
     * @return float
     */
    public function getTotalTax()
    {
        return array_key_exists('total_tax', $this->order)
            ? floatval($this->order['total_tax'])
            : 0;
    }

    /**
     * Gets the total cost
     *
     * @return float
     */
    public function getTotalCost()
    {
        return array_key_exists('total_cost', $this->order)
            ? floatval($this->order['total_cost'])
            : 0;
    }

    /**
     * Gets the status
     *
     * @return string
     */
    public function getStatus()
    {
        return array_key_exists('status', $this->order)
            ? $this->order['status']
            : '';
    }

    /**
     * Gets the payment status
     *
     * @return string
     */
    public function getPaymentStatus()
    {
        return array_key_exists('payment_status', $this->order)
        ? $this->order['payment_status']
        : '';
    }

    /**
     * Gets the delivery method
     *
     * @return string
     */
    public function getDeliveryMethod()
    {
        return array_key_exists('delivery_method', $this->order)
        ? $this->order['delivery_method']
        : '';
    }

    /**
     * Gets the transaction ID
     *
     * @return string
     */
    public function getTransactionId()
    {
        return array_key_exists('transaction_id', $this->order)
        ? $this->order['transaction_id']
        : '';
    }

    /**
     * Gets the transaction status
     *
     * @return string
     */
    public function getTransactionStatus()
    {
        return array_key_exists('transaction_status', $this->order)
        ? $this->order['transaction_status']
        : '';
    }

    /**
     * Gets the order type
     *
     * @return string
     */
    public function getOrderType()
    {
        return array_key_exists('order_type', $this->order)
        ? $this->order['order_type']
        : '';
    }

    /**
     * Gets whether we are using a shipping address
     *
     * @return boolean
     */
    public function getUseShippingAddress()
    {
        return array_key_exists('use_shipping_address', $this->order)
        ? boolval($this->order['use_shipping_address'])
        : false;
    }

    /**
     * Gets the shipping address
     *
     * @return ShippingAddress
     */
    public function getShippingAddress()
    {
        return array_key_exists('shipping_address', $this->order)
            ? new ShippingAddress($this->order['shipping_address'])
            : new ShippingAddress(null);
    }

    /**
     * Gets the internal notes
     *
     * @return string
     */
    public function getInternalNotes()
    {
        return array_key_exists('internal_notes', $this->order)
        ? $this->order['internal_notes']
        : '';
    }

    /**
     * Gets the customer facing notes
     *
     * @return string
     */
    public function getCustomerFacingNotes()
    {
        return array_key_exists('customer_facing_notes', $this->order)
            ? $this->order['customer_facing_notes']
            : '';
    }

    /**
     * Gets whether the customer has been emailed
     *
     * @return boolean
     */
    public function getEmailed()
    {
        return array_key_exists('emailed', $this->order)
            ? boolval($this->order['emailed'])
            : false;
    }

    /**
     * Gets the discounts
     *
     * @return string
     */
    public function getDiscounts()
    {
        return array_key_exists('discounts', $this->order)
            ? $this->order['discounts']
            : '';
    }

    /**
     * Gets the discounts total
     *
     * @return float
     */
    public function getDiscountsTotal()
    {
        return array_key_exists('discounts_total', $this->order)
            ? floatval($this->order['discounts_total'])
            : 0;
    }

    /**
     * Gets the shipping company
     *
     * @return string
     */
    public function getShippingCompany()
    {
        return array_key_exists('shipping_company', $this->order)
            ? $this->order['shipping_company']
            : '';
    }

    /**
     * Gets the IP address of the customer
     *
     * @return string
     */
    public function getIpAddress()
    {
        return array_key_exists('ip_address', $this->order)
            ? $this->order['ip_address']
            : '';
    }

    /**
     * Gets the GUID
     *
     * @return string
     */
    public function getGuid()
    {
        return array_key_exists('guid', $this->order)
            ? $this->order['guid']
            : '';
    }

    /**
     * Gets the order items
     *
     * @return OrderItem[]
     */
    public function getItems()
    {
        return null;
    }

    /**
     * Gets the customer details
     *
     * @return CustomerDetails
     */
    public function getCustomerDetails()
    {
        return array_key_exists('customer_details', $this->order)
            ? new CustomerDetails($this->order['customer_details'])
            : new CustomerDetails(null);
    }
}