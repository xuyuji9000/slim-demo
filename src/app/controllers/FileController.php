<?php
namespace App\Controllers;

class FileController extends HomeController {

    public function home($request, $response, $args) {
        // test sqlite
        $db = $this->container['db'];
        $sth = $db->query('select * from Bookmark');
        $response->getBody()->write('This is Home!');

        // test logger
        $this->container->logger->err("Something interesting happened");
        return $response;
    }
}
