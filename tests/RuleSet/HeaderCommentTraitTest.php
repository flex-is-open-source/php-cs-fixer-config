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

use Flexis\PhpCsFixer\RuleSet\AbstractRuleSet;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Flexis\PhpCsFixer\RuleSet\HeaderCommentTrait
 *
 * @internal
 */
final class HeaderCommentTraitTest extends TestCase
{
    /**
     * @covers ::getHeader
     */
    public function testDefaultHeaderIsEmpty(): void
    {
        $stub = $this->getMockForAbstractClass(AbstractRuleSet::class);
        $header = $stub->getHeader();

        self::assertIsString($header);
        self::assertEmpty($header);
    }

    /**
     * @covers ::getHeader
     * @covers ::setHeader
     */
    public function testCustomHeaderIsNotEmpty(): void
    {
        $stub = $this->getMockForAbstractClass(AbstractRuleSet::class);
        $customHeader = 'header';
        $stub->setHeader($customHeader);
        $header = $stub->getHeader();

        self::assertIsString($header);
        self::assertSame($customHeader, $header);
    }
}
