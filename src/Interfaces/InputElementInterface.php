<?php

namespace Elemental\Interfaces;

interface InputElementInterface extends ElementInterface
{
    public function type(string $type);

    public function value(string $value);
}
