<?php 
namespace Acme\Classes;
use \Acme\Classes\Url as Url;
class Parameters{
    public static function getParameter( $numeroIndex ){

        $explodeUrl = explode('/', Url::getUrl() );
        return $explodeUrl[ $numeroIndex  ];
        
    }
}