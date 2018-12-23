<?php

namespace Elemental\Elements;

use Elemental\Element;
use Elemental\Interfaces\ElementInterface;

class ImgElement extends Element implements ElementInterface
{
    protected $format = '<{tag}{attributes}{classes}>';

    public function src(string $src): Element
    {
        return $this->addAttribute('src', $src);
    }
}
