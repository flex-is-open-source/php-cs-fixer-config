# Configuration for PHP Coding Standards Fixer

[![Version](https://img.shields.io/packagist/v/flexis/php-cs-fixer-config?label=stable)](https://packagist.org/packages/flexis/php-cs-fixer-config)
[![Build](https://github.com/flex-is/php-cs-fixer-config/actions/workflows/main.yml/badge.svg)](https://github.com/flex-is/php-cs-fixer-config/actions/workflows/main.yml)
[![Coverage](https://app.codacy.com/project/badge/Coverage/246b2492dc404695b0deee6e6ecadc75)](https://www.codacy.com/gh/flex-is/php-cs-fixer-config/dashboard)
[![License: MIT](https://img.shields.io/badge/license-MIT-informational.svg)](https://opensource.org/licenses/MIT)

This repository was created for the purpose of introducing uniform coding standards for PHP code within [FLEX-IS](https://flexis.sk).

It is based on the ideas of [`refinery29/php-cs-fixer-config`](https://github.com/refinery29/php-cs-fixer-config).

## Installation

`$ composer require --dev flexis/php-cs-fixer-config`

## Usage

### Configuration

Create a configuration file `.php-cs-fixer.dist.php`:

```php
<?php

declare(strict_types=1);

use Flexis\PhpCsFixer\RuleSet\Sets\Php81;
use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = new Finder();
$finder->in(__DIR__);
$finder->append([
    '.php-cs-fixer.dist.php',
]);

// Pick a configuration based on php version
$ruleSet = new Php81();
$ruleSet->setHeader(<<<'EOF'
    This file is part of configuration package for PHP CS Fixer.

    (c) Martin Miskovic <miskovic.martin@gmail.com>

    For the full copyright and license information, please view
    the LICENSE file that was distributed with this source code.
    EOF);

$config = new Config();
$config->setRules($ruleSet->getRules());
$config->setFinder($finder);
$config->setCacheFile('.php-cs-fixer.cache');

return $config;
```

### Git

Add cache file created by PHP CS Fixer to `.gitignore`:

`.php-cs-fixer.cache`

### Makefile

Create a Makefile with desired recipes, e.g.:

```Makefile
cs:
	php vendor/bin/php-cs-fixer fix
```

## Fixing issues

To fix coding standards, simply run

`$ make cs`

## License

This package is licensed using the MIT License.
