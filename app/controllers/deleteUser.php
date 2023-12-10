<?php
use app\models\Donation;
use app\models\Donator;
use app\models\Institution;
use app\models\Message;
use app\models\Phone;
use app\models\Photo;
use app\models\User;

require_once 'vendor/autoload.php';

$institution = filter_input(INPUT_POST, 'institution', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
$id = filter_input(INPUT_POST, 'idDelete', FILTER_SANITIZE_NUMBER_INT);

$user = (new User)->find('ID', $id);

(new Message)->delUserMessage($user['ID']);

(new Donation)->delete('donator', $user['ID']);

if($institution === true){
 (new Institution)->delete('accountID', $user['ID']);
}

if($institution === false){
    (new Donator)->delete('accountID', $user['ID']);
}

(new User)->delete('ID', $user['ID']);

if ($user['userPhoto'] != 1) {
    (new Photo)->delete('ID', $user['userPhoto']);
}

(new Phone)->delete('ID', $user['userPhone']);

return true;
