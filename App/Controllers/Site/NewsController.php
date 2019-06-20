<?php
namespace App\Controllers\Site;
use \App\Controllers\ContainerController;
use \App\Models\Site\News;
use \App\Classes\Validator;


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

    public function store(){

        $validate = Validator::validate(function(){
            return Validator::required('title','slug')
            ->sanitize('title:s','slug:s');
        });
        
        $notice = new News;
        $register = $notice->insert($validate);
        dd($register);
    }

}