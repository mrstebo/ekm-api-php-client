<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use EKM\Models\Links;

final class LinksTest extends TestCase
{
    public function testConstructorUsingNull()
    {
        $links = new Links(null);

        $this->assertEmpty($links->getLinks());
    }

    public function testConstructorUsingEmpty()
    {
        $links = new Links([]);

        $this->assertEmpty($links->getLinks());
    }

    public function testGetLinks()
    {
        $links = new Links(array([
            'rel' => 'prev',
            'href' => '/orders?page=1'
        ], [
            'rel' => 'current',
            'href' => '/orders?page=2'
        ], [
            'rel' => 'next',
            'href' => '/orders?page=3'
        ]));

        $results = $links->getLinks();

        $this->assertEquals(3, sizeof($results));
        $this->assertEquals('prev', $results[0]->getRel());
        $this->assertEquals('/orders?page=1', $results[0]->getHref());
        $this->assertEquals('current', $results[1]->getRel());
        $this->assertEquals('/orders?page=2', $results[1]->getHref());
        $this->assertEquals('next', $results[2]->getRel());
        $this->assertEquals('/orders?page=3', $results[2]->getHref());
    }
}