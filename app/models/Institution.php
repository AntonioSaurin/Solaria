<?php

namespace app\models;

class  Institution extends Model
{
    protected $table = "institution";

    public function findList()
    {
        $credentials = require $_SERVER['DOCUMENT_ROOT'] . '\app\config\database.php';

        $sql = "SELECT 
        userAccount.ID as ID,
        userAccount.userName AS userName, 
        userAccount.userEmail AS userEmail,
        institution.CNPJ AS CNPJ,
        institution.director AS director,
        institution.directorCPF AS directorCPF,
        institution.instagram AS instagram,
        institution.facebook AS facebook,
        institution.description AS description,
        institution.needs AS needs,
        institution.state AS stateInstitution,
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
            INNER JOIN institution ON institution.accountId = userAccount.id 
            INNER JOIN adress ON userAccount.userAdress = adress.id  
            INNER JOIN phone ON userAccount.userPhone = phone.id
            INNER JOIN photo ON userAccount.userPhoto = photo.id
            INNER JOIN city ON adress.city = city.id
            INNER JOIN state ON city.state = state.id
            where institution.state = 'approved';";
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }

    public function fullFind()
    {
        $sql = "SELECT 
        userAccount.ID as ID,
        userAccount.userName AS userName, 
        userAccount.userEmail AS userEmail,
        institution.CNPJ AS CNPJ,
        institution.director AS director,
        institution.directorCPF AS directorCPF,
        institution.instagram AS instagram,
        institution.facebook AS facebook,
        institution.description AS description,
        institution.needs AS needs,
        institution.state AS stateInstitution,
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
            INNER JOIN institution ON institution.accountId = userAccount.id 
            INNER JOIN adress ON userAccount.userAdress = adress.id  
            INNER JOIN phone ON userAccount.userPhone = phone.id
            INNER JOIN photo ON userAccount.userPhoto = photo.id
            INNER JOIN city ON adress.city = city.id
            INNER JOIN state ON city.state = state.id
            WHERE institution.state = 'waiting';";
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }

    public function fullFind2($id)
    {
        $sql = "SELECT 
        userAccount.ID as ID,
        userAccount.userName AS userName, 
        userAccount.userEmail AS userEmail,
        institution.CNPJ AS CNPJ,
        institution.director AS director,
        institution.directorCPF AS directorCPF,
        institution.instagram AS instagram,
        institution.facebook AS facebook,
        institution.description AS description,
        institution.needs AS needs,
        institution.state AS stateInstitution,
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
            INNER JOIN institution ON institution.accountId = userAccount.id 
            INNER JOIN adress ON userAccount.userAdress = adress.id  
            INNER JOIN phone ON userAccount.userPhone = phone.id
            INNER JOIN photo ON userAccount.userPhoto = photo.id
            INNER JOIN city ON adress.city = city.id
            INNER JOIN state ON city.state = state.id
            WHERE userAccount.id = {$id};";
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetch();
    }
}
#comentario teste