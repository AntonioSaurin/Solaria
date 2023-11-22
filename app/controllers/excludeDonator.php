<?php
use app\classes\Logged;
use app\models\Donation;
use app\models\Donator;
use app\models\Message;
use app\models\Phone;
use app\models\Photo;
use app\models\User;

require_once 'vendor/autoload.php';

$logged = (new Logged)->verify();

if($logged == false) {
    header('Location: /login');
}

$user = (new User)->fullFind($_SESSION['id']);

if($user == false) {
    echo '<script> alert("Usuario com problemas de cadastro!) </script>"';
    header('Location: /infoUser');
}

(new Message)->delUserMessage($user['ID']);

(new Donation)->delete('id', $user['ID']);

(new Donator)->delete('id', $user['ID']);

(new Phone)->delete('id', $user['userPhone']);

(new Photo)->delete('id', $user['userPhoto']);

$user->delete('id', $user['ID']);