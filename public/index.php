<?php
require __DIR__ . "/../vendor/autoload.php";

// Load .env Configuration
$dotenv = new Dotenv\Dotenv(dirname(__DIR__));
$dotenv->load();

// Slim App Initiate Configuration
$settings = require __DIR__ . '/../config/settings.php';
$app = new \Slim\App($settings);

// Register Middleware
require __DIR__.'/../config/middleware.php';

// Register Middleware
require __DIR__.'/../config/dependencies.php';

// Register Routes
require __DIR__ . '/../config/routes.php';

$app->run();
