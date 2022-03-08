<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude([
        'app/Console',
        'app/Exceptions',
        'app/Providers',
    ])
    ->notPath('src/Symfony/Component/Translation/Tests/fixtures/resources.php')
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/database/factories',
        __DIR__ . '/database/seeders',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder)
;
