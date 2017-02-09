<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/home', App\Controllers\FileController::class.':home');

$app->get('/json', function($request, $response, $args){
    // header("Content-Type: application/json");
    // header('Access-Control-Allow-Origin: *');
    $result = [
        'one'=>1,
        'three'=>3,
        'five'=>5
    ];
    $response = $response->withJson($result);
    return $response;
});
