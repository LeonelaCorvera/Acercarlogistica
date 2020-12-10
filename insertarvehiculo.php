<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

$patente= $_POST['patente'];
$marca= $_POST['marca'];
$modelo= $_POST['modelo'];
$anio= $_POST['anio'];
$tipo= $_POST['tipo'];
$vtv= $_POST['vtv'];
$pagopatente= $_POST['pagopatente'];
$pagoseguro= $_POST['pagoseguro'];


	$consulta="INSERT INTO vehiculo(patente,marca,modelo,anio,idTipoDeVehiculo,pagopatente,seguro,vtv)VALUES('".$patente."','".$marca."','".$modelo."','".$anio."','".$seguro."',".$tipo.", '".$pagopatente."', '".$pagoseguro."', '".$vtv."');";
	
	$resultado=db_query($consulta);

	header("Location: principal.php?menu=ListadoVehiculos");

?>