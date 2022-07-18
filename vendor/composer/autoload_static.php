<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d59451aae11b8c740bfd33c48e9b1c5
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
        'App\\Services\\Page' => __DIR__ . '/../..' . '/app/Services/Page.php',
        'App\\Services\\Router' => __DIR__ . '/../..' . '/app/Services/Router.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d59451aae11b8c740bfd33c48e9b1c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d59451aae11b8c740bfd33c48e9b1c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d59451aae11b8c740bfd33c48e9b1c5::$classMap;

        }, null, ClassLoader::class);
    }
}