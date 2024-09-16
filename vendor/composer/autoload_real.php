<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit33535d5ce8a059ef22e2dd87c599a1ad
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

        spl_autoload_register(array('ComposerAutoloaderInit33535d5ce8a059ef22e2dd87c599a1ad', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit33535d5ce8a059ef22e2dd87c599a1ad', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit33535d5ce8a059ef22e2dd87c599a1ad::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
