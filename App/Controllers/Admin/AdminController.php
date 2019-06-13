<?php
namespace App\Controllers\Site;
use \App\Controllers\BaseController as BaseController;
use \App\Models\Admin\AdminModel as Admin; 
use \Acme\Classes\Redirect;

class AdminController extends BaseController{

    public function index(){

        $data = ['title' => 'Login - Administrador'];
        $template = $this->twig->loadTemplate('Admin/Panel/login.html');
        $template->display($data); 
        
    }

    public function login(){
       
        if( $_SESSION['REQUEST_METHOD'] == 'POST' ):

            /**
             * limpar o formulario
             */
            $password =  isset($_POST['password']) ? $_POST['password'] : '' ;
            $email = isset($_POST['email'])? $_POST['email'] : '' ;
            $password = filter_var( $password, FILTER_SANITIZE_STRING );
            $email = filter_var( $email, FILTER_VALIDATE_EMAIL );

            $admin = new Admin();
            $admin->setFields( [ 'tb_admin.email', 'tb_admin.password' ] );
        
            $dataAdminLoged = $admin->login( $email, $password );
            $dataAdminLoged = (array)$dataAdminLoged;
            $pkcount =  is_array($dataAdminLoged) ? count( $dataAdminLoged ) : 0 ;

            if($pkcount > 0){

                session_regenerate_id();
                $_SESSION['AdminLoged'] = true;
                $_SESSION['idAdmin'] = $dataAdminLoged->id;
                $_SESSION['dataAdmin'] = serialize($dataAdminLoged);
    
                Redirect::to('panel');

            }else{
                $data = [
                    'title' => 'Login do Administrador',
                    'erro' => 'Erro tentar fazer login'
                ];
                $template = $this->twig->loadTemplate('Admin/Panel/login.html'); 
                $template->display( $data );
                
            }
        else:
            $this->index();
        endif;  
    }

}