<?php
namespace App\Controllers\Site;
use \App\Controllers\BaseController;
use \App\Models\Site\News;

class HomeController extends BaseController{

    public function index(){
        
        $news = new News;

        dd( $news->all() );


        $data = ['title' => 'Pagina Inicial', 'news' => $news];
        $template = $this->twig->loadTemplate('Site/Home/index.html');
        $template->display($data); 
        
    }


}