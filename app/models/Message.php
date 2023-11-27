<?php

namespace app\models;

class Message extends Model {
    protected $table = "messages";

    public function delUserMessage($id){
        $credentials = require 'app\config\database.php';

        $sql = "delete from {$credentials['dbname']}.{$this->table} where incomingMsgID = :value or outgoingMsgID = :value";
        $delete = $this->connection->prepare($sql);
        $delete->bindValue(':value', $id);
        $delete->execute();

        return $delete->rowCount();
    }
}