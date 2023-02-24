<?php

declare(strict_types=1);

use Flexis\PhpCsFixer\ConfigFactory;
use Flexis\PhpCsFixer\RuleSet\Php81;
use PhpCsFixer\Finder;

$finder = new Finder();
$finder->in(__DIR__);
$finder->exclude('var');

$ruleSet = new Php81();
$config = ConfigFactory::fromRuleSet($ruleSet);
$config->setFinder($finder);
$config->setCacheFile('.php-cs-fixer.cache');

return $config;
