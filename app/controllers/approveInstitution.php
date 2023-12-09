<?php
use app\models\Institution;

if (session_status() == PHP_SESSION_NONE) {
 session_start();
}

require_once ($_SERVER['DOCUMENT_ROOT'].'\vendor\autoload.php');

$institution = new Institution;

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

$updated = $institution->update($_POST, ['id' => $id]);

if(!$updated) {
    echo json_encode(false);
    
    die;
}

echo json_encode(true);
die;