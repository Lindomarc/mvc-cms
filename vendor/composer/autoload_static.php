<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit365a3cf2f1ee3b47f998aa3c0f6d1619
{
    public static $files = array (
        '65fec9ebcfbb3cbb4fd0d519687aea01' => __DIR__ . '/..' . '/danielstjules/stringy/src/Create.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stringy\\' => 8,
        ),
        'P' => 
        array (
            'Patchwork\\' => 10,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'I' => 
        array (
            'Intervention\\Image\\' => 19,
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Core\\' => 9,
            'App\\Controllers\\' => 16,
            'Acme\\Traits\\' => 12,
            'Acme\\Classes\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stringy\\' => 
        array (
            0 => __DIR__ . '/..' . '/danielstjules/stringy/src',
        ),
        'Patchwork\\' => 
        array (
            0 => __DIR__ . '/..' . '/patchwork/utf8/src/Patchwork',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Intervention\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Models',
        ),
        'App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Core',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controllers',
        ),
        'Acme\\Traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Acme/Traits',
        ),
        'Acme\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Acme/Classes',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Normalizer' => __DIR__ . '/..' . '/patchwork/utf8/src/Normalizer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit365a3cf2f1ee3b47f998aa3c0f6d1619::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit365a3cf2f1ee3b47f998aa3c0f6d1619::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit365a3cf2f1ee3b47f998aa3c0f6d1619::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit365a3cf2f1ee3b47f998aa3c0f6d1619::$classMap;

        }, null, ClassLoader::class);
    }
}
