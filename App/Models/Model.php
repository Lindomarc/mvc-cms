<?php 
namespace App\Models;
use \App\Models\Connection;
use \App\Traits\CollectionDb;
use \App\Traits\PersistDb;
use \App\Classes\App;


abstract class Model 
{   
    /**
     * Collection  - select
     * Persist - Registrando, Atualizando.
     */
    use CollectionDb, PersistDb;

    public $connection;

    public function __construct() {
        
        $this->connection = Connection::connection();

        App::bind('connection',$this->connection);
    }

}