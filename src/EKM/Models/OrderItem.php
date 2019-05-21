<?php

namespace EKM\Models;

class OrderItem
{
    private $orderItem;

    public function __construct($orderItem)
    {
        $this->orderItem = $orderItem ?: [];
    }

    /**
     * Gets the ID
     * 
     * @return integer
     */
    public function getId()
    {
        return array_key_exists('id', $this->orderItem)
            ? intval($this->orderItem['id'])
            : 0;
    }

    /**
     * Gets the order ID
     * 
     * @return integer
     */
    public function getOrderId()
    {
        return array_key_exists('order_id', $this->orderItem)
            ? intval($this->orderItem['order_id'])
            : 0;
    }

    /**
     * Gets the item delivery
     * 
     * @return float
     */
    public function getItemDelivery()
    {
        return array_key_exists('item_delivery', $this->orderItem)
            ? floatval($this->orderItem['item_delivery'])
            : 0;
    }

    /**
     * Gets the item discount
     * 
     * @return float
     */
    public function getItemDiscount()
    {
        return array_key_exists('item_discount', $this->orderItem)
            ? floatval($this->orderItem['item_discount'])
            : 0;
    }

    /**
     * Gets the item name
     * 
     * @return string
     */
    public function getItemName()
    {
        return array_key_exists('item_name', $this->orderItem)
            ? $this->orderItem['item_name']
            : 0;
    }

    /**
     * Gets the item price
     * 
     * @return float
     */
    public function getItemPrice()
    {
        return array_key_exists('item_price', $this->orderItem)
            ? floatval($this->orderItem['item_price'])
            : 0;
    }

    /**
     * Gets the item tax
     * 
     * @return float
     */
    public function getItemTax()
    {
        return array_key_exists('item_tax', $this->orderItem)
            ? floatval($this->orderItem['item_tax'])
            : 0;
    }

    /**
     * Gets the item tax ID
     * 
     * @return integer
     */
    public function getItemTaxId()
    {
        return array_key_exists('item_tax_id', $this->orderItem)
            ? intval($this->orderItem['item_tax_id'])
            : 0;
    }

    /**
     * Gets the item tax rate
     * 
     * @return float
     */
    public function getItemTaxRate()
    {
        return array_key_exists('item_tax_rate', $this->orderItem)
            ? floatval($this->orderItem['item_tax_rate'])
            : 0;
    }

    /**
     * Gets the quantity
     * 
     * @return integer
     */
    public function getQuantity()
    {
        return array_key_exists('quantity', $this->orderItem)
            ? intval($this->orderItem['quantity'])
            : 0;
    }

    /**
     * Gets the original item ID
     * 
     * @return integer
     */
    public function getOriginalItemId()
    {
        return \array_key_exists('original_item_id', $this->orderItem)
            ? intval($this->orderItem['original_item_id'])
            : 0;
    }
}