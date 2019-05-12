<?php

namespace EKM\Models;

class Link
{
    private $rel;
    private $href;

    public function __construct($link)
    {
        $this->rel = $link['rel'];
        $this->href = $link['href'];
    }

    /**
     * Gets the links rel
     *
     * @return string
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * Gets the links href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }
}