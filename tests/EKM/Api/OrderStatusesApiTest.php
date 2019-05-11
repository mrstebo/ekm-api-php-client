<?
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Psr7\Response;

final class OrderStatusesApiTest extends TestCase
{
    private $client;
    private $api;

    protected function setUp(): void
    {
        $this->client = $this->createMock(EKM\EkmClient::class);
        $this->api = new EKM\Api\OrderStatusesApi($this->client);
    }

    public function testGetOrderStatuses()
    {
        $this->client->method('request')
            ->willReturn(new Response(200, [], "{}"));

        $response = $this->api->getOrderStatuses();
        $json = json_decode($response->getBody());
        $this->assertEquals("", $json);
    }
}