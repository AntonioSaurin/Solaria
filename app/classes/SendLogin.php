<?php
namespace app\classes;

require_once 'vendor/autoload.php';

class SendLogin {
    public function login($typedData, $dbData) {
        if(password_verify($typedData['typedPassword'], $dbData['userPassword'])){
            $_SESSION = [
                'Name' => $dbData['userName'],
                'Email' => $dbData['userEmail'],
                'Photo' => $dbData['user']
            ];
            return true;
        }
    }
}

