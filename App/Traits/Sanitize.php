<?php
namespace App\Traits;

/**
 * 
 */
trait Sanitize
{
    private static $sanitized = [];
    
    public function sanitize(...$indexs ){
        foreach ($indexs as $index) {
            if(!strpos($index, ':')){
                throw new Exception("Tem algo coisa errada com a validação no indice {$index} verifique se tem dois pontos");
            }
            
            list($fildToValidate, $typeValidade) = explode(":", $index);

            switch ($typeValidade) {
                case 's':
                    static::$sanitized[$fildToValidate] = $this->string($_POST[$fildToValidate]);
                    break;
            
                case 'i':
                    static::$sanitized[$fildToValidate] = $this->int($_POST[$fildToValidate]);
                    break;
            
                default:
                    break;
            }
        }
        return new Static;
    }

    public function string($string){
        return filter_var($string, FILTER_SANITIZE_STRING);
    }


    public function int($int){
        return filter_var($int, FILTER_SANITIZE_NUMBER_INT);
    }

    public static function dataSanitized(){
        if(empty(static::$sanitized)){
            throw new Exception("Opa, você esqueceu de proteger seus dados, use sempre sanitize");
            
        }
        return (object) static::$sanitized;
    }
}