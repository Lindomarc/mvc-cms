<?php
namespace Acme\Classes;

class Redirect{

    public static function to( $location ){
        $location = (!empty($location))? $location : '/';
        //TODO: FAZER IDENTIFICAR PROTOCOLO HTTPS
        return header( 'Location:http://'.$_SERVER['HTTP_HOST'].'/'.$location);
    }

}