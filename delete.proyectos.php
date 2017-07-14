<?php 

	include_once 'config/database.php';
	include_once 'objects/proyecto.php';

	$database = new Database();
	$db = $database->getConnection();

	$proyecto = new Proyecto($db);

	$proyecto->id=$_POST['id'];
	$proyecto->estado="0";
	$proyecto->delete();	

?>
