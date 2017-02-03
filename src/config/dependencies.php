<?php

// Dependency Injection Container
$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer("../templates/");
$container['db'] = function($c) {
    $pdo = new PDO("sqlite:../database/database.sqlite");
    return $pdo;
};
$container['session'] = function($c) {
    return new \SlimSession\Helper;
};
