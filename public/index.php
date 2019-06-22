<?php
session_start();
ini_set('display_errors', 1);

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else {

    /**
     * definir as constantes
     */
    define("DEFAULT_CONTROLLER", 'home');
    define("ROOT", dirname(__FILE__));
    
    /**
     * Carregar o sistema
     */
    require "../vendor/autoload.php";
    require "../App/functions/functions.php";
    require "../App/functions/functionsTwig.php";
    require "../bootstrap.php";
}
