<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude([
        'app/Console',
        'app/Exceptions',
        'app/Providers',
    ])
    ->notPath('src/Symfony/Component/Translation/Tests/fixtures/resources.php')
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PSR12' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder)
;