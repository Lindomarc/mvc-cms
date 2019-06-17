<?php
namespace App\Traits;
use App\Classes\Flash;

/**
 * 
 */
trait Validate
{
    private static $error = false;
    
    public static function required(...$fields){

        foreach ($fields as $field) {
            if(empty($_POST[$field])){
                Flash::add($field, "Esse campo é obrigatório");
                static::$error = true;
            }

        }

        return new Static;

    }

    public static function email(...$fields){

        foreach ($fields as $field) {
                if(!filter_input(INPUT_POST,$field,FILTER_VALIDATE_EMAIL)){
                    Flash::add($field, "Esse campo tem que ter email válido");
                    static::$error = true;
                }
            }

        return new Static;
    }

    public static function unique($field, $model)
    {
        $modelToValidate = new $model();

        $register = $modelToValidate->find($field, $_POST[$field]);

        if($register){
            Flash::add($field, "Já existe esse registro");
            static::$error = true;
        }
        return new Static;
        
    }

    public static function failed(){
        return static::$error;
    }

}
