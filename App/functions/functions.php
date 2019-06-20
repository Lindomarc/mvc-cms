<?php
use App\Classes\Login;
use App\Classes\Flash;
use App\Classes\Redirect;
function dd( $dump ){

    var_dump($dump);
    die();

}

function login($email, $password, Model $model){
    return (new Login)->login($email, $password,  $model);
}

function flash($index, $message){
    return (new Flash())->add($index, $message);
}

function back(){
    return (new Redirect)->back();
}

function redirect($target){
    return (new Redirect)->to($target);
}