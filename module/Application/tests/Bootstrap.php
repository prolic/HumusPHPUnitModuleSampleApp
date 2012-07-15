<?php

chdir(__DIR__);

if (!(@include_once __DIR__ . '/../vendor/autoload.php') && !(@include_once __DIR__ . '/../../../vendor/autoload.php')) {
    throw new RuntimeException('vendor/autoload.php could not be found. Did you run `php composer.phar install`?');
}

$autoloader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
$autoloader->registerNamespace('Application', __DIR__ . '/../src/Application');
$autoloader->register();
