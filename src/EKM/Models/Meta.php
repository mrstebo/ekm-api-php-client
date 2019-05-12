<?php

namespace EKM\Models;

class Meta
{
    private $pagesTotal;
    private $itemsTotal;
    private $itemsPerPage;

    public function __construct($meta)
    {
        $this->pagesTotal = intval($meta['pages_total']);
        $this->itemsTotal = intval($meta['items_total']);
        $this->itemsPerPage = intval($meta['items_per_page']);
    }

    /**
     * Gets the total number of pages
     *
     * @return integer
     */
    public function getPagesTotal()
    {
        return $this->pagesTotal;
    }

    /**
     * Gets the total number of items
     *
     * @return integer
     */
    public function getItemsTotal()
    {
        return $this->itemsTotal;
    }

    /**
     * Gets the items per page
     *
     * @return integer
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }
}