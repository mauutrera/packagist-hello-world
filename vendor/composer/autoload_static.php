<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79e90b0fcb6a170596e509dc724617a8
{
    public static $files = array (
        '205d8a57c797858ce1179136c67be3bc' => __DIR__ . '/../..' . '/src/Today.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Maupkg\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Maupkg\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit79e90b0fcb6a170596e509dc724617a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79e90b0fcb6a170596e509dc724617a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79e90b0fcb6a170596e509dc724617a8::$classMap;

        }, null, ClassLoader::class);
    }
}
