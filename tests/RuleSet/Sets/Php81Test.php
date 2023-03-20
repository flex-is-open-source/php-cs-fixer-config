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

namespace Tests\RuleSet\Sets;

use Flexis\PhpCsFixer\RuleSet\Sets\Php81;
use Tests\RuleSet\AbstractRuleSetTestCase;

/**
 * @coversDefaultClass \Flexis\PhpCsFixer\RuleSet\Sets\Php81
 *
 * @internal
 */
final class Php81Test extends AbstractRuleSetTestCase
{
    public function setUp(): void
    {
        $this->ruleSet = new Php81();
    }
}
