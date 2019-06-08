<?php
namespace Acme\Classes;
class Url{
    public static function getUrl() {
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
}