<?php
// see https://github.com/FriendsOfPHP/PHP-CS-Fixer

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude(['vendor'])
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP74Migration:risky' => true,
        '@PHPUnit75Migration:risky' => true,
        'declare_strict_types' => false,
        'native_function_invocation' => ['include' => ['@all']],
        'concat_space' => ['spacing' => 'one'],
        'binary_operator_spaces' => ['operators' => ['=>' => 'align', '=' => 'align']],
        'phpdoc_align' => ['align' => 'vertical'],
        'phpdoc_summary' => false,
    ])
    ->setFinder($finder)
;
