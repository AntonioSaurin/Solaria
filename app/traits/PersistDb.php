<?php

namespace app\traits;
use app\models\queryBuilder\Insert;

trait PersistDb{
    
    function insert($attributes) {
        
        $sql = (new Insert)->sql($this->table, $attributes);
        $insert = $this->connection->prepare($sql);
        
        return $insert->execute($attributes);

    }

    function update() {
        
    }
}
