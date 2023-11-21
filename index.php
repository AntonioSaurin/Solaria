<?php
require_once 'vendor/autoload.php';

use app\classes\Routes;
use app\classes\Uri;

session_start();

<<<<<<< HEAD
$routes = [
    '/' => 'views/home.php',
    '/login' => 'views/login.php',
    '/cadastro' => 'views/register.php',
    '/cadastroInstituicao' => 'views/registerInstituicao.php',
    '/sobre-nos' => 'views/aboutUs.php',
    '/como-adotar' => 'views/howToAdopt.php',
    '/cadastro/efetuar' => 'controllers/createUser.php',
    '/cadastro/efetuarInstituicao' => 'controllers/createInstitution.php',
    '/login/efetuar' => 'controllers/login.php',
    '/teste' => 'views/teste.php',
    '/header' => 'views/header.php',

    '/admin' => 'views/adminMenu.php',

    '/chat' => 'views/chat/chatUsers.php',
    '/chat/conversar' => 'views/chat/chatMain.php',

    '/usuario/editar' => 'controllers/updateUser.php',
    '/instituicoes' => 'views/institutionPage.php',
    '/perfilInstituicoes' => 'views/profileInstitution.php',
    '/infoUser' => 'views/infoUser.php',
    '/doacao' => 'views/institutionPage.php',
    '/infoInstituicoes' => 'views/infoInstitution.php',
    '/historicoInst' => 'views/historicInstitution.php',
    '/historicoUser' => 'views/historicUser.php',
    '/annualPlan' => 'views/annualPlan.php'
];
=======
$routes = require('app/config/routes.php');
>>>>>>> 0fac48630e58ac525bf7983242d86f2097024f26

$uri = Uri::load();

require Routes::load($routes, $uri);