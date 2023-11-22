<?php
    namespace app\classes;

    class Routes {

        public static function load($routes, $uri){
            
            if(!array_key_exists($uri, $routes))
            {    
                
                // throw new \Exception ("Rota não existe {$uri}");   
                return $_SERVER['DOCUMENT_ROOT']."/app/{$routes['/404']}";
            }else{
                return $_SERVER['DOCUMENT_ROOT']."/app/{$routes[$uri]}";
            }
        }

    }
?>