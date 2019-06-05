<?php 

namespace Acme\Classes;

class LoadTemplate{
    private $twig;
    private $loader;  
    
    private function loader(){
        $this->loader = new \Twig_Loader_Filesystem(ROOT.'/../App/Views');
        return $this->loader;
    }

    public function init(){
        $this->twig = new \Twig_Enviroment( $this->loader(),[
            'debug' => true,
            'cache' => ROOT.'/../Cache',
            'auto_reload' => true
        ]);
        return $this->twig;
    }
}
