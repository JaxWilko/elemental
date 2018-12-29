<?php

namespace Elemental;

use Elemental\Interfaces\ElementInterface;
use Elemental\Traits\AttributableTrait;
use Elemental\Traits\AttributeTrait;
use Elemental\Traits\ClassTrait;
use Elemental\Traits\RenderTrait;
use Elemental\Traits\SurroundingTrait;

class Element implements ElementInterface
{
    use AttributeTrait, AttributableTrait, ClassTrait, SurroundingTrait, RenderTrait;

    protected $tag;
    protected $format = '<{tag}{attributes}{classes}>{nl}{text}{children}{nl}{t}</{tag}>{nl}';
    protected $children = [];
    protected $textContent;

    protected $attributable = [
        'id'
    ];

    public function __construct(string $tag)
    {
         $this->tag = $tag;
    }

    public function __toString()
    {
        return $this->render();
    }

    public function text(string $string): Element
    {
        $this->textContent = $string;

        return $this;
    }

    public function addChild(Element $element): Element
    {
        $this->children[] = $element;

        return $this;
    }

    public function removeChild(int $index): Element
    {
        if (isset($this->children[$index])) {
            unset($this->children[$index]);
            $this->children = array_values($this->children);
        }

        return $this;
    }
}
