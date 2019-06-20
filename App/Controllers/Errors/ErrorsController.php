<?php 
namespace App\Controllers\Errors;

use \App\Controllers\ContainerController;

class ErrorsController extends ContainerController
{
    public function index(){
                
        $this->view('Error.errorIntern',[
            'title' => 'Error'
        ]);
        
    }
}