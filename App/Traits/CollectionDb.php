<?php
namespace App\Traits;

trait CollectionDb
{
    use Paginate;

    protected $paginate;
    protected $search;
    protected $binds = [];
    protected $pdoStatement;
    protected $sql;
    protected $table;

    public function paginate($perPage){
        $this->perPage = $perPage;

        $list = $this->connection->prepare($this->sql);
        $this->bindValues($list);
        $this->pdoStatement = $list; 
        $this->sql .= $this->sqlPaginate();
        return $this;

    } 

    public function get(){
        $list = $this->bindExecute();
        return $list->fetchAll();
    }

    public function first(){
        $list = $this->bindExecute();
        return $list->fetch();
    }

    private function bindValues($list){

        if(!empty($this->binds)){

            foreach ($this->binds as $key => $value) {

                $list->bindValue(":{$key}", $value);
                
            }
            
        }
    }

    private function bindExecute(){
        if(!isset($this->sql)){
            throw new Exception('Use o "$this->sql"');
        }

        $list = $this->connection->prepare($this->sql);
        $this->bindValues($list);
        $list->execute();

        return $list;
    }

    public function select($fields){
        $this->sql = "select {$fields} from {$this->table}";
        return $this;
    }

    public function all(){

        $this->sql =  "select * from {$this->table}";


        return $this->fetchAll();
    }

    public function find($field, $value){

        $this->sql = "select * from {$this->table} where {$field} = :value";
        $this->binds = [
            'value' => $value
        ];
        return $this;
    }

}