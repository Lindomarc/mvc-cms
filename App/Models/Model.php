<?php 
namespace App\Models;

use App\Models\Connection;

abstract class Model 
{
    public $connection;

    public function __construct() {
        $this->connection = Connection::connection();
    }
    public function all(){
        
        $sql =  "select * from {$this->table}";

        $all = $this->connection->prepare($sql);

        $all->execute(); 

        return $all->fetchAll();
    }
}