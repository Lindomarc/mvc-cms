<?php 
namespace App\Models\Admin;

class AdminModel extends \ActiveRecord\Model{
    
    use \Acme\Traits\LoginTrait;    
    static $table_name = 'tb_admin';

}