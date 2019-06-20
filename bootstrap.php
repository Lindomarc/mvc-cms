<?php 

/**
 * Carregar o template
 */
$template = new App\Classes\LoadTemplate();
$twig = $template->init();

/**
 * Carregar funções do twig
 */
$twig->addFunction($site_url);
$twig->addFunction($message);
$twig->addGlobal("session", $_SESSION);

/**
 * definir timezone    
 */
$twig->getExtension(\Twig\Extension\CoreExtension::class)->setTimezone('America/Sao_Paulo');
$twig->getExtension(\Twig\Extension\CoreExtension::class)->setDateFormat('d/m/Y', '%d days');


App\Classes\App::bind('twig',$twig);

try {


  /**
    * Chamar Controller para pegar os controllers e methods
  */
  $controller = new App\Controllers\Controller();

  /**
   * pega o controllers
   */
  $getController = $controller->getController();
  $classController = new $getController();


  /**
   * pegar o method 
   */  
  $method = $controller->getMethod( $classController );
  $parameter = $controller->getParameter();
  $classController->$method($parameter);

} catch (Throwable $e) {

  $environment = App\Classes\Config::load('environment');

  if($environment->type == '0'){

    dd($e->getMessage()." no arquivo ".$e->getFile()." na linha ".$e->getLine());

  }else if($environment->type == '2'){

    //TODO: gerar log de erro oculto para depuração
    $erro = new App\Controllers\Errors\ErrorsController; 
    $erro->index();

  }
     
}