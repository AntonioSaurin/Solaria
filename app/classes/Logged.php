<?php

namespace app\classes;

class Logged {
    public function verify($session) {
        if(empty($session)) {
            return 0;
        }

        if(isset($session['ID'])){
            return 1;
        }
    }
}