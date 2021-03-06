<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf78890411c758c56d41ae3877d16fee9
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cedp\\Contact\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cedp\\Contact\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf78890411c758c56d41ae3877d16fee9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf78890411c758c56d41ae3877d16fee9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
