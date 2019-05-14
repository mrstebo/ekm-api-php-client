<?php

namespace EKM\Models;

class Links
{
    public function __construct($links)
    {
        $this->links = $links ?: [];
    }

    /**
     * Gets the links
     *
     * @return Link[]
     */
    public function getLinks()
    {
        return array_map(function ($link)
        {
            return new Link($link);
        }, $this->links);
    }
}