<?php
namespace App\Traits;

/**
 * 
 */
trait View
{
    public function view( $view, $data ){

        $template = $this->twig->loadTemplate(str_replace('.','/',ucfirst($view)).'.html');
        return $template->display($data);

    }
}
