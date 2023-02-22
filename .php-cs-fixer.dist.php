<?php

declare(strict_types=1);

use Elefant\CsFixer\ConfigFactory;
use Elefant\CsFixer\RuleSet\Php81;
use PhpCsFixer\Finder;

$ruleSet = new Php81();

$finder = Finder::create();
$finder->in(__DIR__);
$finder->exclude('tmp');
$finder->exclude('vendor');

$config = ConfigFactory::fromRuleSet($ruleSet);
$config->setFinder($finder);
$config->setCacheFile('./var/tmp/php-cs-fixer.cache');

return $config;
