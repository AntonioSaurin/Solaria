<?php

namespace app\models;

class Donator extends Model {
    protected $table = "donator";

    public function findList()
    {
        $credentials = require $_SERVER['DOCUMENT_ROOT'] . '\app\config\database.php';

        $sql = "SELECT 
        userAccount.ID as ID,
        userAccount.userName AS userName, 
        userAccount.userEmail AS userEmail,
        donator.CPF AS CPF,
        donator.birthDate AS birthDate,
        phone.DDD AS DDD, 
        phone.phoneNumber AS phoneNumber,
        adress.CEP AS CEP, 
        state.acronym AS state, 
        city.city AS city,
        adress.district AS district,
        userAccount.userAdressNumber AS AdressNumber,
        adress.street AS street,
        photo.photoPath AS photoPath
        FROM userAccount 
            INNER JOIN donator ON donator.accountId = userAccount.id 
            INNER JOIN adress ON userAccount.userAdress = adress.id  
            INNER JOIN phone ON userAccount.userPhone = phone.id
            INNER JOIN photo ON userAccount.userPhoto = photo.id
            INNER JOIN city ON adress.city = city.id
            INNER JOIN state ON city.state = state.id;";
            
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }
}