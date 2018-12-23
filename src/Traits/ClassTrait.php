<?php

namespace Elemental\Traits;

trait ClassTrait
{
    protected $classList = [];

    public function addClass($class)
    {
        $this->classList[] = $class;

        return $this;
    }

    public function removeClass($class)
    {
        if (in_array($class, $this->classList)) {
            unset($this->classList[$class]);
            $this->classList = array_values($this->classList);
        }

        return $this;
    }
}