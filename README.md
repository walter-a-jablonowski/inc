# Most tiny templating system

PHP itself is a templating system. This mini lib just adds a bit of functionallity.


### Usage

```
composer require walter-a-jablonowski/inc
```

Instead of

`$myarg = 1; require($view);  // where view uses $myarg`

use

`inc($view, ['myarg' => 1]);  // hides scope`


### Functions

- `inc( $view, $args)` Includes file, hides args in scope, adds line break (\n)
- `inc($view, $arg1, 'arg2')` Uses single args instead array
- `inc($view, $obj)` Uses some obj
- `inc_s $view, $args)` Return as string


### View files

Inside view files just use inc() and PHP

- Fields:      `<?= $php ?>`
- Lists:       `<?php foreach( ... ): ?>`
- Hierarchie:  Use a sub inc


### Class Args

A simple class representing arguments for $args. Can be used as an alternative for arrays.

```php
$args = new Args();
$args->myArg = 1;

// Nesting

$args->subArgs = new Args(['myArg2' => 2]);
```

Also implemented: has(), ArrayAccess. See implementation.


## LICENSE

Copyright (C) Walter A. Jablonowski 2018-2020, MIT [License](LICENSE)

This library is build upon PHP (license see [credits](credits.md)) and has no further dependencies.

[Privacy](https://walter-a-jablonowski.github.io/privacy.html) | [Legal](https://walter-a-jablonowski.github.io/imprint.html)
