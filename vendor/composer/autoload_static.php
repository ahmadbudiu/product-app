<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f51017d19606bd425e0ded7851e75f8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Config\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f51017d19606bd425e0ded7851e75f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f51017d19606bd425e0ded7851e75f8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5f51017d19606bd425e0ded7851e75f8::$classMap;

        }, null, ClassLoader::class);
    }
}
