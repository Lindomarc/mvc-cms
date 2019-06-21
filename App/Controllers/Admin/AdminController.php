<?php
namespace App\Controllers\Admin;
use \App\Classes\Flash;
use \App\Classes\Login;
use \App\Classes\Redirect;
use \App\Models\Admin\Admins; 
use \App\Controllers\ContainerController;
use \App\Classes\Hash;
class AdminController extends ContainerController
{

    public function index(){

        $this->view('Admin.login',[
            'title' => 'Login Administrativo'
        ]);

    }

    public function login(){
        if(!empty($_POST)){

            $password = filter_var( $_POST['password'], FILTER_SANITIZE_STRING );
            $email = filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL );
    
            $logged = (new Login)->login($email, $password, new Admins);

            if($logged){
                return Redirect::to('panel');
            }
            
            Flash::add('login', 'Usuário ou senha inválido');

            return Redirect::back();

        }else{

            return Redirect::to('admin');

        }
                
    }

}