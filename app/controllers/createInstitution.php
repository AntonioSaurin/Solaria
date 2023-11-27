<?php
require_once 'vendor/autoload.php';

use app\models\Adress;
use app\models\City;
use app\models\Institution;
use app\models\Phone;
use app\models\User;

if ($_POST['password'] != $_POST['conPassword']) {
    echo '<script> window.alert("As senhas não coincidem);
    window.location.href = "/cadastroInstituicao";
    </script>';

    die;
}

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$cnpj = filter_input(INPUT_POST, 'CNPJ', FILTER_SANITIZE_STRING);
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);
$directorCPF = filter_input(INPUT_POST, 'directorCPF', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$cep = filter_input(INPUT_POST, 'CEP', FILTER_SANITIZE_STRING);
$state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
$city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
$district = filter_input(INPUT_POST, 'district', FILTER_SANITIZE_STRING);
$number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
$street = filter_input(INPUT_POST, 'street', FILTER_SANITIZE_STRING);

$password = password_hash(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING), PASSWORD_BCRYPT);
$facebook = null;
$instagram = null;

$cPhone = new Phone;

$phoneExplode = explode(')', $phone);
$phoneNumber = trim($phoneExplode[1]);
$ddd = explode('(', $phoneExplode[0]);

$cPhoneAction = $cPhone->insert([
    'phoneNumber' => $phoneNumber,
    'DDD' => $ddd[1]
]);

if ($cPhoneAction != 1) {
    echo '<script> 
    alert("Incapaz de efetuar o cadastro!";
    window.location.href = "/cadastro"; 
    </script>';
    die;
}

$cPhoneData = $cPhone->find('phoneNumber', $phoneNumber);

$cCity = new City;

$cCityData = $cCity->find('city', $city);

if (empty($cCityData['ID'])) {
    $cPhone->delete('ID', $cPhoneData['ID']);
    echo '<script> 
    alert("Incapaz de efetuar o cadastro!";
    window.location.href = "/cadastro"; 
    </script>';
    die;
}

$cAdress = new Adress;

$cAdressAction = $cAdress->insert([
    'CEP' => $cep,
    'city' => $cCityData['ID'],
    'district' => $district,
    'street' => $street
]);

if ($cAdressAction != 1) {
    $cPhone->delete('ID', $cPhoneData['ID']);
    echo '<script> 
    alert("Incapaz de efetuar o cadastro!";
    window.location.href = "/cadastro"; 
    </script>';
    die;
}
;

$cAdressData = $cAdress->findTwoFields('CEP', 'street', $cep, $street);

// var_dump($cPhoneData);
// var_dump($cAdressData);
// var_dump($name);
// var_dump($email);
// var_dump($password);
// var_dump($number);

// die;

$cUser = new User;

$cUserAction = $cUser->insert([
    'userName' => $name,
    'userEmail' => $email,
    'userPassword' => $password,
    'userPhone' => $cPhoneData['ID'],
    'userPhoto' => '1',
    'userAdress' => $cAdressData['ID'],
    'userAdressNumber' => $number
]);

if ($cUserAction != 1) {
    $cPhone->delete('ID', $cPhoneData['ID']);
    $cAdress->delete('ID', $cAdressData['ID']);
    echo '<script> 
    alert("Incapaz de efetuar o cadastro!";
    window.location.href = "/cadastro"; 
    </script>';
    die;
}

$cUserData = $cUser->find('userEmail', $email);

$cInstitution = new Institution;

$cInstitutionAction = $cInstitution->insert([
    'accountID' => $cUserData['ID'],
    'CNPJ' => $cnpj,
    'director' => $director,
    'directorCPF' => $directorCPF,
    'instagram' => $instagram,
    'facebook' => $facebook,
    'description' => null,  
    'state' => 'waiting'
]);

if ($cUserAction != 1) {
    $cPhone->delete('ID', $cPhoneData['ID']);
    $cAdress->delete('ID', $cAdressData['ID']);
    $cUser->delete('ID', $cUserData['ID']);
    echo '<script> 
    alert("Incapaz de efetuar o cadastro!";
    window.location.href = "/cadastro"; 
    </script>';
    die;
}

header('Location: /');

