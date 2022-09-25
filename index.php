<?php

include __DIR__ . '/app/PHPRouter/Router.php';
include __DIR__ . '/app/PHPOrm/MySQL.php';
include __DIR__ . '/app/PHPTemplater/Template.php';

use PHPRouter\Router;
use PHPTemplater\Template;
use PHPView\View;

$router = new Router();
$template = new Template(__DIR__ . "/pages/index.html");
$orm = new MySQL("localhost", "root", "", "123");

$router->post("plus", function() {
    global $router;

    $data = $router->getPostRouteData();
    if ($data != null) {
        echo $data["num1"] + $data["num2"];
    } else {
        echo "Данные не дошли или неверные имена полей";
    }
});

$router->get("test", function() {
    echo "<h3>test</h3>";
});

$router->get("test123", function() {
    global $template;
    echo View::createFromTemplate($template);
});

$router->get("/", function() {
    global $template, $orm;
    //$orm->connect();
    //$user = R::dispense('user');
    //$user->name = "Ilya";
    //$user->age = 20;
    //R::store($user);
    echo $template->generatePage(__DIR__ . '/pages/test.html');
});

$router->exec();
