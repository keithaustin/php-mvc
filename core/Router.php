<?php

    class Router {

        function route($uri, $type) {
            switch ($type) {
                case 'get':
                    if (array_key_exists($uri, $config->routes_get)) {
                        return $config->routes_get[$uri];
                    }
                    break;
                case 'post':
                    if (array_key_exists($uri, $config->routes_post)) {
                        return $config->routes_post[$uri];
                    }
                    break;
                default:
                    echo "Route not defined!";
                    return "controllers/index.php";
            }
        }

    }

?>