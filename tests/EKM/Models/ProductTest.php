<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use \DateTime;
use EKM\Models\Product;

final class ProductTest extends TestCase
{
    public function testGetId()
    {
        $product = new Product([ 'id' => 30 ]);

        $this->assertEquals(30, $product->getId());
    }

    public function testGetCategoryId()
    {
        $product = new Product([ 'category_id' => 1845090966 ]);

        $this->assertEquals(1845090966, $product->getCategoryId());
    }

    public function testGetParentProductId()
    {
        $product = new Product([ 'parent_product_id' => 28 ]);

        $this->assertEquals(28, $product->getParentProductId());
    }

    public function testGetName()
    {
        $product = new Product([ 'name' => 'EKM - 31' ]);

        $this->assertEquals('EKM - 31', $product->getName());
    }

    public function testGetDescription()
    {
        $product = new Product([ 'description' => 'My product description' ]);

        $this->assertEquals('My product description', $product->getDescription());
    }

    public function testGetShortDescription()
    {
        $product = new Product([ 'short_description' => 'My short description' ]);

        $this->assertEquals('My short description', $product->getShortDescription());
    }

    public function testGetNumberInStock()
    {
        $product = new Product([ 'number_in_stock' => 60 ]);

        $this->assertEquals(60, $product->getNumberInStock());
    }

    public function testGetPrice()
    {
        $product = new Product([ 'price' => 37.27 ]);

        $this->assertEquals(37.27, $product->getPrice());
    }

    public function testGetRRP()
    {
        $product = new Product([ 'rrp' => 39.27 ]);

        $this->assertEquals(39.27, $product->getRRP());
    }

    public function testGetProductCode()
    {
        $product = new Product([ 'product_code' => 'chc4fcft' ]);

        $this->assertEquals('chc4fcft', $product->getProductCode());
    }

    public function testGetChargeDelivery()
    {
        $product = new Product([ 'charge_delivery' => true ]);

        $this->assertTrue($product->getChargeDelivery());
    }

    public function testGetSpecialOffer()
    {
        $product = new Product([ 'special_offer' => true ]);

        $this->assertTrue($product->getSpecialOffer());
    }

    public function testGetBrand()
    {
        $product = new Product([ 'brand' => 'Keebler, Hessel and Senger' ]);

        $this->assertEquals('Keebler, Hessel and Senger', $product->getBrand());
    }

    public function testGetCondition()
    {
        $product = new Product([ 'condition' => 'Used' ]);

        $this->assertEquals('Used', $product->getCondition());
    }

    public function testGetGTIN()
    {
        $product = new Product([ 'gtin' => 'av1auu8p' ]);

        $this->assertEquals('av1auu8p', $product->getGTIN());
    }

    public function testGetMPN()
    {
        $product = new Product([ 'mpn' => 'idig515l' ]);

        $this->assertEquals('idig515l', $product->getMPN());
    }

    public function testGetProductWeight()
    {
        $product = new Product([ 'product_weight' => 41.80411245618207 ]);

        $this->assertEquals(41.80411245618207, $product->getProductWeight());
    }

    public function testGetCanBeAddedToCart()
    {
        $product = new Product([ 'can_be_added_to_cart' => true ]);

        $this->assertTrue($product->getCanBeAddedToCart());
    }

    public function testGetTaxApplicable()
    {
        $product = new Product([ 'tax_applicable' => true ]);

        $this->assertTrue($product->getTaxApplicable());
    }

    public function testGetTaxRateId()
    {
        $product = new Product([ 'tax_rate_id' => 172 ]);

        $this->assertEquals(172, $product->getTaxRateId());
    }

    public function testGetLive()
    {
        $product = new Product([ 'live' => true ]);

        $this->assertTrue($product->getLive());
    }

    public function testGetOrderNote()
    {
        $product = new Product([ 'order_note' => 'My order note' ]);

        $this->assertEquals('My order note', $product->getorderNote());
    }

    public function testGetRedirectUrl()
    {
        $product = new Product([ 'redirect_url' => 'http://maddison.biz' ]);

        $this->assertEquals('http://maddison.biz', $product->getRedirectUrl());
    }

    public function testGetLastModified()
    {
        $product = new Product([ 'last_modified' => '2019-05-21T03:26:59.1431931Z' ]);

        $lastModified = $product->getLastModified();
        
        $this->assertInstanceOf(DateTime::class, $lastModified);
        $this->assertEquals('2019-05-21T03:26:59+00:00', $lastModified->format('c'));
    }

    public function testGetMetaDescription()
    {
        $product = new Product([ 'meta_description' => 'My meta description' ]);

        $this->assertEquals('My meta description', $product->getMetaDescription());
    }

    public function testGetMetaKeywords()
    {
        $product = new Product([ 'meta_keywords' => 'My meta keywords' ]);

        $this->assertEquals('My meta keywords', $product->getMetaKeywords());
    }

    public function testGetMetaTitle()
    {
        $product = new Product([ 'meta_title' => 'My meta title' ]);

        $this->assertEquals('My meta title', $product->getMetaTitle());
    }

    public function testGetTotalProductStock()
    {
        $product = new Product([ 'total_product_stock' => 35 ]);

        $this->assertEquals(35, $product->getTotalProductStock());
    }

    public function testGetSeoFriendlyUrl()
    {
        $product = new Product([ 'seo_friendly_url' => 'ekm---31-30-p.asp' ]);

        $this->assertEquals('ekm---31-30-p.asp', $product->getSeoFriendlyUrl());
    }

    public function testGetOptions()
    {
        throw new Error("Not implemented");
    }

    public function testGetVariants()
    {
        throw new Error("Not implemented");
    }
}