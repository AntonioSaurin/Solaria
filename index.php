<?php
require_once 'vendor/autoload.php';

use app\classes\Routes;
use app\classes\Uri;

$routes = [
    '/' => 'views/home.php',
    '/login' => 'views/login.html',
    '/cadastro' => 'views/register.html',
    '/sobre-nos' => 'views/aboutUs.php',
    '/cadastro/efetuar' => 'controllers/createUser.php',
    '/login/efetuar' => 'controllers/login.php',
    '/teste' => 'views/teste.php',
    '/header' => 'views/header.html',
    '/usuario/editar' => 'controllers/updateUser.php',
    '/infoUser' => 'views/infoUser.php'
];

$uri = Uri::load();

require Routes::load($routes, $uri);