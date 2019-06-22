<?php
namespace App\Controllers\Admin;

use \App\Controllers\ContainerController;

class PanelController extends ContainerController
{
    public function index()
    {
        $data = [
            'title' => 'Painel Administrativo'
        ];
        
        $this->view($data, 'Admin.Layout.default');
    }
}