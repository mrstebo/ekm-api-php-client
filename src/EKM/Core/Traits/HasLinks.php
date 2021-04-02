<?php

namespace EKM\Core\Traits;

use EKM\Core\Link;

trait HasLinks
{
    /**
     * Gets the links
     *
     * @return Link[]
     */
    public function getLinks()
    {
        return array_key_exists('links', $this->response)
            ? array_map(function ($link) {
                return new Link($link);
            }, $this->response['links'])
            : [];
    }
}