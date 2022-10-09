<?php
/*
* This document has been generated with
* https://mlocati.github.io/php-cs-fixer-configurator/#version:3.0.0-rc.1|configurator
* you can change this configuration by importing this file.
*/
$config = new PhpCsFixer\Config();
return $config
->setRiskyAllowed(true)
->setRules([
    '@PSR12' => true,
    'align_multiline_comment' => true,
    'array_indentation' => true,
    'array_syntax' => false,
    'binary_operator_spaces' => true,
    'blank_line_before_statement' => ['statements'=>['break','case','continue','declare','default','do','exit','for','foreach','goto','if','include','include_once','require','require_once','return','switch','throw','try','while','yield','yield_from']],
    'cast_spaces' => false,
    'class_attributes_separation' => false,
    //'class_attributes_separation' => ['elements' => ['const' => 'none','method' => 'one','property' => 'one']],
    'clean_namespace' => true,
    'combine_consecutive_issets' => true,
    'combine_consecutive_unsets' => true,
    'concat_space' => ['spacing'=>'one'],
    'constant_case' => true,
    'echo_tag_syntax' => true,
    'escape_implicit_backslashes' => true,
    'explicit_string_variable' => true,
    'fully_qualified_strict_types' => true,
    'function_typehint_space' => true,
    'global_namespace_import' => ['import_classes'=>true,'import_constants'=>true,'import_functions'=>true],
    'heredoc_indentation' => ['indentation'=>'same_as_start'],
    'include' => true,
    'magic_constant_casing' => true,
    'magic_method_casing' => true,
    'method_chaining_indentation' => true,
    'multiline_comment_opening_closing' => true,
    'multiline_whitespace_before_semicolons' => true,
    'native_function_casing' => true,
    'native_function_type_declaration_casing' => true,
    'no_alias_language_construct_call' => true,
    'no_alternative_syntax' => true,
    'no_binary_string' => true,
    'no_blank_lines_after_phpdoc' => true,
    'no_empty_comment' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'no_extra_blank_lines' => true,
    'no_leading_namespace_whitespace' => true,
    'no_mixed_echo_print' => true,
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_short_bool_cast' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_spaces_around_offset' => true,
    'no_superfluous_phpdoc_tags' => true,
    'no_trailing_comma_in_list_call' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'no_unset_cast' => true,
    'no_unused_imports' => true,
    'no_useless_else' => true,
    'no_useless_return' => true,
    'no_whitespace_before_comma_in_array' => true,
    'normalize_index_brace' => true,
    'not_operator_with_space' => true,
    'nullable_type_declaration_for_default_null_value' => true,
    'object_operator_without_whitespace' => true,
    'operator_linebreak' => true,
    'phpdoc_align' => true,
    'phpdoc_annotation_without_dot' => true,
    'phpdoc_indent' => true,
    'phpdoc_line_span' => ['const'=>'single', 'property' => 'single'],
    'phpdoc_no_access' => true,
    'phpdoc_no_package' => true,
    'phpdoc_no_useless_inheritdoc' => true,
    'phpdoc_single_line_var_spacing' => true,
    'return_assignment' => true,
    'semicolon_after_instruction' => true,
    'single_line_comment_style' => true,
    'single_line_throw' => true,
    'single_quote' => true,
    'single_space_after_construct' => true,
    'single_trait_insert_per_statement' => false,
    'space_after_semicolon' => true,
    'standardize_increment' => true,
    'standardize_not_equals' => true,
    'trailing_comma_in_multiline' => true,
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
])
->setFinder(
    PhpCsFixer\Finder::create()
->exclude('vendor')
->in(__DIR__)
)
;
