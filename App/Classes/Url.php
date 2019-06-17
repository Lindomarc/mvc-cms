<?php
namespace App\Classes;
class Url
{
    public static function getUrl() {

		return parse_url( rtrim($_SERVER['REQUEST_URI'], '/'), PHP_URL_PATH );
	}

	public static function getQueryString(){
		
		$query = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
		$queryString = ( isset( $query['query'] ) ) ? $query['query']: null;
		
		return $queryString;
	}

	public static function haveLastPage(){
		if( isset( $_SERVER['HTTP_REFERER'] ) && !empty( $_SERVER['HTTP_REFERER'] ) ){
			return true;
		}
	}

	public static function getAllUri(){
		return $_SERVER['REQUEST_URI'];
	}

	public static function getLastPage(){
		if ( self::haveLastPage() ) {
			$referer = explode('/', $_SERVER['HTTP_REFERER']);
			return $referer = $referer[3];

		}
	}
}