<?php 
    use App\Classes\Flash;
    $site_url = new Twig_SimpleFunction('site_url', function(){
        return 'http://'.$_SERVER['SERVER_NAME'].':8888';
    });

    $message = new Twig_SimpleFunction('message', function($index){
        return Flash::get($index);
    });

    $message_email = new Twig_SimpleFunction('message_email', function($index){
        return Flash::get($index);
    });
    