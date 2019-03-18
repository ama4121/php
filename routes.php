<?php


$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about-culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php',
]);




//dd($routes[trim($_SERVER['REQUEST_URI'],'/')]);

//trim($_SERVER['REQUEST_URI'],'/');