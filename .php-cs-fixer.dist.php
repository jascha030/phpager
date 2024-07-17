<?php

declare(strict_types=1);

use PhpCsFixer\Finder;
use PhpCsFixer\Config;

return (new Config())
    ->setRules([
        '@PER-CS'       => true,
        '@PER-CS:risky' => true,
        '@PSR1'        => true,
        '@PSR12'       => true,
        '@PSR12:risky' => true,
        '@Symfony'       => true,
        '@Symfony:risky' => true,

        'declare_strict_types'                             => true,
        'no_php4_constructor'                              => true,
        'single_line_empty_body'                           => false,
        'blank_line_after_opening_tag'                     => false,
        'nullable_type_declaration_for_default_null_value' => true,
        'class_definition'                                 => [
            'space_before_parenthesis' => true,
            'single_line'              => true,
        ],
        'method_argument_space' => [
            'on_multiline' => 'ensure_fully_multiline',
        ],
        'ordered_imports' => [
            'imports_order' => [
                'class',
                'function',
                'const',
            ],
            'sort_algorithm' => 'alpha',
        ],
        'echo_tag_syntax' => [
            'format' => 'short',
        ],
        'single_class_element_per_statement' => [
            'elements' => ['property'],
        ],
        'not_operator_with_successor_space' => true,
        'single_quote'                      => [
            'strings_containing_single_quote_chars' => true,
        ],
        'class_attributes_separation' => [
            'elements' => [
                'const'        => 'one',
                'method'       => 'one',
                'property'     => 'one',
                'trait_import' => 'none',
            ],
        ],
        'combine_consecutive_unsets' => true,
        'combine_consecutive_issets' => true,
        'concat_space'               => [
            'spacing' => 'one',
        ],
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'align_multiline_comment' => true,
        'array_indentation'       => true,
        'binary_operator_spaces'  => [
            'default'   => 'single_space',
            'operators' => [
                '='  => 'align_single_space_minimal',
                '=>' => 'align_single_space_minimal',
            ],
        ],
        'blank_line_before_statement' => [
            'statements' => [
                'break',
                'case',
                'continue',
                'declare',
                'default',
                'exit',
                'goto',
                'include',
                'include_once',
                'require',
                'require_once',
                'return',
                'switch',
                'throw',
                'try',
            ],
        ],
        'doctrine_annotation_spaces'  => true,
        'string_implicit_backslashes' => true,
        'explicit_indirect_variable'  => true,
        'explicit_string_variable'    => true,
        'global_namespace_import'     => [
            'import_classes'   => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'heredoc_indentation'                    => true,
        'heredoc_to_nowdoc'                      => true,
        'method_chaining_indentation'            => true,
        'multiline_comment_opening_closing'      => true,
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'no_multi_line',
        ],
        'no_alternative_syntax' => [
            'fix_non_monolithic_code' => false,
        ],
        'no_extra_blank_lines' => [
            'tokens' => [
                'break',
                'case',
                'continue',
                'curly_brace_block',
                'default',
                'extra',
                'parenthesis_brace_block',
                'return',
                'square_brace_block',
                'switch',
                'throw',
                'use',
                'attribute',
            ],
        ],
        'no_null_property_initialization' => true,
        'no_superfluous_elseif'           => true,
        'no_useless_else'                 => true,
        'no_useless_return'               => true,
        'operator_linebreak'              => [
            'only_booleans' => true,
        ],
        'php_unit_internal_class'             => true,
        'php_unit_test_class_requires_covers' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_no_empty_return'              => true,
        'phpdoc_order_by_value'               => true,
        'phpdoc_to_comment'                   => false,
        'phpdoc_var_annotation_correct_order' => true,
        'protected_to_private'                => true,
        'return_assignment'                   => true,
        'self_static_accessor'                => true,
        'no_trailing_comma_in_singleline'     => [
            'elements' => [
                'arguments',
                'array_destructuring',
                'array',
                'group_import',
            ],
        ],
        'trailing_comma_in_multiline' => [
            'after_heredoc' => true,
            'elements'      => [
                'arrays',
                'arguments',
            ],
        ],
    ])
    ->setFinder(
        (new Finder())
            ->ignoreDotFiles(false)
            ->ignoreVCSIgnored(true)
            ->exclude([
                'tools',
                '.github',
                '.phive',
                'vendor-bin'
            ])
            ->in(__DIR__)
    );
