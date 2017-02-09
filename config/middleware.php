<?php
// Application Middleware

// e.g: $app->add(new \Slim\Csrf\Guard);
$app->add(new \Slim\Middleware\Session([
    'name' => 'dummy_name',
    'autorefresh' => true,
    'lifetime' => '20 min',
]));

// Cross Domain Access
$app->add(function($request, $response, $next){
    $response = $next($request, $response);
    $response = $response->withHeader('Access-Control-Allow-Origin','*');  
    return $response;
});
