<?php

include __DIR__ . '/app/PHPRouter/Router.php';
include __DIR__ . '/app/PHPOrm/MySQL.php';
include __DIR__ . '/app/PHPTemplater/Templater.php';

use PHPRouter\Router;
use PHPTemplater\Templater;

$router = new Router();
$template = new Templater(__DIR__ . "/pages/index.html");
$orm = new MySQL("localhost", "root", "", "123");

$router->get("/", function() {
    global $template, $orm;
    $orm->connect();
    $user = R::dispense('user');
    $user->name = "Ilya";
    $user->age = 20;
    R::store($user);

    echo $template->generatePage("<button>test</button>");
});

$router->exec();