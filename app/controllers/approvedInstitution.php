<?php
use app\models\Institution;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once ($_SERVER['DOCUMENT_ROOT'].'\vendor\autoload.php');

$data = (new Institution)->findList();

var_dump($data);

// echo json_encode($data);

