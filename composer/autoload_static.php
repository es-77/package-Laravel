<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc40cdc8cc9b280f66b5e5df72c984cd
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Emmanuel\\Querybuilderpackage\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Emmanuel\\Querybuilderpackage\\' => 
        array (
            0 => 'E:\\/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc40cdc8cc9b280f66b5e5df72c984cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc40cdc8cc9b280f66b5e5df72c984cd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfc40cdc8cc9b280f66b5e5df72c984cd::$classMap;

        }, null, ClassLoader::class);
    }
}
