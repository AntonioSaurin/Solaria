<?php
use app\classes\SendLogin;
use app\models\User;

require_once '../../vendor/autoload.php';

$user = new User;

$userAction = $user->find('email', $_POST['email']);

$sendLogin = new SendLogin;

$actionSendLogin = $sendLogin->login([
    'typeEmail' -> $email,
    'typedPassword' -> $password
], $userAction);