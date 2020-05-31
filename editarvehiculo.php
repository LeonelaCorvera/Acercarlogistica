<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$id= $_POST['id']; 
$patente= $_POST['patente']; 
$marca= $_POST['marca']; 
$modelo = $_POST['modelo'];
$anio = $_POST['anio'];
$tipo = $_POST['tipo'];
$seguro = ($_POST['seguro']=='Si') ? 1 : 0 ;


	$consulta="select * from vehiculo where idVehiculo=".$id.";";
	$resultado=db_query($consulta);


	$consulta2="";
	$cons="UPDATE vehiculo SET ";
	$tex="";
	$param=0;

	foreach($resultado as $fila){


		if ($fila['patente']!=$patente) {
			$tex=" patente='".$patente."'";
			$param=1;
		} if ($tex!=0) {
			$tex.=",";
		} if ($fila['marca']!=$marca) {
			$tex.=" marca=".$marca;
			$param=2;
		} if ($tex==2) {
			$tex.=",";
		} if ($fila['modelo']!=$modelo) {
			$tex=" modelo=".$modelo;
			$param=3;
		}if ($tex==2) {
			$tex.=",";
		}if ($fila['idTipoDeVehiculo']!=$tipo) {
			$tex=" tipo=".$tipo;
			$param=3;
		}if ($tex==2) {
			$tex.=",";
		}if ($fila['marca']!=$marca) {
			$tex.=" marca=".$marca;
			$param=2;
		} if ($tex==2) {
			$tex.=",";
		}if ($fila['anio']!=$anio) {
			$tex.=",";
			$tex=" anio=".$anio;
			$param=1;
		} if ($tex!="") {
			$tex.=" where idVehiculo=".$id;
			$consulta2=$cons.$tex;
		}
	}
var_dump($consulta2);

	if ($consulta2!="") {
		$resultado2=db_query($consulta2);
	} 


	header("Location: index.php?menu=ListadoVehiculos");

?>