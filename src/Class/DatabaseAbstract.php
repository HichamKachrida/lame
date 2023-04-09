<?php

namespace App\Class;

class DatabaseAbstract
{

    public static $instance = null;
    private $connection;

    private function __construct(){
        try {
            $this->connection = New \PDO(DB_DSN, DB_USER, DB_PASSWORD);
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new DatabaseAbstract();
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }

}