<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/hello/{name}', function (Request $request, Response $response) {
   $name = $request->getAttribute('name');
       $response->getBody()->write("Hello, $name");

       return $response;
});

$app->get('/ticket', function (Request $request, Response $response) {
    $tickets = array(2=>'two', 3=>'three');
    $session->test = 'this is a test';
    $response->getBody()->write($session->test);
    $response = $this->view->render($response, "tickets.phtml", ["tickets"=>$tickets]);
    return $response;
});

/*
 * composer autoload demo
 */
$app->get('/home', App\Controllers\HomeController::class.':home'); // composer psr-4
$app->get('/file', App\Controllers\FileController::class.':home'); // Controller inheritance
$app->get('/function', function(Request $request, Response $response){
    echo concatStrings("String1", "String2");
}); // composer function
$app->get('/classmap', function(Request $request, Response $response){
    $class = new Class1();
    $class = new Class2();
    $class = new Class3();
}); // composer function
