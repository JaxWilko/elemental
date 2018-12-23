# Elemental

This package offers a fluent html api for php.

As a simple example the following php:

```php
<?php

require __DIR__ . '/vendor/autoload.php';

echo element('div')
    ->addClass('container')
    ->addChild(element('span')->text('this is a hat'))
    ->addChild(
        element('div')
            ->addChild(element('span')->addClass('something')->text('words'))
            ->addChild(element('input')->type('number')->value('666'))
    )
    ->addChild(element('img')->src('https://example.com/img.png'));
```

Will print:

```html
<div class="container">
	<span>this is a hat</span>
	<div>
		<span class="something">words</span>
		<input type="number" value="666">
	</div>
	<img src="https://example.com/img.png">
</div>
```
