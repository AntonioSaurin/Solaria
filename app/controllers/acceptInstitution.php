<?php
use app\models\Institution;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once ($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php'); 

$institution = new Institution;

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);

$credentials = require $_SERVER['DOCUMENT_ROOT'].'/app/config/database.php';

$conn = mysqli_connect($credentials['host'], $credentials['username'], $credentials['password'], $credentials['dbname']);


if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}

$query = "UPDATE institution SET state = '{$state}' WHERE accountID = '{$id}';";

error_log($query);

$result = mysqli_query($conn, $query);


if ($result === false) {
    error_log("Erro na execução da query: " . mysqli_error($conn));
    die("Erro na execução da query: " . mysqli_error($conn));
    return false;
} else {
    echo "Atualização bem-sucedida!";
    return true;
}




