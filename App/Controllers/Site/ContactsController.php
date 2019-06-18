<?php
namespace App\Controllers\Site;
use \App\Controllers\BaseController;
use App\Classes\Redirect;
use \App\Classes\Email;
use \App\Classes\Validator;
use App\Classes\Flash;
use App\Classes\Request;
use App\Models\Admin\Admins;

class ContactsController extends BaseController{

    public function index(){
        $data = ['title' => 'Página de contato'];
        $template = $this->twig->loadTemplate( 'Site/Contacts/index.html' );
        $template->display( $data );
    }

    public function send(){

        if( Request::request('post') ){

            $validate = Validator::validate(function(){
                return Validator::required('email','name','message')
                ->sanitize('name:s','email:s','message:s')
                ->email('email');

            });
            dd($validate);
            die;
 
            if(Validator::failed()){
                return Redirect::back();
            }
            $name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING );
            $email = filter_var( $_POST['email'], FILTER_SANITIZE_STRING );
            $message = filter_var( $_POST['message'], FILTER_SANITIZE_STRING );
            $data = [];
            if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {

                $sendEmail = new Email();
                $sendEmail->setSubject( 'Contato MVC' );
                $sendEmail->setFromFrom( $email );
                $message .= $message . " <br>".date("d/m/Y H:i");
                $sendEmail->setBody( $message );

                if( $sendEmail->sendEmail()){
                    $data = ['message' => 'Enviado e-mail', 'class' => 'success'];
                }else{
                    $data = ['message' => 'erro ao enviar o e-mail', 'class' => 'error'];
                }

            } else {
                $data = ['message' => 'Email é inválido', 'class' => 'error'];
            }

            $template = $this->twig->loadTemplate( 'Site/Contacts/index.html' );
            $template->display( $data ); 
        } else {
            
        }
    }

    public function teste($request)
    {
        dd($request);
    }
}