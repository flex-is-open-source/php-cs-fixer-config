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

namespace Flexis\PhpCsFixer\RuleSet;

/**
 * Interface for a custom set of coding standard rules.
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
     * Set header comment.
     */
    public function setHeader(string $header): void;

    /**
     * Get header comment.
     */
    public function getHeader(): string;
}
