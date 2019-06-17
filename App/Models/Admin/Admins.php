<?php 
namespace App\Models\Admin;
use \App\Models\Model;
class Admins extends Model{
    
    protected $table = 'admins';

    public $logged = 'admin_logged';

    public $data = 'admin_data';
}