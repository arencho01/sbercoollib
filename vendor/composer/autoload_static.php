<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b0827e68d3b89a575589b0d3ce49774
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SberCoollib\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SberCoollib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b0827e68d3b89a575589b0d3ce49774::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b0827e68d3b89a575589b0d3ce49774::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b0827e68d3b89a575589b0d3ce49774::$classMap;

        }, null, ClassLoader::class);
    }
}
