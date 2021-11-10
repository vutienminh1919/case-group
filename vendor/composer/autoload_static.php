<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit336f966e265335a4913ade13adaf9bde
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
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit336f966e265335a4913ade13adaf9bde::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit336f966e265335a4913ade13adaf9bde::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit336f966e265335a4913ade13adaf9bde::$classMap;

        }, null, ClassLoader::class);
    }
}