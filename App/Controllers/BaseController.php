<?php
    namespace App\Controllers;
    use App\Core\CoreController as CoreController;
    
    class BaseController extends CoreController{

        private $controller;
        private $method;
        private $folders =  ['Admin', 'Site'];

        protected $twig;

        public function setTwig($twig){
            $this->twig = $twig;
        }

        public function getController(){

            $this->controller = ucfirst( $this->setMethod()['controller'] ).'Controller';
            foreach( $this->folders as $folder ){

                if( class_exists("\\App\\Controllers\\{$folder}\\".$this->controller)){
                    return "\\App\\Controllers\\{$folder}\\".$this->controller;
                }
                
            }
            return "\\App\\Controllers\\Error\\NotFoundController";

        }
        
        public function getMethod( $objetc ){

             if( empty($this->setMethod()['method'])){

                return $this->method = 'index';

            }else{

                if( method_exists($objetc, $this->setMethod()['method'] )){

                    return $this->method = $this->setMethod()['method'];

                }else{

                    return $this->method = 'index';

                }
            }

        }
        
    }