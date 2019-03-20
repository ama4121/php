<?php


$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');
$router->get('tasks','PagesController@tasks');


$router->post('tasks/store','TasksController@store');




//dd($routes[trim($_SERVER['REQUEST_URI'],'/')]);

//trim($_SERVER['REQUEST_URI'],'/');