<?php
namespace App\Controllers\Site;
use \App\Controllers\ContainerController;
use \App\Models\Site\News;

class NewsController extends ContainerController{

    
    public function index(){

        $notice = new News;
        $notices = $notice->list()->paginate(10)->get();

        $data = [
            'title' => 'Página Noticias',
            'notices' => $notices,
            'links' => $notice->links()
        ];


        $this->view(
            'Site.News.index',                    
            $data
        );
    }
}