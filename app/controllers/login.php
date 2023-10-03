<?php
use app\classes\SendLogin;
use app\models\User;

require_once 'vendor/autoload.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$user = new User;

$userAction = $user->find('userEmail', $_POST['email']);

$sendLogin = new SendLogin;

$actionSendLogin = $sendLogin->login([
    'typeEmail' -> $email,
    'typedPassword' -> $password
], $userAction);