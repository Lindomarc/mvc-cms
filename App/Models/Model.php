<?php 
namespace App\Models;
use \App\Models\Connection;
use \App\Traits\CollectionDb;
// use \App\Traits\PersistDb;

abstract class Model 
{   
    /**
     * Collection  - select
     * Persist - Registrando, Atualizando.
     */
    use CollectionDb;

    public $connection;

    public function __construct() {
        $this->connection = Connection::connection();
    }

}