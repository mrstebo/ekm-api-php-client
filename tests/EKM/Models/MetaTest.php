<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use EKM\Models\Meta;

final class MetaTest extends TestCase
{
    public function testConstructorUsingNull()
    {
        $meta = new Meta(null);

        $this->assertEquals(0, $meta->getPagesTotal());
        $this->assertEquals(0, $meta->getItemsTotal());
        $this->assertEquals(0, $meta->getItemsPerPage());
    }

    public function testConstructorUsingEmpty()
    {
        $meta = new Meta([]);

        $this->assertEquals(0, $meta->getPagesTotal());
        $this->assertEquals(0, $meta->getItemsTotal());
        $this->assertEquals(0, $meta->getItemsPerPage());
    }

    public function testGetPagesTotal()
    {
        $meta = new Meta([ 'pages_total' => 2 ]);

        $this->assertEquals(2, $meta->getPagesTotal());
    }

    public function testGetItemsTotal()
    {
        $meta = new Meta([ 'items_total' => 10 ]);

        $this->assertEquals(10, $meta->getItemsTotal());
    }

    public function testGetItemsPerPage()
    {
        $meta = new Meta([ 'items_per_page' => 5 ]);

        $this->assertEquals(5, $meta->getItemsPerPage());
    }
}