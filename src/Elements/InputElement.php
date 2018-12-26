<?php

namespace Elemental\Elements;

use Elemental\Element;
use Elemental\Interfaces\ElementInterface;

class InputElement extends Element implements ElementInterface
{
    protected $format = '<{tag}{attributes}{classes}>';

    protected $attributable = [
        'type',
        'value'
    ];
}