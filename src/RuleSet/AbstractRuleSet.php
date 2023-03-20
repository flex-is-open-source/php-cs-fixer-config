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

use PhpCsFixer\RuleSet\RuleSetInterface;

/**
 * Abstract implementation of rule set traits.
 * Intended for testing purposes only.
 */
abstract class AbstractRuleSet implements RuleSetInterface
{
    use HeaderCommentTrait;
}
