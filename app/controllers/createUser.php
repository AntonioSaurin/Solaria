<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once ($_SERVER['DOCUMENT_ROOT'].'\vendor\autoload.php');

use app\models\Adress;
use app\models\City;
use app\models\Donator;
use app\models\Phone;
use app\models\User;

if ($_POST['password'] != $_POST['conPassword']) {
    echo json_encode(false);
    die;
}

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$birthDateExplode = explode('/', filter_input(INPUT_POST, 'birthDate', FILTER_SANITIZE_STRING));
$birthDate = $birthDateExplode[2] . '-' . $birthDateExplode[1] . '-' . $birthDateExplode[0];
$cpf = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$userPhone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = password_hash(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING), PASSWORD_BCRYPT);
$conPassword = filter_input(INPUT_POST, 'conPassword', FILTER_SANITIZE_STRING);

$cep = filter_input(INPUT_POST, 'CEP', FILTER_SANITIZE_STRING);
$state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
$city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
$district = filter_input(INPUT_POST, 'district', FILTER_SANITIZE_STRING);
$number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
$street = filter_input(INPUT_POST, 'street', FILTER_SANITIZE_STRING);

$cPhone = new Phone;

$phoneExplode = explode(')', $userPhone);
$phoneNumber = trim($phoneExplode[1]);
$ddd = explode('(', $phoneExplode[0]);

$phoneAction = $cPhone->insert([
    'phoneNumber' => $phoneNumber,
    'DDD' => $ddd[1]
]);

if ($phoneAction != 1) {
    echo json_encode(false);
}

$cPhoneData = $cPhone->find('phoneNumber', $phoneNumber);

$cCity = new City;

$cCityData = $cCity->find('city', $city);

if (empty($cCityData['ID'])) {
    $cPhone->delete('ID', $cPhoneData['ID']);
    echo json_encode(false);
    die;
}

$cAdress = new Adress;

$adressVerify = $cAdress->findTwoFields('CEP', 'street', $cep, $street);

if ($adressVerify != null) {
    
    $cAdressData = $adressVerify;
    $cAdressAction = 1;

} else if ($adressVerify == null) {
    $cAdressAction = $cAdress->insert([
        'CEP' => $cep,
        'city' => $cCityData['ID'],
        'district' => $district,
        'street' => $street
    ]);
    
    $cAdressAction = $cAdress->insert([
        'CEP' => $cep,
        'city' => $cCityData['ID'],
        'district' => $district,
        'street' => $street
    ]);
}

if ($cAdressAction != 1) {
    $cPhone->delete('ID', $cPhoneData['ID']);
    echo json_encode(false);
    die;
}
;

$cAdressData = $cAdress->findTwoFields('CEP', 'street', $cep, $street);

$user = new User;

$userAction = $user->insert([
    'userName' => $name,
    'userEmail' => $email,
    'userPassword' => $password,
    'userPhone' => $cPhoneData['ID'],
    'userPhoto' => '1',
    'userAdress' => $cAdressData['ID'],
    'userAdressNumber' => $number
]);

if ($userAction != true) {
    echo json_encode(false);
}

$userData = $user->find('userEmail', $email);

$donator = new Donator;

$donatorAction = $donator->insert([
    'accountID' => $userData['ID'],
    'CPF' => $cpf,
    'birthDate' => $birthDate
]);

if ($donatorAction != 1) {
    echo json_encode(false);
    die;
}

echo json_encode(true);