<?php

namespace Elemental\Traits;

trait AttributeTrait
{
    protected $attributes = [];

    public function addAttribute(string $key, string $value = null)
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    public function removeAttribute(string $key)
    {
        if (isset($this->attributes[$key])) {
            unset($this->attributes[$key]);
        }

        return $this;
    }
}