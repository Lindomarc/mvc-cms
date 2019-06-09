<?php 
    use Illuminate\Support\Str as Str;

    $site_url = new Twig_SimpleFunction('site_url', function(){
        return 'http://'.$_SERVER['SERVER_NAME'].':8888';
    });