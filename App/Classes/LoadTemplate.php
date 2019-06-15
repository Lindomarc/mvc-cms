<?php 
namespace App\Classes;
class LoadTemplate{

    private $twig;
    private $loader;  
    
    private function loader(){

        $this->loader = new \Twig_Loader_Filesystem( '../App/Views' );
        return $this->loader;
    }

    public function init(){

        //$this->loader = new \Twig_Loader_Filesystem(ROOT.'/App/Views');
        $this->twig = new \Twig_Environment( $this->loader(),[
            'debug' => true,
           // 'cache' => ROOT.'../Cache',
            'auto_reload' => true
        ]);
        //var_dump( $this->twig );

        return $this->twig;

    }
}
