<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

$des= $_POST['des']; 



	$consulta="INSERT INTO servicio(descripcion)VALUES('".$des."');";
	$resultado=db_query($consulta);

	header("Location: principal.php?menu=ListadoServicios");

?>