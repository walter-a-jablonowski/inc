# Most tiny templating system

PHP itself is a templating system. This mini lib just adds a bit of functionallity.


### Usage

Instead of

`$myarg = 1; require($view);  // where view uses $myarg`

use

`inc($view, ['myarg' => 1]);  // hides scope`


### Functions

`inc( $view, $args = [])`  Includes file, hides args in scope, adds a line break (\n)
`incn( $view, $args = [])` Like inc(), adds no break
`inc1($view, ...$args)` Uses ...$args instead array
`incy( $view, $args_file )` Uses yml args
`sinc $view, $args = [])` Return html as string


### View files

Just use inc() and PHP

- Fields:      `<?= $php ?>`
- Lists:       `<?php foreach( ... ): ?>`
- Hierarchie:  Use a sub inc


## LICENSE

Copyright (C) Walter A. Jablonowski 2018, MIT [License](LICENSE)

This library is build upon PHP (license see [credits](credits.md)) and has no further dependencies.

[Privacy](https://walter-a-jablonowski.github.io/privacy.html) | [Legal](https://walter-a-jablonowski.github.io/imprint.html)
