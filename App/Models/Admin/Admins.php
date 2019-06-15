<?php 
namespace App\Models\Admin;

class Admins extends \App\Models\AppModel{
    
    use \Acme\Traits\LoginTrait;    
    // static $table_name = 'admin';

    public function defaultObject () {

        $obj = new stdClass();

        $obj->id = null;
        $obj->name = '';
        $obj->password = '';
        $obj->created_at = '';
        $obj->updated_at = '';

        return $obj;
    }

}