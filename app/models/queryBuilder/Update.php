<?php

namespace app\models\queryBuilder;

class Update {

    private $where;

	public function setWhere($where): self {
		$this->where = $where;
		return $this;
	}

    public function sql($table, $attributes) {
        $credentials = require $_SERVER['DOCUMENT_ROOT'].'/app/config/database.php';

        $sql = "update {$credentials['dbname']}.{$table} set ";

        unset($attributes[array_keys($this->where)[0]]);
        foreach ($attributes as $key => $value) {
            $sql .= "{$key} = :{$key}, ";
        }

        $sql = rtrim($sql, ', ');


        $where = array_keys($this->where);

        $sql .= " where {$where[0]} = :{$where[0]}";

        return $sql;
    }
}