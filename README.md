# Configuration for PHP Coding Standards Fixer

[![Version](https://img.shields.io/packagist/v/flexis/php-cs-fixer-config?label=stable)](https://packagist.org/packages/flexis/php-cs-fixer-config)
[![License](https://img.shields.io/github/license/flex-is/php-cs-fixer-config?logo=open-source-initiative)](https://opensource.org/license/mit/)

This repository was created for the purpose of introducing uniform coding standards for PHP code within [FLEX-IS](https://flexis.sk).

It is based on the ideas of [`refinery29/php-cs-fixer-config`](https://github.com/refinery29/php-cs-fixer-config).

## ToDo
- migrate build to GitHub actions

## Installation

`$ composer require --dev flexis/php-cs-fixer-config`

## Usage

### Configuration

Create a configuration file `.php-cs-fixer.dist.php`:

```php
<?php

declare(strict_types=1);

use Flexis\PhpCsFixer\ConfigFactory;
use Flexis\PhpCsFixer\RuleSet\Php81;
use PhpCsFixer\Finder;

$finder = new Finder();
$finder->in(__DIR__)
$finder->append([
    '.php-cs-fixer.php',
    '.php-cs-fixer.dist.php',
]);

// pick a configuration based on php version
$ruleSet = new Php81();
$ruleSet->setHeader(<<<'EOF'
    This file is part of `flexis/php-cs-fixer-config`.

    (c) Martin Miskovic <miskovic.martin@gmail.com>

    For the full copyright and license information, please view
    the LICENSE file that was distributed with this source code.
    EOF);

$config = ConfigFactory::fromRuleSet($ruleSet);
$config->setFinder($finder);
$config->setCacheFile('.php-cs-fixer.cache');

return $config;
```

### Git

Add cache file created by PHP CS Fixer to `.gitignore`:

```
.php-cs-fixer.cache
# or
*.cache
```
### Makefile

Create a Makefile with desired targets, e.g.:

```Makefile
cs:
	vendor/bin/php-cs-fixer fix

cs-ci:
	vendor/bin/php-cs-fixer fix --dry-run --no-interaction --show-progress=none --stop-on-violation
```

## Fixing issues

### Manually

To fix coding standards, simply run

```sh
$ make cs
```

### CI

```sh
$ make cs-ci
```

### Pre-commit hook

Create a pre-commit hook, according to this example
[`.git/pre-commit`](https://gist.github.com/miskovicm/d3d2fafe3a3ca47c79bab0c80d1fb9c4).

## License

This package is licensed using the MIT License.
