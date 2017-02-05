<?php
namespace App\Controllers;

class FileController extends HomeController {

    public function home($request, $response, $args) {
        $response->getBody()->write('This is Home!');
        return $response;
    }
}
