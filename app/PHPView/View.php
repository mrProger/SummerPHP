<?php

namespace PHPView;

include __DIR__ . '/../PHPSystem/System.php';

use \PHPTemplater\Template;
use \PHPExceptionHandler\ExceptionHandler;
use \PHPSystem\System;

class View {
    protected static string $view;

    public static function create(Template $template, string $content) {
        if (System::isNull($template) || System::isNull($content)) {
            ExceptionHandler::generateError("Невозможно сгенерировать View из пустых значений");
        }

        $content = str_ends_with($content, ".html") ? file_get_contents($content) : $content;

        self::$view = $template->generatePage($content);

        return self::$view;
    }

    public static function createFromTemplate(Template $template) {
        if (System::isNull($template)) {
            ExceptionHandler::generateError("Невозможно сгенерировать View из пустых значений");
        }

        self::$view = $template->generatePage("");

        return self::$view;
    }

    public static function createFromContent(string $content) {
        if (System::isNull($content)) {
            ExceptionHandler::generateError("Невозможно сгенерировать View из пустых значений");
        }

        $content = str_ends_with($content, ".html") ? file_get_contents($content) : $content;

        self::$view = $content;

        return self::$view;
    }

    public function getView() {
        return $this->view;
    }
}