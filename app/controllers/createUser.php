<?php
require_once 'vendor/autoload.php';

use app\models\Donator;
use app\models\Phone;
use app\models\User;

if($_POST['password'] != $_POST['conPassword']) {
    echo '<script> window.alert("As senhas não coincidem")</script>';
   
    header('Location: /cadastro');
    die;
}

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$birthDateExplode = explode('/', filter_input(INPUT_POST, 'birthDate', FILTER_SANITIZE_STRING));
$birthDate = $birthDateExplode[2].'-'.$birthDateExplode[1].'-'.$birthDateExplode[0];
$cpf = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$userPhone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = password_hash(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING), PASSWORD_BCRYPT);
$conPassword = filter_input(INPUT_POST, 'conPassword', FILTER_SANITIZE_STRING);

$phone = new Phone;

$phoneExplode = explode(')', $userPhone);
$phoneNumber = trim($phoneExplode[1]);
$ddd = explode('(', $phoneExplode[0]);

$phoneAction = $phone->insert([
    'phoneNumber' => $phoneNumber,
    'DDD' => $ddd[1]
]);

if($phoneAction != 1){
    echo '<script> 
    alert("Incapaz de efetuar o cadastro!";
    window.location.href = "/cadastro"; 
    </script>';
}

$phoneData = $phone->find('phoneNumber', $phoneNumber);

$user = new User;

$userAction = $user->insert([
    'userName' => $name,
    'userEmail' => $email,
    'userPassword' => $password,
    'userPhone' => $phoneData['ID'],
    'userPhoto' => null,
    'userAdress' => null,
]);

if($userAction != true){
    echo '<script> 
    alert("Incapaz de efetuar o cadastro!";
    window.location.href = "/cadastro"; 
    </script>';
}

$userData = $user->find('userEmail', $email);

$donator = new Donator;

$donatorAction = $donator->insert([
    'accountID' => $userData['ID'],
    'CPF' => $cpf,
    'birthDate' => $birthDate
]);

if($donatorAction != 1){
    echo '<script> 
    alert("Incapaz de efetuar o cadastro!";
    window.location.href = "/cadastro"; 
    </script>';
}

header('Location: /login');