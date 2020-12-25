# Most tiny templating system

PHP itself is a templating system. This mini lib just adds a bit of functionallity.


### Usage

Instead of

`$myarg = 1; require($view);  // where view uses $myarg`

use

`inc($view, ['myarg' => 1]);  // hides scope`


### Functions

- `inc( $view, $args = [])` Includes file, hides args in scope, adds line break (\n)
- `inc_nobr( $view, $args = [])` Like inc(), adds no break
- `inc_args($view, ...$args)` Uses ...$args instead array
- `inc_s $view, $args = [])` Return as string

Class Args: A simple class representing arguments for $args. Can be used as an alternative for arrays.

```php
$args = new Args();
$args->myArg = 1;

// Nesting

$args->subArgs = new Args(['myArg2' => 2]);
```

Also implemented: has(), ArrayAccess. See implementation.


### View files

Inside view files just use inc() and PHP

- Fields:      `<?= $php ?>`
- Lists:       `<?php foreach( ... ): ?>`
- Hierarchie:  Use a sub inc


## LICENSE

Copyright (C) Walter A. Jablonowski 2018-2020, MIT [License](LICENSE)

This library is build upon PHP (license see [credits](credits.md)) and has no further dependencies.

[Privacy](https://walter-a-jablonowski.github.io/privacy.html) | [Legal](https://walter-a-jablonowski.github.io/imprint.html)
