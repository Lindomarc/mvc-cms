<?php
namespace App\Controllers\Site;
use \App\Controllers\BaseController as BaseController;
use \App\Models\Site\NewsModel as News;

class HomeController extends BaseController{

    public function index(){

        /**
         * Listar noticias
         */
        $news = News::all();
        dump($news);
        $data = ['title' => 'Pagina Inicial', 'news' => $news];
        $template = $this->twig->loadTemplate('Site/Home/index.html');
        $template->display($data); 
        
    }


}