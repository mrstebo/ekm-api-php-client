<?php

namespace EKM\Responses;

use EKM\Models\Meta;
use GuzzleHttp\Psr7\Response;

abstract class ApiResponse implements \JsonSerializable
{
    private $meta;
    private $links;
    private $data;

    public function __construct(Response $response)
    {
        $json = json_decode($response->getBody()->getContents(), true);
        $meta = new Meta($json['meta']);
        $links = $json['links'];
        $data = $json['data'];
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function getMeta()
    {
        return $meta;
    }

    public function getLinks()
    {
        return $links;
    }

    public function getData()
    {
        return $data;
    }
}