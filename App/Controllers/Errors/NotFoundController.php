<?php
namespace App\Controllers\Errors;

use \App\Controllers\ContainerController;

class NotFoundController extends ContainerController
{
    public function index()
    {
        $data = ['title' => 'Error'];
        $this->view('Errors.error404', $data);
    }
}
