<?php

require_once("file2.php");

use xyz as second; 

/**
 * 
 */
class Index
{
	
	function __construct()
	{
		# code...
	}

	function getFile(){
		$obj = new second\abc2();
		$obj->getFile();
	}
}

/**
function checkClassExist($className) {
	$directory = explode("\\", $className);
	return implode(DS, $directory) . '.php' 
}
spl_autoload_register('checkClassExist');
**/

$obIn = new Index();
$obIn->getFile();

