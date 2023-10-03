<?php

namespace app\classes;

class Logged {
    public function verify() {
        if(isset($_SESSION['name']) && isset($_SESSION['email'])){
            return true;
        }
        return false;
    }
}