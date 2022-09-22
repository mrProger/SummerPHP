<?php

namespace PHPView;

use \PHPTemplater\Template;

class View {
    protected string $view;

    public function __construct(Template $template, string $content) {
        if ($template == null && ($content == null || strlen(trim($content)) == 0)) {
            ExceptionHandler::generateError("Невозможно сгенерировать View из пустых значений");
        }

        if ($template == null) {
            $this->view = $content;
        } else if ($content == null || strlen(trim($content)) == 0) {
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