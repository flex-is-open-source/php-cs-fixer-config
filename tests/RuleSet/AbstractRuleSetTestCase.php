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

namespace Tests\RuleSet;

use Flexis\PhpCsFixer\RuleSet\RuleSetInterface;
use PHPUnit\Framework\TestCase;

/**
 * Base class for all rule set implementations.
 */
abstract class AbstractRuleSetTestCase extends TestCase
{
    protected RuleSetInterface $ruleSet;

    /**
     * @covers ::getRules
     */
    public function testDefaultHeaderIsEmpty(): void
    {
        $rules = $this->ruleSet->getRules();
        $headerComment = $rules['header_comment'] ?? [];
        $header = $headerComment['header'] ?? '';

        self::assertIsString($header);
        self::assertEmpty($header);
    }

    /**
     * @covers ::getRules
     * @covers ::setHeader
     */
    public function testCustomHeaderIsNotEmpty(): void
    {
        $customHeader = 'header';
        $this->ruleSet->setHeader($customHeader);

        $rules = $this->ruleSet->getRules();
        $headerComment = $rules['header_comment'] ?? [];
        $header = $headerComment['header'] ?? '';

        self::assertArrayHasKey('header_comment', $rules);
        self::assertIsArray($headerComment);
        self::assertArrayHasKey('header', $headerComment);
        self::assertIsString($header);
        self::assertEquals($customHeader, $header);
    }
}
