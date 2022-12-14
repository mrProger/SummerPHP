<?php

// Подключение системных библиотек
include __DIR__ . '/app/PHPRouter/Router.php';
include __DIR__ . '/app/PHPOrm/MySQL.php';
include __DIR__ . '/app/PHPTemplater/Template.php';
include __DIR__ . '/app/PHPView/View.php';
include __DIR__ . '/app/PHPRequester/Request.php';
include __DIR__ . '/app/PHPModel/Model.php';

// Подключение системных пространств имен
use PHPRouter\Router;
use PHPTemplater\Template;
use PHPRequester\Request;

// Создание системных объектов
$router = new Router();
$template = new Template(__DIR__ . "/pages/index.html");
$orm = new MySQL("localhost", "root", "", "123");
$request = new Request();

// Подключение контроллеров
include __DIR__ . '/controllers/MainController.php';

// Подключение файла с маршрутами
include __DIR__ . '/routes/web.php';

$router->exec();
