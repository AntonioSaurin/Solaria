<?php

namespace app\classes;
use app\models\User;

class Logged extends User{
    public function verify() {
        if(isset($_SESSION['id']) && isset($_SESSION['email'])){
            $verify = $this->findTwoFields('id', 'userEmail', $_SESSION['id'], $_SESSION['email']);

            if(!empty($verify)){
                return true;
            }
            
            header('/login');
        }
        header('/login');
    }
}