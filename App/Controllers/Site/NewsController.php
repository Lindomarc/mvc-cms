<?php
namespace App\Controllers\Site;
use \App\Controllers\ContainerController;
use \App\Models\Site\News;

class NewsController extends ContainerController{

    
    public function listNews(){

        /**
         * Listar noticias
         */
        $news = News::all();
        $news_array = [];
        foreach ($news as $new) {
            $news_array[]= $new->to_array();
        }

        echo json_encode( $news_array );

    }
}