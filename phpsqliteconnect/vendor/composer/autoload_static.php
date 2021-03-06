<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3835baaa15ca91d39a83e449e1f0e94
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

    public static $classMap = array (
        'App\\Config' => __DIR__ . '/../..' . '/app/Config.php',
        'App\\SQLiteConnection' => __DIR__ . '/../..' . '/app/SQLiteConnection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3835baaa15ca91d39a83e449e1f0e94::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3835baaa15ca91d39a83e449e1f0e94::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb3835baaa15ca91d39a83e449e1f0e94::$classMap;

        }, null, ClassLoader::class);
    }
}
