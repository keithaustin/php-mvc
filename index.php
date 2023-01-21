<?php

    $config = require 'core/config.php';
    require 'core/Router.php';
    $router = new Router;

    $uri = trim($_SERVER['REQUEST_URI'], '/~keithdaustin/test/');
    echo("\"$uri\"");

    require $router->route($uri, $_SERVER['REQUEST_METHOD']);

?>