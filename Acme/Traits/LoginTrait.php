<?php

namespace Acme\Traits;

use \Acme\Classe\Redirect;

/**
 * 
*/
trait LoginTrait
{
    private $fields;
    private $field;
    private $sqlField;

    public function setFields( $fields ){
        $this->fields = $fields;
    }

    public function login( $email, $passsord ){

        foreach ($this->fields as $field){
            $this->field.= $field.'=? and ';  
        }
        $this->sqlField = rtrim( $this->field,'and ' );
        $Loged = parent::find('first',[ 'conditions' => [ $this->sqlField, $email, $passsord ] ] );
        
        return $Loged;
    }

    public function logout( $session ){
        if(isset( $_SESSION[ $session ] ) ){
            unset( $_SESSION[ $session ] );
            // prevenir roubo de sessão
            session_regenerate_id();
        }
    }

    public static function isLoged( $session   ){
        if ( !isset( $_SESSION[ $session ] ) ) {
            Redirect::to( '/admin' );
        }   
    }

}


?>