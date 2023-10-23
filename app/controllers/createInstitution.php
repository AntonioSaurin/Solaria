<?php
require_once 'vendor/autoload.php';

use app\models\Institution;
use app\models\Phone;
use app\models\User;

if ($_POST['password'] != $_POST['conPassword']) {
    echo '<script> window.alert("As senhas não coincidem);
    window.location.href = "../views/register.html"
    </script>';

    die;
}

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$cnpj = filter_input(INPUT_POST, 'CNPJ', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$legalGuardian = filter_input(INPUT_POST, 'legalGuardian', FILTER_SANITIZE_STRING);
$legalGuardianCPF = filter_input(INPUT_POST, 'legalGuardianCPF', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
if (!empty($_POST['instagram'])) {
    $instagram = filter_input(INPUT_POST, 'instagram', FILTER_SANITIZE_STRING);
} else {
    $instagram = null;
}
if (!empty($_POST['facebook'])) {
    $facebook = filter_input(INPUT_POST, 'facebook', FILTER_SANITIZE_STRING);
} else {
    $facebook = null;
}
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = password_hash(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING), PASSWORD_BCRYPT);

$phone = new Phone;

$phoneExplode = explode(')', $userPhone);
$phoneNumber = trim($phoneExplode[1]);
$ddd = explode('(', $phoneExplode[0]);

$phoneAction = $phone->insert([
    'phoneNumber' => $phoneNumber,
    'DDD' => $ddd[1]
]);

if ($phoneAction != 1) {
    echo '<script> 
    alert("Incapaz de efetuar o cadastro!";
    window.location.href = "../views/register.html"; 
    </script>';
    die;
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

if ($userAction != true) {
    echo '<script> 
    alert("Incapaz de efetuar o cadastro!";
    window.location.href = "../views/register.html"; 
    </script>';
    die;
}

$userData = $user->find('userEmail', $email);

$institution = new Institution;

$institutionAction = $institution->insert([
    'accountID' => $userData['ID'],
    'CNPJ' => $cnpj,
    'legalGuardian' => $legalGuardian,
    'legalGuardianCPF' => $legalGuardianCPF,
    'instagram' => $instagram,
    'facebook' => $facebook,
    'description' => null,
    'state' => 'waiting'
]);

if ($institutionAction != 1) {
    echo '<script> 
    alert("Incapaz de efetuar o cadastro!";
    window.location.href = "../views/register.html"; 
    </script>';
    die;
}

echo '<script> 
    alert("Cadastro solicitado com sucesso, aguarde sua aprovação!";
    </script>';

header('Location: /login');