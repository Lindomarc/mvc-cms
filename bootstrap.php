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

/**
 * Chamar BaseController para pegar os controllers e methods
 */
$baseController = new App\Controllers\BaseController();

/**
 * pega o controllers
 */
$controller = $baseController->getController();
$classController = new $controller();
$classController->setTwig( $twig );

try {

  /**
   * pegar o method 
   */  
  $method = $baseController->getMethod( $classController );
  $parameter = $baseController->getParameter();
  $classController->$method($parameter);

} catch (Throwable $e) {

  echo($e->getMessage()."\n".$e->getFile()."\n".$e->getLine());

}