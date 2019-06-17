<?php
namespace App\Traits;
use App\Classes\Load;
/**
* 
*/
trait Controller
{

    public function getController(){

        $folders = Load::config('controllers');

        $this->controller = ucfirst( $this->setMethod()['controller'] ).'Controller';
        foreach( $folders->folders as $folder ){
            // primeira letra da pasta sempre maiuscula
            ucfirst($folder);
            if( class_exists("\\App\\Controllers\\{$folder}\\".$this->controller)){
                return "\\App\\Controllers\\{$folder}\\".$this->controller;
            }
        }
        return "\\App\\Controllers\\Error\\NotFoundController";

    }

    public function getMethod( $objetc ){

        if (!isset($this->setMethod()['method'])) {
            return 'index';
        }

        if(!method_exists($objetc,$this->setMethod()['method'])){
            throw new Exception("Não existe esse method ".$this->setMethod()['method']);
        }

        return $this->setMethod()['method'];

    }

    public function getParameter(){
        return $this->setMethod()['parameter'] ?? '';
    }
}