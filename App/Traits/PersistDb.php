<?php
namespace App\Traits;
use  App\Models\QueryBuilder\Insert;
trait PersistDb
{
    public function insert($data){
        return (new Insert($data, $this->table))->create()->save();
    }
    
    public function update(){
      //  return (new Update)->create()->save();

    }
}