<?php
use app\classes\Logged;
use app\models\Donation;
use app\models\Donator;
use app\models\Institution;
use app\models\Message;
use app\models\Phone;
use app\models\Photo;
use app\models\User;

require_once 'vendor/autoload.php';

$institution = filter_input(INPUT_POST, 'institution', FILTER_VALidATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
$id = filter_input(INPUT_POST, 'idUser', FILTER_SANITIZE_NUMBER_INT);

error_log('id: '.$id.'- Intituição: '.$institution);

$user = (new User)->find('id', $id);

(new Message)->delUserMessage($user['ID']);

(new Donation)->delete('donator', $user['ID']);

if($institution == true){
 (new Institution)->delete('accountID', $user['ID']);
}

if($institution == false){
    (new Donator)->delete('accountID', $user['ID']);
}

(new User)->delete('id', $user['id']);

if ($user['userPhoto'] != 1) {
    (new Photo)->delete('id', $user['userPhoto']);
}

(new Phone)->delete('id', $user['userPhone']);

return true;
