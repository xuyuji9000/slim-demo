<?php

// Dependency Injection Container
$container = $app->getContainer();

$container['view'] = new \Slim\Views\PhpRenderer("../templates/");

$container['db'] = function($c) {
    return DatabaseFactory::create($c['settings']['database']);
};

$container['session'] = function($c) {
    return new \SlimSession\Helper;
};

$container['logger'] = function($c) {
    $logger = new \Monolog\Logger('slim_logger');
    $file_handler = new \Monolog\Handler\StreamHandler('../logs/app.log');
    $logger->pushHandler($file_handler);
    return $logger;
};
