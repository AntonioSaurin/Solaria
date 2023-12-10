<?php
use app\models\Institution;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once ($_SERVER['DOCUMENT_ROOT'].'\vendor\autoload.php');

if(!isset($_GET['user'])) {
    echo json_encode(false);
    die;
}

$institutions = new Institution;

$data = $institutions->fullFind2();

echo json_encode($data);