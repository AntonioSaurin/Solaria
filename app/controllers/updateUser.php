<?php
use app\models\User;

$data = [
    'userName' => 'Antonio',
    'userEmail' => 'antonio@gmail.com',
    'userStatus' => 'Disponivel'
];

$id = 1;

$user = new User;

$updated = $user->update($data, ['id' => $id]);
