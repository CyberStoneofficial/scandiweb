<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a0310e1306dd7a950f2157e01ff1835
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Scandiweb\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Scandiweb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a0310e1306dd7a950f2157e01ff1835::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a0310e1306dd7a950f2157e01ff1835::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
