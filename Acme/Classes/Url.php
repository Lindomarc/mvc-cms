<?php
namespace Acme\Classes;

class Url{
    public static function getUrl(){
        return $_SERVER['REQUEST_URI'];
    }
}