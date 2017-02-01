<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require("../vendor/autoload.php");

spl_autoload_register(function($classname) {
    require("../classes/".$classname.".php");
});

$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$config['db']['host']   = "localhost";
$config['db']['user']   = "user";
$config['db']['pass']   = "password";
$config['db']['dbname'] = "exampleapp";

$app = new \Slim\App(["settings" => $config]);

$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer("../templates/");

$app->get('/hello/{name}', function (Request $request, Response $response) {
   $name = $request->getAttribute('name');
       $response->getBody()->write("Hello, $name");

       return $response;
});
$app->get('/ticket', function (Request $request, Response $response) {
    $tickets = array(2=>'two', 3=>'three');
    //$response->getBody()->write(var_export($testArray));
    $response = $this->view->render($response, "tickets.phtml", ["tickets"=>$tickets]);
    return $response;
});
$app->run();
