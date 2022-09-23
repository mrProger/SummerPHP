<?php

namespace PHPTemplater;

include __DIR__.'/../PHPExceptionHandler/ExceptionHandler.php';

use PHPExceptionHandler\ExceptionHandler;

class Template {
    protected string $template;

    public function __construct($template) {
        if (str_ends_with($template, ".html")) {
            $template = file_get_contents($template);
        }

        if ($template == null || strlen(trim($template)) == 0) {
            ExceptionHandler::generateError("Не удалось установить шаблон страницы");
        }

        $this->template = $template;
    }

    public function getTemplate() {
        return $this->template;
    }

    public function setTemplate($template) {
        if (str_ends_with($template, ".html")) {
            $template = file_get_contents($template);
        }

        if ($template == null || strlen(trim($template)) == 0 || strpos($template, "[content]") === false) {
            ExceptionHandler::generateError("Не удалось установить шаблон страницы");
        }

        $this->template = $template;
    }

    public function generatePage($content) {
        if (strlen(trim($content)) == 0 || $content == null) {
            ExceptionHandler::generateError("Не удалось сгенерировать страницу");
        }

        if (str_ends_with($content, ".html")) {
            $content = file_get_contents($content);
        }

        $page = str_replace("[content]", $content, $this->template);

        return $page;
    }
}
