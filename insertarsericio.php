<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$des= $_POST['des']; 

$km = ($_POST['km']=='on') ? 1 : 0 ;
$fijo = ($_POST['fijo']=='on') ? 1 : 0 ;
$hora = ($_POST['hora']=='on') ? 1 : 0 ;

	$consulta="INSERT INTO servicio(descripcion,km,fijo,hora)VALUES('".$des."',".$km.",".$fijo.",".$hora.");";
	$resultado=db_query($consulta);

	header("Location: index.php?menu=ListadoServicios");

?>