<?php
use app\models\User;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once ($_SERVER['DOCUMENT_ROOT'].'\vendor\autoload.php');

if($_POST['status'] != 1) {
    die;
}

$users = new User;

$data = $users->findList();

echo json_encode($data->fetchAll);

