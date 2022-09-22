<?php

namespace PHPSystem;

class System {
    public static function isNull($value) {
        return $value == null || strtolower($value) == 'null' || strlen(trim($value)) == 0;
    }
}