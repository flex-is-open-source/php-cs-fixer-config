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
 * Header comment handlers for a custom set of coding standard rules.
 */
trait HeaderCommentTrait
{
    /** Header comment for each file */
    private string $header = '';

    /** {@inheritDoc} */
    public function setHeader(string $header): void
    {
        $this->header = $header;
    }

    /** {@inheritDoc} */
    public function getHeader(): string
    {
        return $this->header;
    }
}
