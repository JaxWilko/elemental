<?php

namespace Elemental\Elements;

use Elemental\Element;
use Elemental\Interfaces\InputElementInterface;

class InputElement extends Element implements InputElementInterface
{
    protected $format = '<{tag}{attributes}{classes}>';

    public function type(string $type): Element
    {
        return $this->addAttribute('type', $type);
    }

    public function value(string $value): Element
    {
        return $this->addAttribute('value', $value);
    }
}