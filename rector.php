<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withImportNames()
    ->withParallel()
    ->withPaths([
        __DIR__ . '/examples',
        __DIR__ . '/src',
    ])
    ->withPhpSets(php81: true)
    ->withTypeCoverageLevel(0)
    ->withDeadCodeLevel(0)
    ->withCodeQualityLevel(0);
