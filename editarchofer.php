<?php

include 'funciones\database_min.php';

$id= $_POST['id']; 
$nombre= $_POST['nombre']; 
$apellido= $_POST['apellido']; 
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$vehiculo = $_POST['vehiculo'];
$licencia = $_POST['licencia'];
$cedula = $_POST['cedula'];


	$consulta="select * from chofer where idChofer=".$id.";";
	$resultado=db_query($consulta);


	$consulta2="";
	$cons="UPDATE chofer SET ";
	$tex="";
	$param=0;

	foreach($resultado as $fila){


		if ($fila['nombre']!=$nombre) {
			$tex=" nombre='".$nombre."'";
			$param++;
		} if ($fila['Apellido']!=$apellido) {
			$tex .= ($param==1) ? " ,Apellido='".$apellido."'" : " Apellido='".$apellido."'" ;
			$param++;
		} if ($fila['dni']!=$dni) {
			$tex .= ($param>0) ? " ,dni='".$dni."'" : " dni='".$dni."'" ;
			$param++;
		} if ($fila['telefono']!=$telefono) {
			$tex .= ($param>0) ? " ,telefono='".$telefono."'" : " telefono='".$telefono."'" ;
			$param++;
		} if ($fila['idVehiculo']!=$vehiculo) {
			$tex .= ($param>0) ? " ,idVehiculo='".$vehiculo."'" : " idVehiculo='".$vehiculo."'" ;
			$param++;
		} if ($fila['licencia']!=$licencia) {
			$tex .= ($param>0) ? " ,licencia='".$licencia."'" : " licencia='".$licencia."'" ;
			$param++;
		}if ($fila['cedula']!=$cedula) {
			$tex .= ($param>0) ? " ,cedula='".$cedula."'" : " cedula='".$cedula."'" ;
			$param++;
		} if ($tex!="") {
			$tex.=" where idChofer=".$id;
			$consulta2=$cons.$tex;
		}
	}


	if ($consulta2!="") {
		$resultado2=db_query($consulta2);
	} 


	header("Location: principal.php?menu=ListadoChoferes");

?>