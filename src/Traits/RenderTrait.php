<?php

namespace Elemental\Traits;

use Elemental\Interfaces\ElementInterface;

trait RenderTrait
{
    protected function renderAttributes()
    {
        $attributes = '';
        if (count($this->attributes) > 0) {
            $attributes = [];
            foreach ($this->attributes as $key => $value) {
                $attributes[] = sprintf('%s="%s"', $key, $value);
            }

            $attributes = ' ' . implode(' ', $attributes);
        }

        return $attributes;
    }

    protected function renderClasses()
    {
        return (count($this->classList) > 0) ? sprintf(' class="%s"', implode(' ', $this->classList)) : '';
    }

    protected function subRender(string $side = 'children', int $recursionLevel = 0)
    {
        $recursionLevel++;
        $children = '';
        if (count($this->{$side}) > 0) {
            foreach ($this->{$side} as $child) {
                if (!$child instanceof ElementInterface) {
                    continue;
                }
                $children .= str_repeat("\t", $recursionLevel) . $child->render($recursionLevel);
            }
        }

        return $children;
    }

    public function render(int $recursionLevel = 0)
    {
        return str_replace_array([
            '{tag}' => $this->tag,
            '{attributes}' => $this->renderAttributes(),
            '{classes}' => $this->renderClasses(),
            '{text}' => $this->textContent,
            '{children}' => $this->subRender('children', $recursionLevel),
            '{before}' => $this->subRender('before', $recursionLevel - 1),
            '{after}' => $this->subRender('after', $recursionLevel - 1),
            '{nl}' => PHP_EOL,
            '{t}' => str_repeat("\t", $recursionLevel)
        ], '{before}'. $this->format . '{after}');
    }
}