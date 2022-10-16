<?php

class User {
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getAge() : int {
        return $this->age;
    }
}