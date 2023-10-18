<?php
require_once 'vendor/autoload.php';

use app\classes\Routes;
use app\classes\Uri;

session_start();

$routes = [
    '/' => 'views/home.php',
    '/login' => 'views/login.php',
    '/cadastro' => 'views/register.php',
    '/sobre-nos' => 'views/aboutUs.php',
    '/como-adotar' => 'views/howToAdopt.php',
    '/cadastro/efetuar' => 'controllers/createUser.php',
    '/login/efetuar' => 'controllers/login.php',
    '/teste' => 'views/teste.php',
    '/header' => 'views/header.php',

    '/chat' => 'views/chat/chatUsers.php',
    '/chat/login' => 'views/chat/chatLogin.php',
    '/chat/registrar' => 'views/chat/chatSignup.php',
    '/chat/conversar' => 'views/chat/chatMain.php',

    '/usuario/editar' => 'controllers/updateUser.php',
    '/instituicoes' => 'views/institutionPage.php',
    '/infoUser' => 'views/infoUser.php',
    '/doacao' => 'views/institutionPage.php'
];

$uri = Uri::load();

require Routes::load($routes, $uri);