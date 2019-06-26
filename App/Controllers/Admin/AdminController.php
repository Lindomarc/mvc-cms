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
    public function __construct() {
      
    }
    
    public function index()
    {
        
        $data = ['title' => 'Painel de Controle'];
        //TODO: Melhorar isso
        $this->view($data, 'Admin.index');
    }
    
    public function add() {
        $data = ['title' => 'Adicionar Administradores'];
        $this->view($data, 'Admin.add');
    }
    
    public function list(){
        
        $find = new Listing;
        $admins = $find->list(new Admin, AdminService);
        
        $data = [
            'title'     => 'Lista de Administradores',
            'admins'    => $admins,
            'links'     => $find->links()
            ];
        $this->view($data, 'Admin.list');
    }
    
    public function edit(){
        
    }
    
    public function show(){
        
    }
    
    public function store(){
        
    }



    public function login()
    {
        
        $data = [
            'title' => 'Login Administrativo'
        ];
        
        $this->view($data, 'Admin.login');
        
        if (!empty($_POST)) {
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    
            $logged = (new Login)->login($email, $password, new Admins);

            if ($logged) {
                return Redirect::to('admin');
            }
            
            Flash::add('login', 'Usuário ou senha inválido');

            return Redirect::back();
        } else {
            return Redirect::to('login');
        }
    }
}
