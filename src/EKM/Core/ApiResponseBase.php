<?php

namespace EKM\Core;

class ApiResponseBase
{
    /**
     * @var array $response
     */
    protected $response;

    public function __construct(array $response)
    {
        $this->response = $response;
    }
}