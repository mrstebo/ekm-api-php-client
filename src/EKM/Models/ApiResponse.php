<?php

namespace EKM\Models;

class ApiResponse
{
    private $meta;
    private $links;
    private $data;

    public function __construct($response)
    {
        $this->meta = new Meta($response['meta']);
        $this->links = new Links($response['links']);
        $this->data = $response['data'];
    }

    /**
     * Gets the response meta
     *
     * @return Meta
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Gets the response links
     *
     * @return Link[]
     */
    public function getLinks()
    {
        return $this->links->getLinks();
    }

    /**
     * Gets the response data
     *
     * @return object
     */
    public function getData()
    {
        return $this->data;
    }
}