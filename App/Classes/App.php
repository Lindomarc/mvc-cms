<?php
namespace App\Classes;

use Exception;

class App
{
    private static $bind = [];

    public static function bind($key, $value){
        static::$bind[$key] = $value;
    }

    public static function get($key){ 
        if (!isset(static::$bind[$key])) {
            throw new Exception("{$key} não existe no container");
        }
        return static::$bind[$key]; 
    }
}    