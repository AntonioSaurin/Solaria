<?php
use app\classes\Logged;
use app\models\Donation;
use app\models\Donator;
use app\models\Institution;
use app\models\Message;
use app\models\Phone;
use app\models\Photo;
use app\models\User;

require_once 'vendor/autoload.php';

$logged = (new Logged)->verify();

if ($logged == false) {
    header('Location: /login');
}

$user = (new User)->find('id', $_SESSION['id']);

if ($user == false) {
    echo '<script> alert("Usuario com problemas de cadastro!) </script>"';
    header('Location: /infoUser');
}

(new Message)->delUserMessage($user['ID']);

(new Donation)->delete('donator', $user['ID']);

if(isset($_SESSION['institution'])) {
    (new Institution)->delete('accountID', $user['ID']);
}

if(!isset($_SESSION['institution']    )) {
    (new Donator)->delete('accountID', $user['ID']);
}

(new User)->delete('id', $user['ID']);

if ($user['userPhoto'] != 1) {
    (new Photo)->delete('id', $user['userPhoto']);
}

(new Phone)->delete('id', $user['userPhone']);


header('Location: ../app/views/logout.php');
