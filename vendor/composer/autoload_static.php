<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb08511bfb05a75db88b0752ffa0a9eee
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb08511bfb05a75db88b0752ffa0a9eee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb08511bfb05a75db88b0752ffa0a9eee::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
