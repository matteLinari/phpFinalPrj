<?php
use SimpleMVC\Controller;

return [
    'GET /' => Controller\Home::class, // "SimpleMVC\Controller\Home"
    'GET /login' => Controller\Login::class,
    'POST /login' => Controller\ControllerLogin::class,
    'GET /dashboard' => Controller\Dashboard::class,

    

];
