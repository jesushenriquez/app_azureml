<?php
require_once 'bd/connection.php';
require_once 'controller/des_controller.php';

$controller = new des_controller();

if( !empty( $_REQUEST['m'])){
	$metodo = $_REQUEST['m'];
	if(method_exists($controller, $metodo)){
		$controller->$metodo();
	} else {
		$controller->index_forest();
	}
} else {
	$controller->index_forest();
}

?>