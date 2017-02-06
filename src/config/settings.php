<?php
// Slim App Initiate Configuration
return [
    'settings' => [
        'displayErrorDetails' => true,  //set false in production
        'addContentLengthHeader' => false,  //Allow the web server to send the content-length header
        'database' => getenv('DATABASE'),
    ],
];
