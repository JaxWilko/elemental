<?php

namespace Elemental;

use Elemental\Elements\ImgElement;
use Elemental\Elements\InputElement;
use Elemental\Elements\SpanElement;

class Factory
{
    private static $bindings = [
        'img'   => ImgElement::class,
        'span'  => SpanElement::class,
        'input' => InputElement::class
    ];

    public static function build(string $node): Element
    {
        if (!isset(self::$bindings[$node])) {
            return new Element($node);
        }

        return new self::$bindings[$node]($node);
    }

    public static function registerElement(string $tag, string $class): bool
    {
        if (!class_exists($class)) {
            throw new \InvalidArgumentException($class . ', could not be found');
        }

        self::$bindings[$tag] = $class;

        return true;
    }
}
