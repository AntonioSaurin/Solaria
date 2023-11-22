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
        donator.birthDate AS birthDate,
        donator.CPF AS CPF,
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
            INNER JOIN state ON city.state = state.id
            WHERE userAccount.ID = :value;";
        $list = $this->connection->prepare($sql);
        $list->bindValue(':value', $id);
        $list->execute();

        return $list->fetch();
    }
}