<?php

declare(strict_types=1);

/*
 * This file is part of configuration package for PHP CS Fixer.
 *
 * (c) Martin Miskovic <miskovic.martin@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

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

    /**
     * Set automatic header comment.
     */
    public function setHeader(string $header): void;
}
