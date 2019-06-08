<?php
namespace App\Controllers\Site;
use \App\Controllers\BaseController as BaseController;

class HomeController extends BaseController{

    public function index(){

        $data = ['title' => 'Pagina Inicial'];
        $template = $this->twig->loadTemplate('Home/index.html');
        $template->display($data); 
        
    }

    public function products(){
        dump(['0' => 'teste']);
    }

}