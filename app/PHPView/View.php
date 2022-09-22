<?php

namespace PHPView;

use \PHPTemplater\Template;
use \PHPExceptionHandler\ExceptionHandler;

class View {
    protected string $view;

    public function __construct($template = 'null', string $content = 'null') {
        if (strtolower($template) == 'null' && (strtolower($content) == 'null' || strlen(trim($content)) == 0)) {
            ExceptionHandler::generateError("Невозможно сгенерировать View из пустых значений");
        }

        if (strtolower($content) != 'null') {
            $content = str_ends_with($content, ".html") ? file_get_contents($content) : $content;
        }

        if (strtolower($template) == 'null') {
            $this->view = $content;
        } else if (strtolower($content) == 'null' || strlen(trim($content)) == 0) {
            $this->view = $template->template;
        } else {
            $this->view = $template->generatePage($content);
        }
    }

    public function __toString() {
        return $this->view;
    }

    public function getView() {
        return $this->view;
    }
}