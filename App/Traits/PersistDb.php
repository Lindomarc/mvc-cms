<?php
namespace App\Traits;
use  App\Models\QueryBuilder\Insert;
use  App\Models\QueryBuilder\Update;
trait PersistDb
{
    public function insert($data){
        return (new Insert($data, $this->table))->create()->save();
    }
    
    public function update($data, array $where){

      if(!is_array($where)){
        throw new \Exception("o whare do update precisa ser um array");
        
      }
      return (new Update($data, $where, $this->table))->create()->save();

    }
}