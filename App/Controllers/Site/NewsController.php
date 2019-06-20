<?php
namespace App\Controllers\Site;
use \App\Controllers\ContainerController;
use \App\Models\Site\News;

class NewsController extends ContainerController{

    
    public function index(){


        $News = new News;
        $noticiasEncontradas = $News->list()->get();
        dd($noticiasEncontradas);


    }
}