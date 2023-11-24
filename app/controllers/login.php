<?php
use app\models\User;

require_once 'vendor/autoload.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$user = new User;

$action = $user->login($email, $password);

if($action == true) {
    echo '<script>
    window.location.href = "/";
    </script>';
}

if($action == false) {
    echo '<script>alert("Error ao tentar login, verifique as informações e tente novamente em alguns instantes");
    window.location.href = "/login";
    </script>';
}   