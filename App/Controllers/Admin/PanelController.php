<?php
namespace App\Controllers\Site;
use \App\Controllers\BaseController as BaseController;
use \App\Models\Admin\AdminModel as Admin; 
use \App\Classes\Redirect;

class PanelController extends BaseController{

    public function index(){
dump($_SESSION);
        $data = ['title' => 'Paine de controle - Administrador'];
        $template = $this->twig->loadTemplate('Admin/Panel/panel.html');
        $template->display($data); 
        
    }

}
