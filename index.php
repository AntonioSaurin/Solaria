<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solaria</title>
    <link rel="icon" type="image/x-icon" href="app/style/img/Brand.png">
</head>
<body>
    <?php
        require_once 'vendor/autoload.php';

        use app\classes\Routes;
        use app\classes\Uri;

        session_start();

        $routes = require('app/config/routes.php');

        $uri = Uri::load();

        require Routes::load($routes, $uri);
    ?>
</body>
</html>



