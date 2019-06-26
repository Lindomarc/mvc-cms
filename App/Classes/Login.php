<?php
namespace App\Classes;

use \App\Models\Model;


class Login
{
    /**
     * @param $email
     * @param $password
     * @param Model $model
     * @return bool
     */
    public function login($email, $password, Model $model)
    {
        $data = $model->find('email', $email)->first();

        if(!$data){
           return false;
        }
        
        if(Hash::checkPassword($password, $data->password)){

            $_SESSION['user']['logged'] = true;
            $_SESSION['user']['data'] = $data;

            session_regenerate_id();

            return true;

        }

        return false;

    }
}   