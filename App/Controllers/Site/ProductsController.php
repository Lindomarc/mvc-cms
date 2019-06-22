<?php
namespace App\Controllers\Site;

use \App\Controllers\ContainerController;

class ProductsController extends ContainerController
{
    public function index()
    {
        $data = ['title' => 'Página de produtos'];
        $this->view($data, 'Site.Products.index');
    }
}
