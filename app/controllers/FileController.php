<?php
namespace App\Controllers;

use User;

class FileController extends HomeController {
    public function home($request, $response, $args) {
        // test sqlite
        // $db = $this->container['db'];
        // $sth = $db->query('select * from Bookmark');


        // var_export(User::first());
        
        // User::create(['name' => 'Mary']);
        // var_export(User::first()->toArray());

        $response->getBody()->write('This is Home!');

        // test logger
        // $this->container->logger->err("Something interesting happened");
        return $response;
    }
}
