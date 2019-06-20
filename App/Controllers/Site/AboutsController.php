<?php
namespace App\Controllers\Site;
use \App\Controllers\ContainerController;

class AboutsController extends ContainerController{
    
    public function index(){

        $data = ['title' => 'Pagina Inicial'];
        $this->view('Site.Contacts.abouts', $data);
        
    }


}