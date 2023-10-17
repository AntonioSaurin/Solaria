<?php

namespace app\models;
use app\traits\PersistDb;

abstract class Model{

    use PersistDb;
    protected $connection;

    public function __construct(){
        $this->connection = Connection::connect();
    }

    public function all(){
        $credentials = require 'app\config\database.php';

        $sql = "select * from {$credentials['dbname']}.{$this->table}";
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }

    public function find($field, $value){
        
        $credentials = require 'app\config\database.php';

        $sql = "select * from {$credentials['dbname']}.{$this->table} where {$field} = :value";
        $list = $this->connection->prepare($sql);
        $list->bindValue(':value', $value);
        $list->execute();

        return $list->fetch();
    }

    public function findTwoFields($field1, $field2, $value1, $value2){
        
        $credentials = require 'app\config\database.php';

        $sql = "select * from {$credentials['dbname']}.{$this->table} where {$field1} = :value1 and {$field2} = :value2;";
        $list = $this->connection->prepare($sql);
        $list->bindValue(':value1', $value1);
        $list->bindValue(':value2', $value2);
        $list->execute();

        return $list->fetch();
    }

    public function delete($field, $value){
        $credentials = require 'app\config\database.php';

        $sql = "delete from {$credentials['dbname']}.{$this->table} where {$field} = :value";
        $delete = $this->connection->prepare($sql);
        $delete->bindValue(':value', $value);
        $delete->execute();

        return $delete->rowCount();
    }

}