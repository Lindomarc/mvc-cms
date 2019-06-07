<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else { 

       session_start();
     ini_set('display_errors', 1);

    /**
     * definir as constantes
     */

    define("DEFAULT_CONTROLLER", 'home');
    define("ROOT", dirname(__FILE__));
    
    /**
     * Carregar o sistema
     */
    require ROOT."/vendor/autoload.php";
    require ROOT."/App/Functions/functions.php";
    require ROOT."/App/Functions/functionsTwig.php";
    require ROOT."/connection.php";
    require ROOT."/bootstrap.php";
    
    
}
?>