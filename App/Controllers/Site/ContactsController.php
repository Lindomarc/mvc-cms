<?php
namespace App\Controllers\Site;
use \App\Controllers\ContainerController;
use App\Classes\Redirect;
use \App\Classes\Email;
use \App\Classes\Config;
use \App\Classes\SendEmail;
use \App\Classes\Validator;
use App\Classes\Flash;
use App\Classes\Request;
use App\Models\Admin\Admins;

class ContactsController extends ContainerController{

    public function index(){
        $this->view('Site.Contacts.index',[
            'title' => 'Página de contato'
        ]);

    }

    public function send(){

        if( Request::request('post') ){

            $validate = Validator::validate(function(){
                return Validator::required('email','name','message')
                ->sanitize('name:s','email:s','message:s')
                ->email('email');
            });

            if(Validator::failed()){
                return Redirect::back();
            }

            $SendEmail = new SendEmail(new Email());
            $SendEmail->data([
                'subject'   =>  'Contato',
                'from'      =>  $validate->email,
                'to'        =>  Config::$config['site']['email'],
                'message'   =>  $validate->message,
            ]);

            if($SendEmail->send()){
       
                Flash('message_email','Email enviado com sucesso!!!');
                return back();
            }

            Flash('message_email','Erro ao enviar email');
            back();
        }

    }

}