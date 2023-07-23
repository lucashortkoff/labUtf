<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92d6d32dcd6f5b0cdfdee3b680c4d58f
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'L' => 
        array (
            'Lukin\\Application\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Lukin\\Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Smalot\\PdfParser\\' => 
            array (
                0 => __DIR__ . '/..' . '/smalot/pdfparser/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92d6d32dcd6f5b0cdfdee3b680c4d58f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92d6d32dcd6f5b0cdfdee3b680c4d58f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit92d6d32dcd6f5b0cdfdee3b680c4d58f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit92d6d32dcd6f5b0cdfdee3b680c4d58f::$classMap;

        }, null, ClassLoader::class);
    }
}