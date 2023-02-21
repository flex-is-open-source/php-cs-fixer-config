<?php

declare(strict_types=1);

namespace Flexis\PhpCsFixer;

use PhpCsFixer\Config;
use RuntimeException;

/**
 * CsFixer config factory from a custom set of rules.
 */
final class ConfigFactory
{
    /**
     * Creates a configuration based on a rule set.
     *
     * @throws RuntimeException
     */
    public static function fromRuleSet(RuleSetInterface $ruleSet): Config
    {
        $runtimePhpVersion = PHP_VERSION_ID;
        $ruleSetPhpVersion = $ruleSet->getPhpVersion();
        if ($runtimePhpVersion < $ruleSetPhpVersion) {
            $message = sprintf('Current PHP version "%s" is less than targeted PHP version "%s".', $runtimePhpVersion, $ruleSetPhpVersion);

            throw new RuntimeException($message);
        }

        $config = new Config();
        $config->setRules($ruleSet->getRules());

        return $config;
    }
}
