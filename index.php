<?php

require 'vendor/autoload.php';
require 'app/bootstrap.php';
use App\Core\{Router, Request};

Router::load('routes.php')->direct(Request::uri(), Request::method());



/*
    instance method  호출 방법

    $router = new Router();
    require $router->load();

 */




//dd($routes[trim($_SERVER['REQUEST_URI'],'/')]);

//trim($_SERVER['REQUEST_URI'],'/');