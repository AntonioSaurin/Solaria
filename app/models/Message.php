<?php

namespace app\models;

class Message extends Model {
    protected $table = "message";

    public function delUserMessage($id){
        $credentials = require 'app\config\database.php';

        $sql = "delete from {$credentials['dbname']}.{$this->table} where incomingMsgID = :value or outgoingMsgID :value";
        $delete = $this->connection->prepare($sql);
<<<<<<< HEAD
        $delete->bindValue(':value', $id);
=======
        $delete->bindValue(':value', $value);
>>>>>>> f8fcdeb39f68eee5da065eaf2f3b8cb4c84e709f
        $delete->execute();

        return $delete->rowCount();
    }
}