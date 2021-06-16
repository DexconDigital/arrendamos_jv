<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e2e09db435c9f11637e3b1546fbf840
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e2e09db435c9f11637e3b1546fbf840::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e2e09db435c9f11637e3b1546fbf840::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}