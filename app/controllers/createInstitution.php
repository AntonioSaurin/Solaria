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
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);
$directorCPF = filter_input(INPUT_POST, 'directorCPF', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$facebook = null;
