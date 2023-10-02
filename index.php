<?php
require_once 'vendor/autoload.php';

use app\classes\Routes;
use app\classes\Uri;

$routes = [
    '/' => 'views/home.php',
    '/login' => 'views/login.html',
    '/cadastro' => 'views/register.html',
    '/sobre-nos' => 'views/aboutUs.php'
];

$uri = Uri::load();

require Routes::load($routes, $uri);