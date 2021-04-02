<?php

namespace EKM\OrderStatuses\GetOrderStatuses;

use EKM\Core\ApiResponseBase;
use EKM\Core\Traits\HasLinks;
use EKM\Core\Traits\HasMeta;
use EKM\OrderStatuses\OrderStatus;

class GetOrderStatusesResponse extends ApiResponseBase
{
    use HasLinks, HasMeta;

    public function getStatuses()
    {
        return array_key_exists('data', $this->response)
            ? array_map(function ($status)
            {
                return new OrderStatus($status);
            }, $this->response['data']['statuses'])
            : null;
    }
}