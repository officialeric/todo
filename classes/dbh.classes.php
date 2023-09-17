<?php

class Dbh {
    public function connection() : PDO{
        define("HOST", "127.0.0.1");
        define("DB_NAME", "todo");
        define("DB_USER", "root");
        define("PASS", "");

        $host = HOST;
        $db_name = DB_NAME;

        $dsn = "mysql:host=$host;dbname=$db_name";

        try {
            $db = new PDO ($dsn, DB_USER, PASS);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return  $db;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }
}

