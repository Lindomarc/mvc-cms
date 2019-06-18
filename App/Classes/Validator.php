<?php 
namespace App\Classes;
use \App\Traits\Validate;
use \App\Traits\Sanitize;


class Validator
{
    use Validate, Sanitize;

    public static function validate(\Closure $callback){
        
        
        if(is_callable($callback)){
            $callback();

            return self::dataSanitized();
            
        }
    }
}
