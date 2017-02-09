<?php
// Application Middleware

// e.g: $app->add(new \Slim\Csrf\Guard);
$app->add(new \Slim\Middleware\Session([
    'name' => 'dummy_name',
    'autorefresh' => true,
    'lifetime' => '20 min',
]));

