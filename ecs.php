<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPaths([
        __DIR__ . '/functions.php',
        __DIR__ . '/class.php',
    ])

    // add a single rule
    ->withRules([
    ])

    // add sets - group of rules
    ->withPreparedSets(
        psr12: true,
         // arrays: true,
         // namespaces: true,
         spaces: true,
         // docblocks: true,
         // comments: true,
     )

     ;
