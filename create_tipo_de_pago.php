<?php 

include_once 'config/database.php';
include_once 'objects/tipo_de_pago.php';

$database = new Database();
$db = $database->getConnection();

$m = new Tipo_de_pago($db);

$m->codigo=$_POST['codigo'];
$m->descripcion=$_POST['descripcion'];
$m->estado = "1";

$m->create();


?>