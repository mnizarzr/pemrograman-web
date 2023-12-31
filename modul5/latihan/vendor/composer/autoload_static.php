<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaed25e0caf12ed7354d0283ee6f5da5e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Config\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Config',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\ProductController' => __DIR__ . '/../..' . '/App/Controllers/ProductController.php',
        'App\\Models\\Product' => __DIR__ . '/../..' . '/App/Models/Product.php',
        'App\\Routes\\ProductRoutes' => __DIR__ . '/../..' . '/App/Routes/ProductRoutes.php',
        'App\\Traits\\ApiResponseFormatter' => __DIR__ . '/../..' . '/App/Traits/ApiResponseFormatter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Config\\Database' => __DIR__ . '/../..' . '/Config/Database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaed25e0caf12ed7354d0283ee6f5da5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaed25e0caf12ed7354d0283ee6f5da5e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaed25e0caf12ed7354d0283ee6f5da5e::$classMap;

        }, null, ClassLoader::class);
    }
}
