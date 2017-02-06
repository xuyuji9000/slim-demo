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
