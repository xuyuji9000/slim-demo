<?php
require __DIR__ . "/../vendor/autoload.php";

spl_autoload_register(function($classname) {
    require("../classes/".$classname.".php");
});

// Configuration
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

// Register Middleware
require __DIR__.'/../src/middleware.php';


// Register Middleware
require __DIR__.'/../src/dependencies.php';


// Register Routes
require __DIR__ . '/../src/routes.php';

$app->run();
