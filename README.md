# Custom PHP_CodeSniffer


[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%208.2-8892BF.svg)](https://www.php.net/releases/8.1/en.php)
[![Continuous Integration Status](https://github.com/leonhusmann/codesniffer-rules/workflows/CI/badge.svg)](https://github.com/leonhusmann/codesniffer-rules/actions)
[![Code Coverage](https://codecov.io/gh/leonhusmann/codesniffer-rules/branch/main/graph/badge.svg?token=X)](https://codecov.io/gh/leonhusmann/codesniffer-rules)
[![Type Coverage](https://shepherd.dev/github/leonhusmann/codesniffer-rules/coverage.svg)](https://shepherd.dev/github/leonhusmann/codesniffer-rules)
[![Psalm Level](https://shepherd.dev/github/leonhusmann/codesniffer-rules/level.svg)](https://shepherd.dev/github/leonhusmann/codesniffer-rules)
[![PHPStan Level](https://img.shields.io/badge/PHPStan-Max-brightgreen)](https://shepherd.dev/github/leonhusmann/codesniffer-rules)
[![License](https://poser.pugx.org/leonhusmann/codesniffer-rules/license)](https://github.com/leonhusmann/codesniffer-rules/blob/main/LICENSE)

Additional PHP_CodeSniffer rules ported from existing PHP-CS-Fixer rules.

## Tests

```shell
composer test
composer test-coverage
```

## Contribution

We want to add the following rules, feel free to create a issue for the one you want to work on and assign that to you.

- [ ] blank_line_before_statement
- [ ] no_blank_lines_after_phpdoc
- [ ] no_extra_blank_lines
- [ ] combine_consecutive_issets
- [ ] combine_consecutive_unsets
- [ ] escape_implicit_backslashes
- [ ] fully_qualified_strict_types
- [ ] heredoc_indentation
- [ ] new_with_braces
- [ ] no_binary_string
- [ ] no_leading_namespace_whitespace
- [ ] no_mixed_echo_print
- [ ] no_multiline_whitespace_around_double_arrow
- [x] no_short_bool_cast
- [ ] no_spaces_around_offset
- [ ] no_superfluous_elseif
- [ ] no_unneeded_control_parentheses
- [ ] no_unneeded_curly_braces
- [ ] no_useless_else
- [ ] no_useless_return
- [ ] normalize_index_brace
- [ ] object_operator_without_whitespace
- [ ] echo_tag_syntax
- [ ] semicolon_after_instruction
- [ ] standardize_not_equals
- [ ] ternary_to_null_coalescing
- [ ] trailing_comma_in_multiline
- [ ] unary_operator_spaces
- [ ] binary_operator_spaces
- [ ] operator_linebreak
