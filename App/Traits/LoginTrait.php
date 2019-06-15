<?php

namespace App\Traits;

use \App\Classe\Redirect;

/**
 * 
*/
trait LoginTrait
{
    private $fields;
    private $field;
    private $sqlField;
    private $db;

    public function setDb( $db ){
        $this->db = $db;
    }

    public function setFields( $fields ){
        $this->fields = $fields;
    }

    public function loginSystem( $email, $passsord ){

        foreach ($this->fields as $field){
            $this->field.= $field.'=? and ';  
        }
        $this->sqlField = rtrim( $this->field,'and ' );
        $Loged = $this->db->find('first',[ 'conditions' => [ $this->sqlField, $email, $passsord ] ] );
        
        return $Loged;
    }

    public function logout( $session = 'user' ){
        if(isset( $_SESSION[ $session ] ) ){
            unset( $_SESSION[ $session ] );
            // prevenir roubo de sessão
            session_regenerate_id();
        }
    }

    public static function isLoged( $session  = 'user' ){
        if ( !isset( $_SESSION[ $session ] ) ) {
            Redirect::to( '/admin' );
        }   
    }

}


?>