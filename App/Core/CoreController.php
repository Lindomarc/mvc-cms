<?php

namespace App\Core;
use \App\Classes\Url;

class CoreController{

    private function setController($url){                

        $controller = substr($url,1);
        
        if(substr_count($controller, '/') >= 1){
            list($controller, $method, $parameter) = explode('/', $controller.'/');

            return[
                'controller'    => $controller,
                'method'        => $method,
                'parameter'     => $parameter
            ];
        }

        return [ 'controller' => $controller];

    }

    public function setMethod(){

        $url = Url::getUrl();
        if($url != ''){
            return $this->setController($url);
        }
        return [ 'controller' => DEFAULT_CONTROLLER];
    }

}