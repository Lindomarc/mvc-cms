<?php
namespace App\Classes;
use \App\Models\Model;


class Login
{
    public function login($email, $password, Model $model)
    {
        $data = $model->find('email', $email);

        if(!$data){
           return false;
        }

        $password = Hash::makePassword($password,$data->salt);
        if(count((array)$data) > 1 && $password == $data->password){

            $_SESSION['user'][$model->logged] = true;
            $_SESSION['user'][$model->data] = $data;

            session_regenerate_id();

            return true;

        } 
    }
}   