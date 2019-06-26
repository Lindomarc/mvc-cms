<?php 
    use App\Classes\Flash;
use Twig\TwigFunction;

$site_url = new Twig\TwigFunction('site_url', function(){
        return 'http://'.$_SERVER['SERVER_NAME'];
    });

    $message = new Twig\TwigFunction('message', function($index){
        return Flash::get($index);
    });

    $message_email = new Twig\TwigFunction('message_email', function($index){
        return Flash::get($index);
    });