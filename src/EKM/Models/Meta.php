<?php

namespace EKM\Models;

class Meta
{
    private $meta;

    public function __construct($meta)
    {
        $this->meta = $meta ?: [];
    }

    /**
     * Gets the total number of pages
     *
     * @return integer
     */
    public function getPagesTotal()
    {
        return array_key_exists('pages_total', $this->meta)
            ? intval($this->meta['pages_total'])
            : 0;
    }

    /**
     * Gets the total number of items
     *
     * @return integer
     */
    public function getItemsTotal()
    {
        return array_key_exists('items_total', $this->meta)
            ? intval($this->meta['items_total'])
            : 0;
    }

    /**
     * Gets the items per page
     *
     * @return integer
     */
    public function getItemsPerPage()
    {
        return array_key_exists('items_per_page', $this->meta)
            ? intval($this->meta['items_per_page'])
            : 0;
    }
}