<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb29016a4ad6c2afdc5a94ae3a827457e
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitb29016a4ad6c2afdc5a94ae3a827457e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb29016a4ad6c2afdc5a94ae3a827457e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb29016a4ad6c2afdc5a94ae3a827457e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
