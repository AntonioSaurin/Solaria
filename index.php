<?php
require_once 'vendor/autoload.php';

use app\classes\Routes;
use app\classes\Uri;

session_start();

$routes = require('app/config/routes.php');

$uri = Uri::load();

require Routes::load($routes, $uri);