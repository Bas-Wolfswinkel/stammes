<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\ClassMethod\BoolReturnTypeFromStrictScalarReturnsRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/app',
    ]);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_83,
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::EARLY_RETURN,
        SetList::NAMING,
        SetList::TYPE_DECLARATION,
        SetList::PRIVATIZATION,
    ]);

    $rectorConfig->skip([
        __DIR__ . '/vendor',
        __DIR__ . '/public',
        BoolReturnTypeFromStrictScalarReturnsRector::class => [
            __DIR__ . '/app/View/Composers',
        ],
    ]);

    // Remove the WordPress stubs bootstrap
    // $rectorConfig->bootstrapFiles([
    //     __DIR__ . '/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
    // ]);

    $rectorConfig->phpstanConfig(__DIR__ . '/phpstan.neon');
};
