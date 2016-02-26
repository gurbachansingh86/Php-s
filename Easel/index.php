<?php
error_reporting ( - 1 );

use src\Index as srIndex;

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
			self::$instance = new srIndex ();
		}
		return self::$instance;
	}
}

// function autoload($className) {
// 	$className = ltrim ( $className, '\\' );
// 	$fileName = '';
// 	$namespace = '';
// 	if ($lastNsPos = strrpos ( $className, '\\' )) {
// 		$namespace = substr ( $className, 0, $lastNsPos );
// 		$className = substr ( $className, $lastNsPos + 1 );
// 		$fileName = str_replace ( '\\', DIRECTORY_SEPARATOR, $namespace ) . DIRECTORY_SEPARATOR;
// 	}
// 	$fileName .= str_replace ( '_', DIRECTORY_SEPARATOR, $className ) . '.php';
	
// 	require $fileName;
// }

// spl_autoload_register ( 'autoload' );

$app = Run::start ();
$app->getName ();