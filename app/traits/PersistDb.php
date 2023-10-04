<?php

namespace app\traits;
use app\models\queryBuilder\Insert;
use app\models\queryBuilder\Update;

trait PersistDb{
    
    function insert($attributes) {
        
        $sql = (new Insert)->sql($this->table, $attributes);
        $insert = $this->connection->prepare($sql);
        
        try {
            $action = $insert->execute($attributes);
            return true;
        } catch (\PDOException $error) {
            return $error;
        }
        
    }

    function update($attributes, $where) {
        $sql = (new Update)->setWhere($where)->sql($this->table, $attributes);
        $update = $this->connection->prepare($sql);

        try {
            $action = $update->execute($attributes);
            return true;
        } catch (\PDOException $error) {
            return $error;
        }
    }
}
