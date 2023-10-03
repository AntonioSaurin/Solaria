<?php

namespace app\traits;
use app\models\queryBuilder\Insert;

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

    function update() {
        
    }
}
