<?php
error_reporting ( - 1 );

require_once 'function.php';

use src\service as service;

/**
 */
final class Run {
	
	/**
	 */
	public static $instance = NULL;
	
	/**
	 */
	private function __construct() {
	}
	
	/**
	 */
	public static function start() {
		if (self::$instance == null) {
			self::$instance = new service\Implement ();
		}
		return self::$instance;
	}
}

$app = Run::start ();
$app->getName ();