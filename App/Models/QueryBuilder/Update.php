<?php
namespace App\Models\QueryBuilder;

class Update
{
    private $sql;
    private $data;
    private $where;
    private $table;
    
    public function __construct($data, $where, $table){
        
        $this->data = (array)$data;
        $this->table = $table;
        $this->where = $where;

    }

    public function create(){
        
        $this->sql = "UPDATE {$this->table} SET";

        foreach ($this->data as $field => $value) {
            $this->sql .= " {$field} = :{$field},";
        }

        $this->sql = rtrim($this->sql, ',');


        $fieldWhere = (array_keys($this->where));

        $this->sql .= " WHERE {$fieldWhere[0]} = :{$fieldWhere[0]}";
 
        return $this;
    }

    public function save(){
        
        $connection = \App\Classes\App::get('connection');

        $update = $connection->prepare($this->sql);

        $data = array_merge($this->data, $this->where);

        $update->execute($data);
    
        return $update->rowCount();           
    

    }
}