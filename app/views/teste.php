<?php

use app\models\User;

$user = new User;

$busca = $user->fullFind('1');

echo "{$busca['userPassword']}";