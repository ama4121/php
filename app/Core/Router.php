<?php
namespace App\Core;
use Exception;

class Router{
    protected  $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function get($uri,$controller){
        $this->routes['GET'][$uri] = $controller;
    }
    
    public function post($uri,$controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public static function load($file)
    {
        $router = new static;
        require $file;

        return $router;
    }


    public function define($routes){
        $this->routes = $routes;
    }



    //PagesControlller@home
    public function direct($uri, $method){
        if(array_key_exists($uri, $this->routes[$method])){

           return $this->callAction(...explode('@', $this->routes[$method][$uri]));
            
        }
            throw new Exception('No Route Defined For this URI');
    }

    protected function callAction($controller, $action)
    {
        $controller =  "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller,$action)){
            throw new Exception ('No Action.');
        }
        return $controller->$action();

    }


}