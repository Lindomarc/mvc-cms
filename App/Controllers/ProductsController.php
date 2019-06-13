<?php
namespace App\Controllers\Site;
use \App\Controllers\BaseController as BaseController;
 
class ProductsController extends BaseController{

    public function index(){
        
        $data = ['title' => 'Página de produtos'];
        $template = $this->twig->loadTemplate('Site/Products/index.html');
        $template->display($data); 
        
    }



}