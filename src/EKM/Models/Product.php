<?php

namespace EKM\Models;

use \DateTime;

class Product
{
    private $product;

    public function __construct($product)
    {
        $this->product = $product ?: [];
    }

    /**
     * Gets the ID
     * 
     * @return integer
     */
    public function getId()
    {
        return array_key_exists('id', $this->product)
            ? intval($this->product['id'])
            : 0;
    }

    /**
     * Gets the category ID
     * 
     * @return integer
     */
    public function getCategoryId()
    {
        return array_key_exists('category_id', $this->product)
            ? intval($this->product['category_id'])
            : 0;
    }

    /**
     * Gets the parent product ID
     * 
     * @return integer
     */
    public function getParentProductId()
    {
        return array_key_exists('parent_product_id', $this->product)
            ? intval($this->product['parent_product_id'])
            : 0;
    }

    /**
     * Gets the name
     * 
     * @return string
     */
    public function getName()
    {
        return array_key_exists('name', $this->product)
            ? $this->product['name']
            : '';
    }

    /**
     * Gets the description
     * 
     * @return string
     */
    public function getDescription()
    {
        return array_key_exists('description', $this->product)
            ? $this->product['description']
            : '';
    }

    /**
     * Gets the short description
     * 
     * @return string
     */
    public function getShortDescription()
    {
        return array_key_exists('short_description', $this->product)
            ? $this->product['short_description']
            : '';
    }

    /**
     * Gets the number in stock
     * 
     * @return integer
     */
    public function getNumberInStock()
    {
        return array_key_exists('number_in_stock', $this->product)
            ? intval($this->product['number_in_stock'])
            : 0;
    }

    /**
     * Gets the price
     * 
     * @return float
     */
    public function getPrice()
    {
        return array_key_exists('price', $this->product)
            ? floatval($this->product['price'])
            : 0;
    }

    /**
     * Gets the RRP
     * 
     * @return float
     */
    public function getRRP()
    {
        return array_key_exists('rrp', $this->product)
            ? floatval($this->product['rrp'])
            : 0;
    }

    /**
     * Gets the product code
     * 
     * @return string
     */
    public function getProductCode()
    {
        return array_key_exists('product_code', $this->product)
            ? $this->product['product_code']
            : '';
    }

    /**
     * Gets whether to charge for delivery
     * 
     * @return boolean
     */
    public function getChargeDelivery()
    {
        return array_key_exists('charge_delivery', $this->product) 
            ? boolval($this->product['charge_delivery'])
            : false;
    }

    /**
     * Gets whether this is a special offer
     * 
     * @return boolean
     */
    public function getSpecialOffer()
    {
        return array_key_exists('special_offer', $this->product) 
            ? boolval($this->product['special_offer'])
            : false;
    }

    /**
     * Gets the brand
     * 
     * @return string
     */
    public function getBrand()
    {
        return array_key_exists('brand', $this->product)
            ? $this->product['brand']
            : '';
    }

    /**
     * Gets the condition
     * 
     * @return string
     */
    public function getCondition()
    {
        return array_key_exists('condition', $this->product)
            ? $this->product['condition']
            : '';
    }

    /**
     * Gets the GTIN
     * 
     * @return string
     */
    public function getGTIN()
    {
        return array_key_exists('gtin', $this->product)
            ? $this->product['gtin']
            : '';
    }

    /**
     * Gets the MPN
     * 
     * @return string
     */
    public function getMPN()
    {
        return array_key_exists('mpn', $this->product)
            ? $this->product['mpn']
            : '';
    }

    /**
     * Gets the product weight
     * 
     * @return float
     */
    public function getProductWeight()
    {
        return array_key_exists('product_weight', $this->product)
            ? floatval($this->product['product_weight'])
            : 0;
    }

    /**
     * Gets whether the product can be added to the cart
     * 
     * @return boolean
     */
    public function getCanBeAddedToCart()
    {
        return array_key_exists('can_be_added_to_cart', $this->product) 
            ? boolval($this->product['can_be_added_to_cart'])
            : false;
    }

    /**
     * Gets wether the product is tax applicable
     * 
     * @return boolean
     */
    public function getTaxApplicable()
    {
        return array_key_exists('tax_applicable', $this->product) 
            ? boolval($this->product['tax_applicable'])
            : false;
    }

    /**
     * Gets the tax rate ID
     * 
     * @return integer
     */
    public function getTaxRateId()
    {
        return array_key_exists('tax_rate_id', $this->product)
            ? intval($this->product['tax_rate_id'])
            : 0;
    }

    /**
     * Gets whether the product is live
     * 
     * @return boolean
     */
    public function getLive()
    {
        return array_key_exists('live', $this->product) 
            ? boolval($this->product['live'])
            : false;
    }

    /**
     * Gets the order note
     * 
     * @return string
     */
    public function getOrderNote()
    {
        return array_key_exists('order_note', $this->product)
            ? $this->product['order_note']
            : '';
    }

    /**
     * Gets the redirect URL
     * 
     * @return string
     */
    public function getRedirectUrl()
    {
        return array_key_exists('redirect_url', $this->product)
            ? $this->product['redirect_url']
            : '';
    }

    /**
     * Gets the last modified date
     * 
     * @return DateTime
     */
    public function getLastModified()
    {
        return array_key_exists('last_modified', $this->product)
            ? new DateTime($this->product['last_modified'])
            : new DateTime(1970, 0, 1);
    }

    /**
     * Gets the meta description
     * 
     * @return string
     */
    public function getMetaDescription()
    {
        return array_key_exists('meta_description', $this->product)
            ? $this->product['meta_description']
            : '';
    }

    /**
     * Gets the meta keywords
     * 
     * @return string
     */
    public function getMetaKeywords()
    {
        return array_key_exists('meta_keywords', $this->product)
            ? $this->product['meta_keywords']
            : '';
    }

    /**
     * Gets the meta title
     * 
     * @return string
     */
    public function getMetaTitle()
    {
        return array_key_exists('meta_title', $this->product)
            ? $this->product['meta_title']
            : '';
    }

    /**
     * Gets the total product stock
     * 
     * @return integer
     */
    public function getTotalProductStock()
    {
        return array_key_exists('total_product_stock', $this->product)
            ? intval($this->product['total_product_stock'])
            : 0;
    }

    /**
     * Gets the SEO friendly URL
     * 
     * @return string
     */
    public function getSeoFriendlyUrl()
    {
        return array_key_exists('seo_friendly_url', $this->product)
            ? $this->product['seo_friendly_url']
            : '';
    }

    /**
     * Gets the product options
     * 
     * @return ProductOption[]
     */
    public function getOptions()
    {
        return array();
    }

    /**
     * Gets the product variants
     * 
     * @return ProductVariant[]
     */
    public function getVariants()
    {
        return array();
    }
}