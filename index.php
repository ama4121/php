<?php

require 'core/bootstrap.php';


require Router::load('routes.php')->direct(Request::uri());



/*
    instance method  호출 방법

    $router = new Router();
    require $router->load();

 */




//dd($routes[trim($_SERVER['REQUEST_URI'],'/')]);

//trim($_SERVER['REQUEST_URI'],'/');