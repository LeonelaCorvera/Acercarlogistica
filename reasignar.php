<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

$ids= $_POST['ids'];
$chofer= $_POST['chofer'];

	$consulta="UPDATE viaje SET Chofer_idChofer =".$chofer." WHERE idViaje in(".$ids.");";
	$resultado=db_query($consulta);

	header("Location: principal.php?menu=AsignarSolicitud");

?>
