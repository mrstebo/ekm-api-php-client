<?
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EkmClientTest extends TestCase
{
    private $config;
    private $client;

    protected function setUp(): void
    {
        $this->config = new EKM\Configuration();
        $this->client = new EKM\EkmClient($this->config);
    }

    public function testOrdersApi()
    {
        $this->assertInstanceOf(
            EKM\Api\OrdersApi::class,
            $this->client->getOrdersApi()
        );
    }

    public function testGetOrderStatusesApi()
    {
        $this->assertInstanceOf(
            EKM\Api\OrderStatusesApi::class,
            $this->client->getOrderStatusesApi()
        );
    }
}