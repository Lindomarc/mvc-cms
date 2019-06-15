<?php 
namespace App\Models;

class AppModel extends  \ActiveRecord\Model{
 
    public static function listing( $limit = null, $order = null ){
        if ( $limit != null ) {
            return parent::find( 'all', [ 'select' => '*', 'order' => $order, 'limit' => $limit ] );
        }
        return parent::find( 'all', ['order' => $order] );
    }

    public static function updating( $id,  Array $atrributes ){
        $update = parent::find( $id );
        $update->update_atributes ( $atrributes );
    }
        
    public static function creating( Array  $attributes, $validate = true, $guard_attributes = true ){
        return parent::create(  $attributes, $validate, $guard_attributes );
    }

    public static function deleting( $id ){
        $delete = parent::find( $id );
        return $delete->delete();  
    }
    
    public static function where( $field, $value, $type = null, $order = null ){
        $typeListing = ( $type == null ) ? 'first' : 'all';
        return parent::find( $typeListing, ['order' => $order, 'conditions' => [$field. '=?', $value]] );
    }
}