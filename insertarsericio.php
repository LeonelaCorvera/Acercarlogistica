<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$des= $_POST['servicio'];


	$consulta="INSERT INTO acercarlogistca.servicio(descripcion)VALUES('".$des."');";
	$resultado=db_query($consulta);


	echo "<script type='text/javascript'>alert('holA');</script>";

	header("Location: index.php?menu=ListadoServicios");

?>