# Configuration for PHP Coding Standards Fixer

[![Version](https://img.shields.io/packagist/v/flexis/php-cs-fixer-config?label=stable)](https://packagist.org/packages/flexis/php-cs-fixer-config)
[![Build](https://img.shields.io/github/actions/workflow/status/flex-is/php-cs-fixer-config/ci.yaml?branch=main&logo=github)](https://github.com/flex-is/php-cs-fixer-config/actions/workflows/ci.yaml)
[![Coverage](https://app.codacy.com/project/badge/Coverage/246b2492dc404695b0deee6e6ecadc75)](https://www.codacy.com/gh/flex-is/php-cs-fixer-config/dashboard)
[![License: MIT](https://img.shields.io/badge/license-MIT-informational.svg)](https://opensource.org/licenses/MIT)

This repository was created for the purpose of introducing uniform coding standards for PHP code within [FLEX-IS](https://flexis.sk).

It is based on the ideas of [`refinery29/php-cs-fixer-config`](https://github.com/refinery29/php-cs-fixer-config).

# Installation

Install this package via composer:

`$ composer require --dev flexis/php-cs-fixer-config`

Create a configuration file [`.php-cs-fixer.dist.php`](/.php-cs-fixer.dist.php):
1.  Create `Finder` with paths to the source code.
2.  Choose a set of rules according to the target PHP version.
3.  *(optional)* Set header comment.
4.  Set cache filename and add it to the `.gitignore`.
    -   `.php-cs-fixer.cache`

# Usage

To fix coding standards manually, run:

`$ php vendor/bin/php-cs-fixer fix`

> 💡 See the [official documentation](https://cs.symfony.com/doc/usage) for more examples.

# License

This package is licensed using the MIT License.
