<?php
namespace App\Controllers\Error;
use \App\Controllers\BaseController as BaseController;

class NotFoundController extends BaseController{
    
    public function index(){
        $data = ['title' => 'Error404'];
        $template = $this->twig->loadTemplate('Error/erro404.html');
        $template->display($data);
    }
    
}