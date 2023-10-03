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
    'typeEmail' => $email,
    'typedPassword' => $password
], $userAction);

if($actionSendLogin == 1) {
    echo '<script>alert("Login bem sucedido");
    window.location.href = "/";
    </script>';
}

if($actionSendLogin == false) {
    echo '<script>alert("Error ao tentar login, tente novamente em alguns instantes");
    window.location.href = "/login";
    </script>';
}   