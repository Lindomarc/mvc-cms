<?php
namespace App\Controllers\Errors;

use \App\Controllers\ContainerController;

class ErrorsController extends ContainerController
{
    public function index()
    {
        $data = [
            'title' => 'Error'
        ];

        $this->view($data, 'Error.errorIntern');
    }
}
