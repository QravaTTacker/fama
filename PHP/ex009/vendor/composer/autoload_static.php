<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c15e1498c735f3817eea95c55ebd882
{
    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'Qravattacker\\Ex009\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Qravattacker\\Ex009\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c15e1498c735f3817eea95c55ebd882::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c15e1498c735f3817eea95c55ebd882::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c15e1498c735f3817eea95c55ebd882::$classMap;

        }, null, ClassLoader::class);
    }
}
