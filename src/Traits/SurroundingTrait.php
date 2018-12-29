<?php

namespace Elemental\Traits;

use Elemental\Element;

trait SurroundingTrait
{
    protected $before = [];
    protected $after = [];

    public function before(Element $element)
    {
        $this->before[] = $element;

        return $this;
    }

    public function after(Element $element)
    {
        $this->after[] = $element;

        return $this;
    }
}