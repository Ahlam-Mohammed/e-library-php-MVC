<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b72b411ee6971f788ffee01fbc0b6bd
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Controller\\' => 15,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b72b411ee6971f788ffee01fbc0b6bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b72b411ee6971f788ffee01fbc0b6bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b72b411ee6971f788ffee01fbc0b6bd::$classMap;

        }, null, ClassLoader::class);
    }
}
