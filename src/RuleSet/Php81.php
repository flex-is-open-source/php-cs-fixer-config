<?php

declare(strict_types=1);

namespace Flexis\PhpCsFixer\RuleSet;

use Flexis\PhpCsFixer\RuleSetInterface;

/**
 * Custom set of coding standard rules for PHP 8.1.
 */
final class Php81 implements RuleSetInterface
{
    /** {@inheritDoc} */
    public function getRules(): array
    {
        return [
            '@PhpCsFixer' => true,
            '@PHP81Migration' => true,
            'global_namespace_import' => [
                'import_classes' => true,
            ],
            'not_operator_with_space' => true,
            'nullable_type_declaration_for_default_null_value' => [
                'use_nullable_type_declaration' => true,
            ],
            'single_line_throw' => true,
        ];
    }

    /** {@inheritDoc} */
    public function getPhpVersion(): int
    {
        return 80100;
    }
}
