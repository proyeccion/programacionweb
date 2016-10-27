<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf13ebe953f8c4d3b726b81539d2d9d6d
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Unitek\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Unitek\\' => 
        array (
            0 => __DIR__ . '/../..' . '/fuente',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf13ebe953f8c4d3b726b81539d2d9d6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf13ebe953f8c4d3b726b81539d2d9d6d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
