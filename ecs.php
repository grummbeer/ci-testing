<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/functions.php',
        __DIR__ . '/class.php',
        __DIR__ . '/constants.php',
    ])

    ->withFileExtensions(['php'])

    // add a single rule
    ->withRules([
    ])

    // add sets - group of rules
    ->withPreparedSets(
        psr12: true,
        arrays: true,
        comments: true,
        docblocks: true,
        spaces: true,
        namespaces: true,
     )
;
