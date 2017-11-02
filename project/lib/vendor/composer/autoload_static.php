<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5cfa43f684fde0c6cc36c3dc13384e9f
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
        '5a4f8922d6b478e5112a2fcfcd7f5db2' => __DIR__ . '/..' . '/lexpress/symfony1/autoload.php',
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine_' => 
            array (
                0 => __DIR__ . '/..' . '/lexpress/doctrine1/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit5cfa43f684fde0c6cc36c3dc13384e9f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
