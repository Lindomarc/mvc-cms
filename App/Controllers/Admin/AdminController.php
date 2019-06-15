<?php
namespace App\Controllers\Site;
use \App\Controllers\BaseController as BaseController;
use \App\Models\Admin\Admins as Admin; 
use \App\Classes\Redirect;
use \App\Classes\Hash;
class AdminController extends BaseController{

    use \App\Traits\LoginTrait;    

    public function index(){
        
        $data = ['title' => 'Login - Administrador'];
        $template = $this->twig->loadTemplate('Admin/Panel/login.html');
        $template->display($data); 
        
    }

    public function login(){
        if( !empty($_POST) ):

            $this->setDb( new Admin() );

            /**
             * limpar o formulario
             */ 
            $password =  isset($_POST['password']) ? $_POST['password'] : '' ;
            $email = isset($_POST['email'])? $_POST['email'] : '' ;
            $password = filter_var( $password, FILTER_SANITIZE_STRING );
            $email = filter_var( $email, FILTER_VALIDATE_EMAIL );

            $dataAuth = Admin::where( 'admins.email', $email );

            if(count( (array)$dataAuth ) == 0 ){

                $_SESSION['erro'] = 'Usuário ou senha inválidos';
                Redirect::to( 'admin' );
            
            } else {
                
                $senhaEncrited = Hash::makePassword( $password, $dataAuth->salt );
                
                if( Hash::validatePassword( $password, $dataAuth->password )){

                    $this->setFields( [ 'admins.email', 'admins.password' ] );

                    $dataAdminLoged = $this->loginSystem( $email, $senhaEncrited );

                    $pkcount =  is_array((array)$dataAdminLoged) ? count( (array)$dataAdminLoged ) : 0 ;
        

                    if($pkcount > 0){

                        session_regenerate_id();
                        $_SESSION['user']['AdminLoged'] = true;
                        $_SESSION['user']['idAdmin'] = $dataAdminLoged->id;
                        $_SESSION['user']['dataAdmin'] = serialize($dataAdminLoged);
            
                        Redirect::to('panel');

                    }else{
                        $data = [
                            'title' => 'Login do Administrador',
                            'erro' => 'Erro tentar fazer login'
                        ];
                        
                    }
        
                }else{

                    $data = [
                        'title' => 'Login do Administrador',
                        'erro' => 'Erro tentar fazer login'
                    ];
                }
                
            }
        else:
            $this->index();
        endif;  
    }

}