<?php

class Request
{
    public static function uri()
    {
//        dd(parse_url(trim($_SERVER['REQUEST_URI'],'/'),PHP_URL_PATH));
        return parse_url(trim($_SERVER['REQUEST_URI'],'/'),PHP_URL_PATH);
    }
    
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }



}