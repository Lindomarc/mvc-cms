<?php 
namespace App\Models;

class appModel extends  \ActiveRecord\Model{
 
    public static function list( $limit = null, $order = null){
        if ($limit != null) {
            return parent::find( 'all', [ 'select' => '*', 'order' => $order, 'limit' => $limit ] );
        }
        return parent::find('all', ['order' => $order]);
    }

    public static function update($id, Array $atrributes){

        $update = parent::find( $id );
        $update->update_atributes ($atrributes );
    }
        
    public static function create(Array $atrributes){
        return parent::create( $atrributes );
    }
    
    public static function delete($id){
        $delete = parent::find($id);
        return $delete->delete();  
    }
    

    public static function where( $field, $value, $type = null, $oder = null ){
        $typeListing = ( $type == null ) ? 'first' : 'all';
        return parent::find($typeListing, ['order' => $order, 'conditions' => [$field. '=?', $value]]);
    }

}