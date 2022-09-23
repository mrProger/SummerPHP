<?php

namespace PHPSystem;

class System {
    public static function isNull($value) {
        if (gettype($value) == "string") {
            return $value == null || strtolower($value) == 'null' || strlen(trim($value)) == 0;
        } else {
            return $value == null;
        }
    }
}
