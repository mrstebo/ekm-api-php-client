<?php

declare(strict_types=1);

namespace Tests\EKM\Core\Traits;

use EKM\Core\ApiResponseBase;
use EKM\Core\Link;
use EKM\Core\Traits\HasLinks;
use PHPUnit\Framework\TestCase;

final class StubHasLinksResponse extends ApiResponseBase
{
    use HasLinks;
}

final class HasLinksTest extends TestCase
{
    public function testGetLinks()
    {
        $response = new StubHasLinksResponse([
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
}