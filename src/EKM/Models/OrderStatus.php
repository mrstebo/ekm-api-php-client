<?php

namespace EKM\Models;

class OrderStatus
{
    private $orderStatus;

    public function __construct($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * Gets the name
     *
     * @return string
     */
    public function getName()
    {
        return array_key_exists('name', $this->orderStatus)
            ? $this->orderStatus['name']
            : '';
    }

    /**
     * Gets the colour
     *
     * @return string
     */
    public function getColour()
    {
        return array_key_exists('colour', $this->orderStatus)
            ? $this->orderStatus['colour']
            : '';
    }

    /**
     * Gets the value indicating if we show the order status in quick stats
     *
     * @return bool
     */
    public function getShowInQuickStats()
    {
        return array_key_exists('show_in_quick_stats', $this->orderStatus)
            ? boolval($this->orderStatus['show_in_quick_stats'])
            : false;
    }
}