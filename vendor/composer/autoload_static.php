<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit559ed547c0290a1d5dbaca373bcd5d0c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit559ed547c0290a1d5dbaca373bcd5d0c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit559ed547c0290a1d5dbaca373bcd5d0c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit559ed547c0290a1d5dbaca373bcd5d0c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
