<?php


class Connection {
    protected static $db;

    public static function getInstance() {
        // se não existir uma instância, crie
        if (!self::$db) {
            self::$db = new PDO("mysql:host=localhost;dbname=test", "root", "");
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db->exec("SET NAMES utf8");
        }

        return self::$db;
    }
}