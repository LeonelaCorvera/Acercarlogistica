<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$dni= $_POST['dni'];
$telefono= $_POST['telefono'];
$vehiculo= $_POST['vehiculo'];
$licencia= $_POST['licencia'];
$cedula= $_POST['cedula'];


	$consulta="INSERT INTO chofer(nombre,Apellido,dni,telefono,idVehiculo,licencia,cedula)VALUES('".$nombre."','".$apellido."','".$dni."','".$telefono."','".$vehiculo."', '".$licencia."', '".$cedula."');";
	
	$resultado=db_query($consulta);


	header("Location: principal.php?menu=NuevoChofer");

?>