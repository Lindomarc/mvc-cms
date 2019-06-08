<?php 
/**
 * pegar a url 
 */
$url = \Acme\Classes\Url::getUrl();

/**
 * Carregar o template
 */
$template = new \Acme\Classes\LoadTemplate();
$twig = $template->init(); 

/**
 * Chamar BaseController para pegar os controllers e methods
 */
$baseController = new \App\Controllers\BaseController();
$baseController->setUrl( $url );

/**
 * aqui pega os controllers
 */
$controller = $baseController->getController();
$classController = new $controller();
$classController->setTwig($twig);
/**
 * aqui pegar o method 
 */  
$method = $baseController->getMethod($classController);
$classController->$method();

