<?php 
namespace App\Classes;
class AddSlashUrl{

    private  $urlURi;

    public function addSlash(){
        

        if( $_SERVER['REQUEST_URI'] != '/'){            
            $this->urlURi = $_SERVER['REQUEST_URI'].'/';
            return $urlURi;
        }
        
    }
}