<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Controller __autoload() implementation
spl_autoload_register(function($classname) {
    require __DIR__ . "/../controller/".$classname.".php";
});


$app->get('/hello/{name}', function (Request $request, Response $response) {
   $name = $request->getAttribute('name');
       $response->getBody()->write("Hello, $name");

       return $response;
});

$app->get('/ticket', function (Request $request, Response $response) {
    $tickets = array(2=>'two', 3=>'three');
    $session->test = 'this is a test';
    $response->getBody()->write($session->test);
    //$response->getBody()->write(var_export($testArray));
    $response = $this->view->render($response, "tickets.phtml", ["tickets"=>$tickets]);
    return $response;
});

$app->get('/home', HomeController::class.':home');
