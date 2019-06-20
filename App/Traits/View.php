<?php
namespace App\Traits;
use App\Classes\App;
/**
 * 
 */
trait View
{
    public function view($view, $data){

        $twig =  App::get('twig');
        $template = $twig->loadTemplate(str_replace('.','/',$view).'.html');
        return $template->display($data);

    }
}
