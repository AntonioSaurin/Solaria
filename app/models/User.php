<?php

namespace app\models;

class User extends Model
{
    protected $table = "userAccount";

    public function fullFind($id)
    {
        $sql = "SELECT 
        userAccount.userName AS userName, 
        userAccount.userEmail AS userEmail,
        donator.birthDate as birthDate,
        donator.CPF as CPF,
        phone.DDD AS DDD, 
        phone.phoneNumber AS phoneNumber,
        adress.CEP AS CEP, 
        state.acronym AS state, 
        city.city as city,
        adress.district as district,
        userAccount.userAdressNumber as AdressNumber,
        adress.street as street
        FROM userAccount 
            INNER JOIN donator ON donator.accountId = userAccount.id 
            INNER JOIN adress ON userAccount.userAdress = adress.id  
            INNER JOIN phone ON userAccount.userPhone = phone.id
            INNER JOIN city on addres.city = city.id
            INNER JOIN state on city.state = state.id
            WHERE ID = :value;";
        $list = $this->connection->prepare($sql);
        $list->bindValue(':value', $id);
        $list->execute();

        return $list->fetch();
    }
}