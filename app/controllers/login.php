<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
use app\models\User;

require_once $_SERVER['DOCUMENT_ROOT'].'vendor\autoload.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$user = new User;

$action = $user->login($email, $password);

echo json_encode($action);
   
