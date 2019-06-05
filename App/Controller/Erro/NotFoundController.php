<?php

namespace App\Controllers\Erro;

class NotFoundController extends \App\Controllers\BaseController{
    
    public function index(){
        $data = ['title' => 'Error404'];
        $template = $this->twig->loadTemplate('Erro/erro404.html');
        $template->display($data);
    }
}