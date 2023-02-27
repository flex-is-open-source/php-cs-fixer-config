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

use Flexis\PhpCsFixer\RuleSet\Php81;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Flexis\PhpCsFixer\RuleSet\Php81
 *
 * @internal
 */
final class Php81Test extends TestCase
{
    private Php81 $ruleSet;

    protected function setUp(): void
    {
        $this->ruleSet = new Php81();
    }

    /**
     * @covers ::getPhpVersion
     */
    public function testSupportedPhpVersion(): void
    {
        $phpVersion = $this->ruleSet->getPhpVersion();
        self::assertSame(80100, $phpVersion);
        self::assertIsInt($phpVersion);
    }

    /**
     * @covers ::getRules
     */
    public function testRules(): void
    {
        $rules = $this->ruleSet->getRules();
        self::assertIsArray($rules);
        self::assertArrayHasKey('@PhpCsFixer', $rules);
    }
}
