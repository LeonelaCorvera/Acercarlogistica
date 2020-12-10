<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

$ids= $_POST['ids'];
$chofer= $_POST['chofer'];

	$consulta="UPDATE viaje SET Chofer_idChofer =".$chofer.",estado ='ASIGNADO' WHERE idViaje in(".$ids.");";
	$resultado=db_query($consulta);

	$consulta2="UPDATE chofer
				SET disponibilidad = -1,
				fecha_ultima_disponibilidad = now()
				WHERE idChofer in ( ".$chofer.");";

	$resultado2=db_query($consulta2);

	header("Location: principal.php?menu=AsignarSolicitud");

?>
