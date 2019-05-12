<?php

namespace EKM\Models;

class Meta
{
    private $meta;

    public function __construct($meta)
    {
        $this->meta = $meta;
    }

    public static function empty()
    {
        return new Meta(null);
    }
}