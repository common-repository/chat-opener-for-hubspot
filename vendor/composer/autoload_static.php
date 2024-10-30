<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit740f48f0ef51d0cad6faa38e3c86cfd3
{
    public static $files = array (
        '8ca8a91f0a826d6c6c8f274c90ca7d88' => __DIR__ . '/..' . '/wpmetabox/meta-box/meta-box.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YaroChatOpener\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YaroChatOpener\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/php',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit740f48f0ef51d0cad6faa38e3c86cfd3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit740f48f0ef51d0cad6faa38e3c86cfd3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
