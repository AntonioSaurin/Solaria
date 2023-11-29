<?php

namespace app\models;

class User extends Model
{
    protected $table = "userAccount";

    public function fullFind($id)
    {
        $sql = "SELECT 
        userAccount.ID as ID,
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

    public function login($email, $password)
    {
        $data = $this->find('userEmail', $email);

        if ($data == false) {
            return false;
        }

        if (!password_verify($password, $data['userPassword'])) {
            return false;
        }

        $institution = (new Institution)->find('accountID', $data['ID']);

        if ($institution != false) {
            if ($institution['state'] == 'waiting') {
                echo ('<script>
                    alert("Sua conta ainda está em analise!");
                    window.location.href = "/login";
                    </script>');

                    die;
            } else if ($institution['state'] == 'approved') {
                $_SESSION['institution'] = $institution['ID'];
            }

        }

        $admin = (new Administrator)->find('userAccount', $data['ID']);

        if ($admin != false) {
            $_SESSION['admin'] = $admin['ID'];
        }

        $_SESSION['id'] = $data['ID'];
        $_SESSION['name'] = $data['userName'];
        $_SESSION['email'] = $data['userEmail'];
        $_SESSION['photo'] = $data['userPhoto'];
        $_SESSION['phone'] = $data['userPhone'];

        return true;
    }
}