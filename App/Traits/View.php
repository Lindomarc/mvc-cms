<?php
namespace App\Traits;
use App\Classes\App;
/**
 * 
 */
trait View
{
    public function view($data, $view = ''){

        $twig =  App::get('twig');

        if (!empty($view)){
            $view =  str_replace('.','/',$view).'.ctp';
        }

        $template = $twig->loadTemplate($view);

        return $template->display($data);

    }
}
