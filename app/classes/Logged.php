<?php

namespace app\classes;

class Logged {
    public function verify($session) {
        if(empty($session)) {
            return 0;
        }

        if($session['ID']){
            return 1;
        }
    }
}