<?php

namespace EKM\Core\Traits;

use EKM\Core\Meta;

trait HasMeta
{
    /**
     * Gets the response meta
     *
     * @return Meta
     */
    public function getMeta()
    {
        return array_key_exists('meta', $this->response)
            ? new Meta($this->response['meta'])
            : new Meta(null);
    }
}