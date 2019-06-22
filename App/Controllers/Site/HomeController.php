<?php
namespace App\Controllers\Site;

use App\Controllers\ContainerController;

class HomeController extends ContainerController
{
    public function index()
    {
        $data = [
            'title' => 'Pagina Inicial'
        ];
        $this->view($data, 'Site.Home.index');
    }
}
