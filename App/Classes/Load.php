<?php 
namespace App\Classes;

class Load
{
    static $config;

    public function load($index){
        
        static::$config = require "../App/Config/Config.php";

        if( !isset(static::$config[$index]) ){

            throw new \Exception("Esse indice não existe: {$index} na class Load");

        }

        return (object) static::$config[$index];
    }
}