<?php
namespace app\classes;

session_start();
require_once 'vendor/autoload.php';

class SendLogin {
    public function login($typedData, $dbData) {
        if(password_verify($typedData['typedPassword'], $dbData['userPassword'])){
            $_SESSION['id'] = $dbData['ID'];
            $_SESSION['name'] = $dbData['userName'];
            $_SESSION['email'] = $dbData['userEmail'];
            $_SESSION['photo'] = $dbData['userPhoto'];
            
            return true;
        }
    }
}

