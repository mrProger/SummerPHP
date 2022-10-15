<?php

class MainController {
    public static function plus() {
        global $router;

        $data = $router->getPostRouteData();
        if ($data != null) {
            echo $data["num1"] + $data["num2"];
        } else {
            echo "Данные не дошли или неверные имена полей";
        }
    }

    public static function test() {
        echo "<h3>test</h3>";
    }

    public static function test123() {
        global $template;
        echo View::createFromTemplate($template);
    }

    public static function index() {
        global $template, $orm, $request;
        $orm->connect();
        $user = R::dispense('user');
        $user->name = "Ilya";
        $user->age = 20;
        R::store($user);
        //echo $template->generatePage(__DIR__ . '/../pages/test.html');
        //$data = $request->post("localhost:8001/plus", '{"num1": 2, "num2": 2}');
        /*if (!$data) {
            echo "false";
        } else {
            echo $data;
        }*/
    }
}