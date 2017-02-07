<?php
// Slim App Initiate Configuration
return [
    'settings' => [
        'displayErrorDetails' => true,  //set false in production
        'addContentLengthHeader' => false,  //Allow the web server to send the content-length header
        //'database' => getenv('DATABASE'),
        'db' => [
            'driver'    => getenv('DRIVER'),
            'host'      => getenv('HOST'),
            'database'  => __DIR__.'/../database/database.sqlite',
            'username'  => getenv('USERNAME'),
            'password'  => getenv('PASSWORD'),
            'collation' => getenv('COLLATION'),
            'prefix'    => getenv('PREFIX'),
        ],
    ],
];
