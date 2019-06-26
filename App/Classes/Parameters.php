<?php 
namespace App\Classes;

use \App\Classes\Url as Url;

class Parameters{
    public static function getParameter( $numeroIndex ){

        $explodeUrl = explode('/', Url::getUrl() );
        return $explodeUrl[ $numeroIndex  ];
        
    }
}