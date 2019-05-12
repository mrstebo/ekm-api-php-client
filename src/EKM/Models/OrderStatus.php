<?php

namespace EKM\Models;

class OrderStatus
{
    private $orderStatus;

    public function __construct($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    public function getName()
    {
        return $this->orderStatus['name'];
    }

    public function getColour()
    {
        return $this->orderStatus['colour'];
    }

    public function getShowInQuickStats()
    {
        return $this->orderStatus['show_in_quick_stats'];
    }
}