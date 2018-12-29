<?php

require __DIR__ . '/vendor/autoload.php';

echo element('div')
    ->before(
        element('div')
            ->id('header')
            ->addChild(element('span')->text('hello world'))
    )
    ->after(
        element('div')
            ->id('footer')
            ->addChild(element('span')->text('goodbye world'))
    )
    ->addClass('container')
    ->addChild(element('span')->text('this is a hat'))
    ->addChild(
        element('div')
            ->addChild(element('span')->addClass('something')->text('words'))
            ->addChild(element('input')->type('number')->value('666'))
    )
    ->addChild(element('img')->src('https://example.com/img.png'));

