<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

$patente= $_POST['patente'];
$marca= $_POST['marca'];
$modelo= $_POST['modelo'];
$anio= $_POST['anio'];
$seguro= $_POST['seguro'];
$tipo= $_POST['tipo'];


	$consulta="INSERT INTO vehiculo(patente,marca,modelo,anio,seguroAlDia,idTipoDeVehiculo)VALUES('".$patente."','".$marca."','".$modelo."','".$anio."','".$seguro."',".$tipo.");";
	
	$resultado=db_query($consulta);

	header("Location: index.php?menu=ListadoVehiculos");

?>