<?php
namespace App\Controllers\Site;
use \App\Controllers\BaseController as BaseController;

class ContactsController extends BaseController{

    public function index(){

        $data = ['title' => 'Página de contato'];
        $template = $this->twig->loadTemplate('Site/Contacts/index.html');
        $template->display($data); 
        
    }

    public function company(){

        $data = ['title' => 'Página da empresa'];
        $template = $this->twig->loadTemplate('Site/Contacts/company.html');
        $template->display($data); 
        
    }

}