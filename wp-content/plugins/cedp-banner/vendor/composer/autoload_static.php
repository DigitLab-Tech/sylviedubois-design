<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit163bc87f26ecb83928cad1e8958548ba
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cedp\\Banner\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cedp\\Banner\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit163bc87f26ecb83928cad1e8958548ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit163bc87f26ecb83928cad1e8958548ba::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
