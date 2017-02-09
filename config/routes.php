<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/home', App\Controllers\FileController::class.':home');

$app->get('/json', function(){
    header("Content-Type: application/json");
    $result = [
        'one'=>1,
        'three'=>3,
        'five'=>5
    ];

    echo json_encode($result);
    exit;
});
