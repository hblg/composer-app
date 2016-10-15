<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4758468d121671c975cb1c8c62f945a3
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WebArticleExtractor\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WebArticleExtractor\\' => 
        array (
            0 => __DIR__ . '/..' . '/zackslash/php-web-article-extractor/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4758468d121671c975cb1c8c62f945a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4758468d121671c975cb1c8c62f945a3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
