<?php

namespace EKM\Models;

class ApiResponse
{
    private $response;

    public function __construct($response)
    {
        $this->response = $response ?: [];
    }

    /**
     * Gets the response meta
     *
     * @return Meta
     */
    public function getMeta()
    {
        return array_key_exists('meta', $this->response)
            ? new Meta($this->response['meta'])
            : new Meta(null);
    }

    /**
     * Gets the response links
     *
     * @return Link[]
     */
    public function getLinks()
    {
        $links = array_key_exists('links', $this->response)
            ? new Links($this->response['links'])
            : new Links(null);
        return $links->getLinks();
    }

    /**
     * Gets the response data
     *
     * @return object
     */
    public function getData()
    {
        return array_key_exists('data', $this->response)
            ? $this->response['data']
            : null;
    }
}