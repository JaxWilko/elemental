<?php

namespace Elemental\Traits;

trait AttributableTrait
{
    public function __call($name, $arguments)
    {
        if (!isset($this->attributable) || !is_array($this->attributable)) {
            return $this;
        }

        $this->addAttribute($name, $arguments[0]);
        return $this;
    }
}