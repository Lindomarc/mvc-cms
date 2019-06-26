<?php
namespace App\Traits;
use App\Classes\App;

trait View
{
    private $extension = '.phtml';

    private $layout;

    /**
     * @param $data
     * @param string $view
     * @return mixed
     * @throws \Exception
     */
    public function view($data, $view = ''){

        $twig =  App::get('twig');

        if (!empty($view)){
            $view =  str_replace('.','/',$view).$this->extension;
        }
        $template = $twig->loadTemplate($view);
//        dd($template);

        return $template->display($data);

    }
}
