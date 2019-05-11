<?
declare(strict_types=1);

namespace EKM\Tests;

use PHPUnit\Framework\TestCase;

use EKM\EkmClient;
use EKM\Api\OrdersApi;
use EKM\Api\OrderStatusesApi;

final class EkmClientTest extends TestCase
{
    private $client;

    protected function setUp(): void
    {
        $this->client = new EkmClient();
    }

    public function testOrdersApi()
    {
        $this->assertEquals(
            OrdersApi::class,
            $client->getOrdersApi()
        );
    }

    public function testGetOrderStatusesApi()
    {
        $this->assertEquals(
            OrderStatusesApi::class,
            $client->getOrderStatusesApi()
        );
    }
}