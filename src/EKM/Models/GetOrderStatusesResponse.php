<?php

namespace EKM\Models;

class GetOrderStatusesResponse extends ApiResponse
{
    public function getStatuses()
    {
        $data = $this->getData();

        return array_map(function ($status)
        {
            return new OrderStatus($status);
        }, $data['statuses']);
    }
}