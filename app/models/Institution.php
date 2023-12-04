<?php

namespace app\models;

class Institution extends Model
{
    protected $table = "institution";

    public function findList()
    {
        $credentials = require $_SERVER['DOCUMENT_ROOT'] . '\app\config\database.php';

        $sql = "SELECT
            institution.ID AS ID,
            userAccount.userName AS userName,
            institution.needs AS needs,
            photo.photoPath AS photoPath,
            city.city AS city,
            state.acronym AS state
            FROM  dbsolaria.institution
            INNER JOIN userAccount ON institution.accountID = userAccount.id 
            INNER JOIN adress ON userAccount.userAdress = adress.id
            INNER JOIN photo ON userAccount.userPhoto = photo.id
            INNER JOIN city ON adress.city = city.id
            INNER JOIN state ON city.state = state.id
            where institution.state = 'approved';";
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }
}