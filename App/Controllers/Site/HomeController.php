<?php
namespace App\Controllers\Site;
use \App\Controllers\BaseController;
use \App\Models\Site\News;BaseController

class HomeController extends BaseController{

    public function index(){
        
        $news = new News;

        $noticeFound = $news->all();

        $this->view('site.home',[
            'title' => 'Pagina Inicial',
            'news' => $noticeFound
        ]);
 
        
    }


}