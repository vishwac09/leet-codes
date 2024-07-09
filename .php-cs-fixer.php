<?php

$finder = (new PhpCsFixer\Finder())
    ->in([
      __DIR__ . '/src/php',
      __DIR__ . '/tests/php',
    ])
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
    ])
    ->setFinder($finder)
;
