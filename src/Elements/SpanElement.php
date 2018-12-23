<?php

namespace Elemental\Elements;

use Elemental\Element;
use Elemental\Interfaces\ElementInterface;

class SpanElement extends Element implements ElementInterface
{
    protected $format = '<{tag}{attributes}{classes}>{text}</{tag}>{nl}';
}
