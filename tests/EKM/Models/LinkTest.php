<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use EKM\Models\Link;

final class LinkTest extends TestCase
{
    public function testConstructorUsingNull()
    {
        $link = new Link(null);

        $this->assertEquals('', $link->getRel());
        $this->assertEquals('', $link->getHref());
    }

    public function testConstructorUsingEmpty()
    {
        $link = new Link([]);

        $this->assertEquals('', $link->getRel());
        $this->assertEquals('', $link->getHref());
    }

    public function testGetRel()
    {
        $link = new Link([ 'rel' => 'current' ]);

        $this->assertEquals('current', $link->getRel());
    }

    public function testGetHref()
    {
        $link = new Link([ 'href' => '/orders?page=1' ]);

        $this->assertEquals('/orders?page=1', $link->getHref());
    }
}