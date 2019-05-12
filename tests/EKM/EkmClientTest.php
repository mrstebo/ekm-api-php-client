<?
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use EKM\Configuration;
use EKM\EkmClient;

final class EkmClientTest extends TestCase
{
    private $config;
    private $client;

    protected function setUp(): void
    {
        $this->config = Configuration::create();
        $this->client = new EkmClient($this->config);
    }

    public function testOrderStatuses()
    {
        $this->assertInstanceOf(
            EKM\Api\OrderStatusesApi::class,
            $this->client->orderStatuses()
        );
    }
}