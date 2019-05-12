<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use EKM\Models\ApiResponse;
use EKM\Models\Meta;
use EKM\Models\Link;

final class ApiResponseTest extends TestCase
{
    public function testGetMeta()
    {
        $response = new ApiResponse([
            'meta' => [
                'pages_total' => 1,
                'items_total' => 5,
                'items_per_page' => 2
            ]
        ]);
        $meta = $response->getMeta();

        $this->assertInstanceOf(Meta::class, $meta);
        $this->assertEquals(1, $meta->getPagesTotal());
        $this->assertEquals(5, $meta->getItemsTotal());
        $this->assertEquals(2, $meta->getItemsPerPage());
    }

    public function testGetLinks()
    {
        $response = new ApiResponse([
            'links' => array([
                'rel' => 'current',
                'href' => '/v1/orders?page=1'
            ])
        ]);
        $links = $response->getLinks();

        $this->assertEquals(1, sizeof($links));
        $this->assertInstanceOf(Link::class, $links[0]);
        $this->assertEquals('current', $links[0]->getRel());
        $this->assertEquals('/v1/orders?page=1', $links[0]->getHref());
    }

    public function testGetData()
    {
        $response = new ApiResponse([
            'data' => [
                'message' => 'This is a test'
            ]
        ]);
        $data = $response->getData();

        $this->assertEquals('This is a test', $data['message']);
    }
}