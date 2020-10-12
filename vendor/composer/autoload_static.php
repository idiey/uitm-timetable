<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit049a02440ddf6b686a4738e08b34f70c
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        'fd7db70706777c74792144bfcaec2647' => __DIR__ . '/..' . '/jakezatecky/array_group_by/src/array_group_by.php',
        '58b658e436daca36cf06d6c088ab84cc' => __DIR__ . '/../..' . '/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yiedpozi\\UitmTimetable\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'L' => 
        array (
            'Longman\\TelegramBot\\' => 20,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yiedpozi\\UitmTimetable\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Longman\\TelegramBot\\' => 
        array (
            0 => __DIR__ . '/..' . '/longman/telegram-bot/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit049a02440ddf6b686a4738e08b34f70c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit049a02440ddf6b686a4738e08b34f70c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}