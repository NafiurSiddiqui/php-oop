<?php

class Dbh {
    //some private props for DB
    private $HOST = "localhost";
    private $USER = "root";
    private $PWD = "";
    private $DB_NAME = "php_dev";

    //Connect to DB
    protected function connect(){
        //DSN = Data Source Name
        $DSN = 'mysql:host=' . $this->HOST . ';dbname=' . $this->DB_NAME;
        $pdo = new PDO($DSN, $this->USER, $this->PWD);
        //setting default attribute
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;

    }
}