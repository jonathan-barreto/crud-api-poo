<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf5c0bf80739e741c4b1c619924cee599
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitf5c0bf80739e741c4b1c619924cee599', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf5c0bf80739e741c4b1c619924cee599', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf5c0bf80739e741c4b1c619924cee599::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
