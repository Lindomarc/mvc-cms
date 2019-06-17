<?php
namespace App\Classes;

class Redirect{

    public static function to( $location ){
        $location = (!empty($location))? $location : '/';
        //TODO: FAZER IDENTIFICAR PROTOCOLO HTTPS
        return header( 'Location:http://'.$_SERVER['HTTP_HOST'].'/'.$location);
    }
    
    public static function back(){
        $previous = "javascript:history.go(-1)";

        if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
        }

        return header("Location:{$previous}");
    }

}