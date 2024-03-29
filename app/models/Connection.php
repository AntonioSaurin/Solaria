<?php

namespace App\Models;
use PDO;

class Connection
{ 
    public static function connect()
    {
        $credentials = require $_SERVER['DOCUMENT_ROOT'].'\app\config\database.php';
        try {
            $pdo = new PDO("mysql:host={$credentials['host']}; dbname={$credentials['dbname']}; {$credentials['charset']}", $credentials['username'], $credentials['password']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $pdo;
        } catch (\PDOException $e) {
            echo "Error!: " . $e->getMessage() . "<br/>";
            die();
        }  
    }
}