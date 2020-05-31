<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$des= $_POST['des']; 
//$id= $_POST['id']; 
$km = ($_POST['km']=='on') ? 1 : 0 ;
$fijo = ($_POST['fijo']=='on') ? 1 : 0 ;
$hora = ($_POST['hora']=='on') ? 1 : 0 ;

	$consulta="select * from servicio where idServicio=6;";
	$resultado=db_query($consulta);

	$consulta2="UPDATE servicio SET ";
	$tex="";
	$param=0;

	foreach($resultado as $fila){

		if ($fila['descripcion']!=$des) {
			$tex=" descripcion='".$des."'";
			$param=1;
		} if ($tex!=0) {
			$tex.=",";
		} if ($fila['km']!=$km) {
			$tex.=" km=".$km;
			$param=2;
		} if ($tex==2) {
			$tex.=",";
		} if ($fila['fijo']!=$fijo) {
			$tex=" fijo=".$fijo;
			$param=3;
		} if ($fila['hora']!=$hora) {
			$tex.=",";
			$tex=" hora=".$hora;
			$param=1;
		} if ($tex!="") {
			$tex.=" where idServicio=6";
			$consulta2.=$tex;
		}
	}
	echo $consulta2;

	//header("Location: index.php?menu=ListadoServicios");

?>