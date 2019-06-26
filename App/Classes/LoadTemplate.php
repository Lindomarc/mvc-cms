<?php 
namespace App\Classes;

use Twig;

class LoadTemplate{

    private $twig;
    private $loader;  
    
    private function loader(){

        $this->loader = new Twig\Loader\FilesystemLoader( '../App/Views' );
        return $this->loader;
    }

    public function init(){

        $this->twig = new Twig\Environment( $this->loader(),[
            'debug' => true,
           // 'cache' => ROOT.'../Cache',
            'auto_reload' => true
        ]);
        //var_dump( $this->twig );

        return $this->twig;

    }
}
