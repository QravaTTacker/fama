<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83910c4bafdda39e1c0b7877811547ce
{
    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'Qravattacker\\Ex008\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Qravattacker\\Ex008\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit83910c4bafdda39e1c0b7877811547ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit83910c4bafdda39e1c0b7877811547ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit83910c4bafdda39e1c0b7877811547ce::$classMap;

        }, null, ClassLoader::class);
    }
}