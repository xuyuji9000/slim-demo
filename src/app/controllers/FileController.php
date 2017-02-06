<?php
namespace App\Controllers;

class FileController extends HomeController {

    public function home($request, $response, $args) {
        $db = $this->container['db'];
        $sth = $db->query('select * from Bookmark');
        $response->getBody()->write('This is Home!');
        return $response;
    }
}
