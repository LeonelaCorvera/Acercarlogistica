<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

$des= $_POST['lista'];
$general = ($_POST['general']=='on') ? 1 : 0 ;

	$consulta="INSERT INTO acercarlogistca.listadeprecios(descripcion,esGeneral)VALUES('".$des."',".$general.");";
	$resultado=db_query($consulta);

	header("Location: index.php?menu=ListaPrecios");

?>