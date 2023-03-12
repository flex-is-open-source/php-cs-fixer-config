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

use Flexis\PhpCsFixer\RuleSetInterface;

/**
 * Custom set of coding standard rules for PHP 8.1.
 */
final class Php81 implements RuleSetInterface
{
    /** Header comment for each file */
    private ?string $header = null;

    /** {@inheritDoc} */
    public function getRules(): array
    {
        $rules = [
            '@PhpCsFixer' => true,
            '@PHP81Migration' => true,
            'global_namespace_import' => [
                'import_classes' => true,
            ],
            'header_comment' => false,
            'not_operator_with_space' => true,
            'nullable_type_declaration_for_default_null_value' => [
                'use_nullable_type_declaration' => true,
            ],
            'single_line_throw' => true,
            'yoda_style' => [
                'equal' => false,
                'identical' => false,
                'less_and_greater' => false,
            ],
        ];

        if ($this->header !== null) {
            $rules['header_comment'] = [
                'header' => $this->header,
            ];
        }

        return $rules;
    }

    /** {@inheritDoc} */
    public function getPhpVersion(): int
    {
        return 80100;
    }

    /** {@inheritDoc} */
    public function setHeader(string $header): void
    {
        $this->header = $header;
    }
}
