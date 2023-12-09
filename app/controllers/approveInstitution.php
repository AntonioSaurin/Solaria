<?php
use app\models\Institution;

if (session_status() == PHP_SESSION_NONE) {
 session_start();
}

require_once ($_SERVER['DOCUMENT_ROOT'].'\vendor\autoload.php');

$institution = new Institution;

$state = $_POST['state'];
$id = $_POST['id'];

console.log($state);


$updated = $institution->update($id, ['stateInstitution' => $state]);