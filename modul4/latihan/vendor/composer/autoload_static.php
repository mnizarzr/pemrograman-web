<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf655ba81742c0f3a93112194b0c38217
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Traits\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Traits',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controllers\\Controller' => __DIR__ . '/../..' . '/src/Controllers/Controller.php',
        'Controllers\\ProductController' => __DIR__ . '/../..' . '/src/Controllers/ProductController.php',
        'Traits\\ResponseFormatter' => __DIR__ . '/../..' . '/src/Traits/ResponseFormatter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf655ba81742c0f3a93112194b0c38217::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf655ba81742c0f3a93112194b0c38217::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf655ba81742c0f3a93112194b0c38217::$classMap;

        }, null, ClassLoader::class);
    }
}