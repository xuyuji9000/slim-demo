<?php
namespace App\Controllers;

use Interop\Container\ContainerInterface as ContainerInterface;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HomeController 
{
    public function __construct(ContainerInterface $container) {
        $this->container= $container;
    }
}
