<?php

namespace App\Traits;
use App\Classes\Config;
use Exception;

trait ControllerAndMethod
{

    protected $controller;

    /**
     * @return string
     * @throws Exception
     */
    public function getController(){

        $folders = Config::load('controllers');

        $this->controller = ucfirst( $this->setMethod()['controller'] ).'Controller';

        foreach( $folders->folders as $folder ){

            ucfirst($folder);
            if( class_exists("\\App\\Controllers\\{$folder}\\".$this->controller)){
                return "\\App\\Controllers\\{$folder}\\".$this->controller;
            }
        }
        return "\\App\\Controllers\\Errors\\NotFoundController";

    }

    /**
     * @param $object
     * @return string
     * @throws Exception
     */
    public function getMethod($object){

        if (!isset($this->setMethod()['method'])) {
            return 'index';
        }

        if(!method_exists($object,$this->setMethod()['method'])){
            throw new Exception("Não existe esse method ".$this->setMethod()['method']);
        }

        return $this->setMethod()['method'];

    }

    /**
     * @return string
     */
    public function getParameter(){
        return $this->setMethod()['parameter'] ?? '';
    }
}