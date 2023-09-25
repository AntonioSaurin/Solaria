<?php

namespace app\models;
use PDO;

class Connection
{ 
    public static function connect()
    {
        $credentials = require 'app\config\database.php';
        try {
            $pdo = new PDO("mysql:host={$credentials['host']}; bdname={$credentials['dbname']}; {$credentials['charset']}", $credentials['username'], $credentials['password']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return $pdo;
        } catch (\PDOException $e) {
            echo "Error!: " . $e->getMessage() . "<br/>";
            die();
        }  
    }
}