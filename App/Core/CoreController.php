<?php

    namespace App\Core;
    
    // use Acme\Classes\AddSlashUrl as AddSlashUrl;

    class CoreController{

        protected $url;

        public function setUrl($url){

            $this->url = $url;

        }

        private function addSlash(){

            if( $_SERVER['REQUEST_URI'] != '/'){            
                return  $_SERVER['REQUEST_URI'].'/';
            }
            
        }
    
        // /**
        //  * Adicionar barra ao final doa url
        //  */
        // private function addSlashUri(){

        //     $urlSlash = $this->addSlash();
            
        //     return $urlSlash;

        // }
 
        /**
         * verifica o numero de segmentos da url e pega o controller e o metodo
         */
        private function setController($explodeUrl){                
         
             // exemple.com/produto/lancamento
            if(count($explodeUrl) <= 1){
                return ['controller' => $explodeUrl[1]];

            }else{
                return [
                    'controller' => $explodeUrl[1],
                    'method' => $explodeUrl[2]
                ];
            }

        }

        public function setMethod(){
            if( isset( $this->url ) ){
                if( substr_count( $this->addSlash(), '/' ) > 1 ){
                    $explodeUrl = explode( '/', $this->url );
                    //excluir valor vazio
                    unset( $explodeUrl[0] );      
                    return $this->setController( $explodeUrl );

                }else {
                    return ['controller' => DEFAULT_CONTROLLER];
                }

            }else{
                return ['controller' => DEFAULT_CONTROLLER];
            }
        }
    }