<?php 
namespace App\Classes;
use \App\Traits\Validate;


class Validator
{
    use Validate;

    public static function validate(\Closure $callback){
        
        
        if(is_callable($callback)){
            $callback();
        }
    }
}
