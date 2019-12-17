<?php
use SimpleMVC\Controller;

return [
    'GET /' => Controller\Home::class, // "SimpleMVC\Controller\Home"
    'GET /article' => Controller\Article::class,
    'GET /login' => Controller\Login::class,
    'POST /login' => Controller\ControllerLogin::class,
    'GET /dashboard' => Controller\Dashboard::class,
    'GET /crud-article' => Controller\CrudArticle::class,
    'POST /new-article' => Controller\NewArticle::class,




    

];
