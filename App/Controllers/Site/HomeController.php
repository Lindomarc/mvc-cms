<?php
namespace App\Controllers\Site;
use \App\Controllers\BaseController;
use \App\Models\Site\News;

class HomeController extends BaseController
{

    public function index(){
        
        $news = new News;

        $noticeFound = $news->all();

        $this->view('Site.Home.index',[
            'title' => 'Pagina Inicial',
            'news' => $noticeFound
        ]);
        
    }


}