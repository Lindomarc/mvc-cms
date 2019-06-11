<?php
namespace App\Config;

class EmailConfig {

	public $smtp = array(
		'from' => array('leendomar@gmail.com' => 'My Site'),
		'host' => 'smtp.gmail.com',
		'port' => 587,
		'timeout' => 30,
		'username' => 'leendomar@gmail.com',
		'password' => 'saLgado10',
		'charset' => 'utf-8',
	);

	public $site = array(
		'from' => 'leendomar@gmail.com',
		'sender' => null,
		'to' => null,
		'cc' => null,
		'bcc' => null,
		'replyTo' => null,
		'readReceipt' => null,
		'returnPath' => null,
		'messageId' => true,
		'subject' => null,
		'message' => null,
		'headers' => null,
		'viewRender' => null,
		'template' => false,
		'layout' => false,
		'viewVars' => null,
		'attachments' => null,
		'emailFormat' => null,
		'transport' => 'Smtp',
		'host' => 'localhost',
		'port' => 25,
		'timeout' => 30,
		'username' => 'user',
		'password' => 'secret',
		'client' => null,
		'log' => true,
		//'charset' => 'utf-8',
		//'headerCharset' => 'utf-8',
	);

}