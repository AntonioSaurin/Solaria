<?php
use app\models\Donation;
use app\models\Donator;
use app\models\Institution;
use app\models\Message;
use app\models\Phone;
use app\models\Photo;
use app\models\User;

require_once ($_SERVER['DOCUMENT_ROOT'].'\vendor\autoload.php');

$institution = filter_input(INPUT_POST, 'institution', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'idUser', FILTER_SANITIZE_NUMBER_INT);

$user = (new User)->find('id', $id);

if (!$user) {
    return false;
}

(new Message)->delUserMessage($user['ID']);

(new Donation)->delete('donator', $user['ID']);

if ($institution === 'true') {
    (new Institution)->delete('accountID', $user['ID']);
} elseif ($institution === 'false') {
    (new Donator)->delete('accountID', $user['ID']);
}

(new User)->delete('ID', $user['ID']);

if ($user['userPhoto'] != 1) {
    (new Photo)->delete('id', $user['userPhoto']);
}

(new Phone)->delete('id', $user['userPhone']);

return true;
