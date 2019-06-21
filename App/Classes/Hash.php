<?php
namespace App\Classes;

class Hash
{
    public static function make($password){
        
        $options = [
            'cost' => 11
        ];

        return password_hash( $password, PASSWORD_DEFAULT, $options );
    }

    public static function checkPassword($inputPassword, $encryptedPassword){
        return password_verify($inputPassword, $encryptedPassword);
    }
    
     
}