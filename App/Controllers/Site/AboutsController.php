<?php
namespace App\Controllers\Site;
use \App\Controllers\BaseController as BaseController;

class AboutsController extends BaseController{

    public function index(){

        $data = ['title' => 'Pagina Inicial'];
        $template = $this->twig->loadTemplate('Site/Contacts/abouts.html');
        $template->display($data); 
        
    }


}