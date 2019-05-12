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
        $response = new Response(200, [], json_encode([
            'meta' => EKM\Models\Meta::empty(),
            'links' => [],
            'data' => json_encode([
                'statuses' => [
                    new EKM\Models\OrderStatus([
                        'name' => 'Test',
                        'colour' => '#00FF00',
                        'show_in_quick_stats' => true
                    ])
                ]
            ])
        ]));

        $this->client->method('request')
            ->willReturn($response);

        $result = $this->api->getOrderStatuses();
        $expected = new EKM\Responses\GetOrderStatusesResponse($response);
        $this->assertEquals($expected, $result);
        $this->assertNull($result->getMeta());
        $this->assertEmpty($result->getLinks());
    }
}