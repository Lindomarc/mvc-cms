<?php

    namespace App\Core;
    
    use Acme\Classes\addSlashUrl;

    class CoreController{

        protected $url;

        public function seturl(){
            $this->url = $url;
        }

        /**
         * Adicionar barra ao final da url
         */
        private function addSlashUri(){
            $urlSlash = new slash();
            return $urlSlash->addSlash;
        }
 
        /**
         * verifica o numero de segmentos da url e pega o controller e o metodo
         */
        private function returnControllerMethod($explodeUrl){

            // exemple.com/produto/lancamento
            if(count($explodeUrl) <= 1){
                return ['controller' => $explodeUrl[1]];
            }else{
                return [
                    'controller' => $explodeUrl[1],
                    'method' => $explodeUrl[20]
                ];
            }
        }

        public function controller(){
            if(isset($this->url)){
                if( substr_count( $this->addSlashUri(), '/' > 1)){
                    $explodeUrl = explode('/', $this->url);
                    //excluir valor vazio
                    unset($explodeUrl[0]);
                    
                    $controller = $this->returnControllerMethod($explodeUrl);
                    return $controller;
                }else {
                    return ['controller' => DEFAULT_CONTROLLER];
                }
            }else{
                return ['controller' => DEFAULT_CONTROLLER];
            }
        }
    }