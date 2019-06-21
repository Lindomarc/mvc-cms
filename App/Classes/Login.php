<?php
namespace App\Classes;

use \App\Models\Model;


class Login
{
    public function login($email, $password, Model $model)
    {
        $data = $model->find('email', $email)->first();

        if(!$data){
           return false;
        }
        
        if(Hash::checkPassword($password, $data->password)){

            $_SESSION['user'][$model->logged] = true;
            $_SESSION['user'][$model->data] = $data;

            session_regenerate_id();

            return true;

        } 
    }
}   