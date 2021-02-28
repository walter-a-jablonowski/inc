# Most tiny templating system

PHP itself is a templating system. This mini lib just adds a bit of functionallity.


### Usage

```
composer require walter-a-jablonowski/inc
```

Instead of `$myarg = 1; require($view);  where view uses $myarg \
use `inc($view, ['myarg' => 1]);` hides scope

**My page controller PHP file or class**

ˋˋˋphp
// Some PHP code preparing content
// ...

$content['placehoder'] = ...;

$comp1 = inc('my/comp1.html', $content);  // some part of a page, add content
$comp2 = ...;

$layout = inc('my/layout.html', [  // some BS nested grid for simplicity in own file
  'comp1' => $comp1,
  'comp2' => $comp2,
  ...
]);

echo inc('my/page.html', ['content' => $layout] );  // insert page content
ˋˋˋ

**Inside my/file.html**

use PHP for content and logic only

- Content: `<?= $args['my_content'] ?>`
- Content: `<?= $args->myContent ?>` if using some calss as args
- Conditional content: `<?php if( ... ): ?>`
- Lists: `<?php foreach( ... ): ?>`
- ...


### Functions

ˋˋˋphp
$s = inc( $view, $args);  // string via output buffer, array args
$s = inc($view, $obj);  // obj args
$s = inc2($view, $args);  // Variant of inc(), just uses text replacement (no PHP in view files)
ˋˋˋ
- All add a line break (\n)
- RETURNS: '' if no view

**DEPR** `incb($view, $args);  // Variant, no return, writes in output buffer (less good)


## LICENSE

Copyright (C) Walter A. Jablonowski 2018-2021, MIT [License](LICENSE)

This library is build upon PHP (license see [credits](credits.md)) and has no further dependencies.

[Privacy](https://walter-a-jablonowski.github.io/privacy.html) | [Legal](https://walter-a-jablonowski.github.io/imprint.html)
