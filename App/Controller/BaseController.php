<?php
    namespace App\Controllers;
    use App\Core\CoreController as CoreController;
    
    class BaseController extends CoreController{

        private $controller;
        private $folders =  ['admin', 'site'];

        protected $twig;

        public function setTwig($twig){
            $this->twig = $twig;
        }
        public function getController(){
            $this->controller = ucfirst( $this->controller()['controller']).'Controller';
        
            foreach( $this->folders as $folder ){
                if( class_exists("\\App\\Controller\\".$folder."\\".$this->controller)){
                    return "\\App\\Controllers\\".$folder."\\".$this->controller;
                }
                return "\\App\\Controllers\\Error\NofFoundController";
            }
        }
        
        public function getMethod( $objetc ){
            if( empty($this->controller()['method'])){
                return $this->controller = 'index';
            }else{
                if( method_exists($objetc, $this->controller()['method'] )){
                    return $this->controller = $this->controller()['method'];
                }else{
                    return $this->controller = 'index';
                }
            }
        }
    }