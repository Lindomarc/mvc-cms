<?php
namespace App\Controllers\Site;

use App\Controllers\ContainerController;

class HomeController extends ContainerController
{

    public function index(){
        
        $this->view('Site.Home.index',[
            'title' => 'Pagina Inicial'
        ]);
        
    }



}