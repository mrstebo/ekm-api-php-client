<?php

namespace EKM\Models;

class OrderStatus
{
    private $name;
    private $colour;
    private $showInQuickStats;

    public function __construct($orderStatus)
    {
        $this->name = $orderStatus['name'] ?: '';
        $this->colour = $orderStatus['colour'] ?: '';
        $this->showInQuickStats = boolval($orderStatus['show_in_quick_stats']);
    }

    /**
     * Gets the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gets the colour
     *
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * Gets the value indicating if we show the order status in quick stats
     *
     * @return bool
     */
    public function getShowInQuickStats()
    {
        return $this->showInQuickStats;
    }
}