<?php

namespace app\traits;

trait PersistDb{
    
    function insert($attributes) {
        
        $sql = "insert into {$this->table}";
        var_dump($sql);

    }

    function update() {
        
    }
}
