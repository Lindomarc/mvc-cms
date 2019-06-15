<?php
namespace Acme\Classes;

class Hash{
    public static function makePassword($password, $salt){
        return crypt( $password, $salt );
    }

    public static function validatePassword($inputPassword, $encryptedPassword){
        if( crypt ($inputPassword, $encryptedPassword) == $encryptedPassword ){
            return true;
        }
        return false;
    }
    
    public static function makeSalt(){
        return \base64_encode( md5( uniqid(), true ) );
    }
     
}