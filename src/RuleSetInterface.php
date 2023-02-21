<?php

declare(strict_types=1);

namespace Flexis\PhpCsFixer;

/**
 * Custom set of coding standard rules.
 */
interface RuleSetInterface
{
    /**
     * Returns an array of rules along with their configuration.
     *
     * @return array<string, array<string, mixed>|bool>
     */
    public function getRules(): array;

    /**
     * Returns the minimum required PHP version (PHP_VERSION_ID).
     *
     * @see http://php.net/manual/en/reserved.constants.php
     */
    public function getPhpVersion(): int;
}
