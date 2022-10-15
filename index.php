<?php

include __DIR__ . '/app/PHPRouter/Router.php';
include __DIR__ . '/app/PHPOrm/MySQL.php';
include __DIR__ . '/app/PHPTemplater/Template.php';
include __DIR__ . '/app/PHPView/View.php';
include __DIR__ . '/app/PHPRequester/Request.php';

use PHPRouter\Router;
use PHPTemplater\Template;
use PHPView\View;
use PHPRequester\Request;

$router = new Router();
$template = new Template(__DIR__ . "/pages/index.html");
$orm = new MySQL("localhost", "root", "", "123");
$request = new Request();

include __DIR__ . '/controllers/MainController.php';
include __DIR__ . '/routes/web.php';

$router->exec();
