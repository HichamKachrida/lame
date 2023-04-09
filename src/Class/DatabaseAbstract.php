<?php


class DatabaseAbstract
{

    public static $instance = null;
    private $connection;

    private function __construct($localhost, $username, $password, $database){
        try {
            $this->connection = New PDO(DB_DSN, DB_USER, DB_PASSWORD);
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function getInstance($localhost, $username, $password, $database){
        if(self::$instance == null){
            self::$instance = new DatabaseAbstract($localhost, $username, $password, $database);
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }

}