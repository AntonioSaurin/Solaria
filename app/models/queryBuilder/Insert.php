<?php

namespace app\models\queryBuilder;

class Insert{

    public static function sql($table, $attributes) {
        $credentials = require $_SERVER['DOCUMENT_ROOT'].'/app/config/database.php';

        $sql = "insert into {$credentials['dbname']}.{$table}(";
        $sql .= implode(', ',array_keys($attributes)).') values (';
        $sql .= ':'.implode(', :',array_keys($attributes)).')';

        return $sql;
    }
}