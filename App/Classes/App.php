<?php
namespace App\Classes;

class App
{
    private static $bind = [];

    public static function bind($key, $value){
        static::$bind[$key] = $value;
    }

    public static function get($key){ 
        if (!isset(static::$bind[$key])) {
            throw new \Exception("Esse indice {$key} não existe no container");   
        }
        return static::$bind[$key]; 
    }
}    