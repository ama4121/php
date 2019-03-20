<?php
namespace App\Core\Database;

use PDO;

class Connection
{
    /*
     *
     //instance
     public $foo; -> Instance Property

     //static :
     public static $bar -> Static Property

    */

    // Static Method
    public static function make($config)
    {
        try {
            return new PDO("{$config['connection']};dbname={$config['name']}", $config['username'], $config['password'], $config['options']);
        } catch (PDOException $exception) {
            $exception->getMessage();
        }
    }

}