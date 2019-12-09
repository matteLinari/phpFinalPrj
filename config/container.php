<?php
use League\Plates\Engine;
use Psr\Container\ContainerInterface;

return [
    'view_path' => 'src/View',
    Engine::class => function(ContainerInterface $c) {
        return new Engine($c->get('view_path'));
    },

    'dsn' => 'mysql:dbname=Journal;host=127.0.0.1',
    'user' => 'root',
    'password' => 'password',
    'PDO' => function(ContainerInterface $c){
        return new PDO($c->get('dsn'), $c->get('user'), $c->get('password'));
    }    
];
