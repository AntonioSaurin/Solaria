<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once ($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php'); 

if(isset($_SESSION['admin'])) {
    echo json_encode('admin');
    die;
};

if(isset($_SESSION['institution'])) {
    echo json_encode('institution');
    die;
}

if(isset($_SESSION['id'])) {
    echo json_encode('donator');
    die;
}

echo json_encode('unlogged');