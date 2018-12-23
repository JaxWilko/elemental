<?php

namespace Elemental\Interfaces;

use Elemental\Element;

interface ElementInterface
{
    public function __construct(string $tag);

    public function __toString();

    public function addChild(Element $element);

    public function removeChild(int $index);

    public function render(int $recursionLevel);
}
