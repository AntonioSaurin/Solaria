<?php
use app\classes\Logged;
require_once 'vendor/autoload.php';

(new Logged)->verify();

if($logged != true) {
    echo 'oi';
}