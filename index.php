<?php

include __DIR__ . '/app/PHPRouter/Router.php';
include __DIR__ . '/app/PHPOrm/SQLite.php';
include __DIR__ . '/app/PHPTemplater/Templater.php';

use PHPRouter\Router;
use PHPTemplater\Templater;

$router = new Router();
$template = new Templater(__DIR__ . "/pages/index.html");
$orm = new SQLite("test.db");

$router->get("/", function() {
    global $template, $orm;
    $orm->connect();
    echo $template->generatePage("<button>test</button>");
});

$router->exec();