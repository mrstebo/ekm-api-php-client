<?php

namespace EKM\Models;

class Link
{
    private $link;

    public function __construct($link)
    {
        $this->link = $link ?: [];
    }

    /**
     * Gets the links rel
     *
     * @return string
     */
    public function getRel()
    {
        return array_key_exists('rel', $this->link)
            ? $this->link['rel']
            : '';
    }

    /**
     * Gets the links href
     *
     * @return string
     */
    public function getHref()
    {
        return array_key_exists('href', $this->link)
            ? $this->link['href']
            : '';
    }
}