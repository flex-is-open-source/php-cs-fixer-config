<?php

declare(strict_types=1);

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