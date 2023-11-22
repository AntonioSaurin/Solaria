<?php

namespace app\models;

class Message extends Model {
    protected $table = "message";

    public function delUserMessage($id){
        $credentials = require 'app\config\database.php';

        $sql = "delete from {$credentials['dbname']}.{$this->table} where incomingMsgID = :value or outgoingMsgID :value";
        $delete = $this->connection->prepare($sql);
        $delete->bindValue(':value', $value);
        $delete->execute();

        return $delete->rowCount();
    }
}