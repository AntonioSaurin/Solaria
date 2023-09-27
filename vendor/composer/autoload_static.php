<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite66a26ce3c170791c84d68760c403208
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite66a26ce3c170791c84d68760c403208::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite66a26ce3c170791c84d68760c403208::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite66a26ce3c170791c84d68760c403208::$classMap;

        }, null, ClassLoader::class);
    }
}