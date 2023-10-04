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
<<<<<<< HEAD
    '/usuario/editar' => 'controllers/updateUser.php'
=======
    '/info' => 'views/infoUser.php'
>>>>>>> e97e75ce61912d92750ffa0a274d257813bdd89d
];

$uri = Uri::load();

require Routes::load($routes, $uri);