<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4670fe8c3d90c8ef4fb57e8913ec324d
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cedp\\Team\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cedp\\Team\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4670fe8c3d90c8ef4fb57e8913ec324d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4670fe8c3d90c8ef4fb57e8913ec324d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
