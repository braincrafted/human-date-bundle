<?php

// autoload.php generated by Composer
if (!class_exists('Composer\\Autoload\\ClassLoader', false)) {
    require __DIR__ . '/composer' . '/ClassLoader.php';
}

return call_user_func(function() {
    $loader = new \Composer\Autoload\ClassLoader();
    $composerDir = __DIR__ . '/composer';

    $map = require $composerDir . '/autoload_namespaces.php';
    foreach ($map as $namespace => $path) {
        $loader->add($namespace, $path);
    }

    $classMap = require $composerDir . '/autoload_classmap.php';
    if ($classMap) {
        $loader->addClassMap($classMap);
    }

    spl_autoload_register(function($class) {
        $dir = dirname(__DIR__) . '/';
        $prefixes = array('Braincrafted\\HumanDateBundle');
        foreach ($prefixes as $prefix) {
            if (0 !== strpos($class, $prefix)) {
                continue;
            }
            $path = $dir . implode('/', array_slice(explode('\\', $class), 2)).'.php';
            if (!$path = stream_resolve_include_path($path)) {
                return false;
            }
            require $path;

            return true;
        }
    });

    $loader->register();

    return $loader;
});