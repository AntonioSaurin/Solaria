<?php

use app\models\User;

$user = (new User)->find('userEmail', 'antonio20@gmail.com');

var_dump($user);