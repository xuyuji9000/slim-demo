<?php
use Interop\Container\ContainerInterface as ContainerInterface;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HomeController 
{
    public function __construct(ContainerInterface $container) {
        $this->container= $container;
    }

    public function home($request, $response, $args) {
        $response->getBody()->write('This is Home!');
        return $response;
    }
}
