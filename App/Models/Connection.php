<?php
namespace App\Models;
use \App\Classes\Config;

use PDO;

class Connection
{
    public static function connection(){

        $config = Config::load('db');

        $pdo = new PDO("mysql:host={$config->host};dbname={$config->dbname}", $config->username, $config->password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $pdo;

    }  
}