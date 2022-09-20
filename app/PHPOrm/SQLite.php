<?php

include __DIR__ . '/driver/Redbean.php';

class SQLite {
    protected string $dbname;

    public function __construct(string $dbname) {
        $this->dbname = $dbname;
    }

    public function overrideConnectData(string $dbname) {
        $this->dbname = $dbname;
    }

    public function generateConnectionStr() {
        return "sqlite:".$this->dbname;
    }

    public function connect() {
        $connection_str = $this->generateConnectionStr();
        R::setup($connection_str);
    }

    public function getAlias() {
        return class_alias('\RedBeanPHP\R', 'R');
    }
}