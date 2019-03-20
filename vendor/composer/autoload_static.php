<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71ddd0d5b59a4bcea21c9ecb0ea9400b
{
    public static $files = array (
        '1868cc2361bdd29b27012d86ea0bc56b' => __DIR__ . '/../..' . '/core/function.php',
    );

    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInit71ddd0d5b59a4bcea21c9ecb0ea9400b' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit71ddd0d5b59a4bcea21c9ecb0ea9400b' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Task' => __DIR__ . '/../..' . '/core/Task.php',
        'TasksController' => __DIR__ . '/../..' . '/controllers/TasksController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit71ddd0d5b59a4bcea21c9ecb0ea9400b::$classMap;

        }, null, ClassLoader::class);
    }
}