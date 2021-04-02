<?php

declare(strict_types=1);

namespace Tests\EKM\Core\Traits;

use EKM\Core\ApiResponseBase;
use EKM\Core\Meta;
use EKM\Core\Traits\HasMeta;
use PHPUnit\Framework\TestCase;

final class StubHasMetaResponse extends ApiResponseBase
{
    use HasMeta;
}

final class HasMetaTest extends TestCase
{
    public function testGetMeta()
    {
        $response = new StubHasMetaResponse([
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
}