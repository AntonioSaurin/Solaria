<?php

require_once '../models/User.php';

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$birthDate = filter_input(INPUT_POST, 'birthDate', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$conPassword = filter_input(INPUT_POST, 'conPassword', FILTER_SANITIZE_STRING);

$user = new User;

$user->insert([
    'userName' => $name,
    'userEmail' => $email,
    'userPassword' => $password,
    'userPhone' => null,
    'userPhoto' => null,
    'userAdress' => null,
]);

