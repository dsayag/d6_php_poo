<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc0ab2ed549816770a8ffb66e64efb9c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Soigneur\\' => 9,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'E' => 
        array (
            'Enclos\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
            'Animal\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Soigneur\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes/Soigneur',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Model',
        ),
        'Enclos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes/Enclos',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
        'Animal\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes/Animal',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc0ab2ed549816770a8ffb66e64efb9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc0ab2ed549816770a8ffb66e64efb9c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc0ab2ed549816770a8ffb66e64efb9c::$classMap;

        }, null, ClassLoader::class);
    }
}
