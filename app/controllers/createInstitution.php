<?php
require_once 'vendor/autoload.php';

use app\models\Adress;
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
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);
$directorCPF = filter_input(INPUT_POST, 'directorCPF', FILTER_SANITIZE_STRING);$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$state = filter_input(INPUT_POST,'state', FILTER_SANITIZE_STRING);
$city = filter_input(INPUT_POST,'city', FILTER_SANITIZE_STRING);
$district = filter_input(INPUT_POST,'district', FILTER_SANITIZE_STRING);
$number = filter_input(INPUT_POST,'number', FILTER_SANITIZE_STRING);
$street = filter_input(INPUT_POST,'street', FILTER_SANITIZE_STRING);

$password = password_hash(filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING), PASSWORD_BCRYPT);
$facebook = null;
$instagram = null;

$phone = new Phone;

$phoneExplode = explode(')', $userPhone);
$phoneNumber = trim($phoneExplode[1]);
$ddd = explode('(', $phoneExplode[0]);

$phoneAction = $phone->insert([
    'phoneNumber' => $phoneNumber,
    'DDD' => $ddd[1]
]);

if($phoneAction != 1) {
    echo '<script> 
    alert("Incapaz de efetuar o cadastro!";
    window.location.href = "/cadastro"; 
    </script>';
    die;
}

$phoneData = $phone->find('phoneNumber', $phoneNumber);

