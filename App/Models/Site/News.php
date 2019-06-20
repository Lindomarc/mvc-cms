<?php
namespace App\Models\Site;
use \App\Models\Model;

class News extends  Model{

    public  $table = 'news';
    
    protected $sql;

    public function list(){
        $this->sql = "select * from {$this->table}";
        return $this;
    }

}