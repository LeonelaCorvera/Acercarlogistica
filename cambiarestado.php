<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

$ids= $_POST['ids'];
$estado= $_POST['estado'];
	

	if ($estado=='ASIGNADO') {

		$consulta="UPDATE viaje SET estado ='".$estado."' , fecha_asignado=now() WHERE idViaje in(".$ids.");";
		$resultado=db_query($consulta);

	} else if ($fila['estado']=='EN CURSO'){

		$consulta="SELECT idChofer FROM chofer c join viaje v on v.Chofer_idChofer=c.idChofer where idViaje in (".$ids.");";
		$choferes=db_query($consulta);

		$consulta2="UPDATE viaje SET estado ='".$estado."' , fecha_encurso=now() WHERE idViaje in(".$ids.");";
		$resultado2=db_query($consulta2);

		$consulta3="UPDATE chofer
				SET disponibilidad = -1,
				fecha_ultima_disponibilidad = now(),
				WHERE idChofer in (".$choferes.");";

		$resultado3=db_query($consulta3);

	} else if ($estado=='FINALIZADO'){

		$consulta="SELECT idChofer FROM chofer c join viaje v on v.Chofer_idChofer=c.idChofer where idViaje in (".$ids.");";
		$choferes=db_query($consulta);

		$consulta2="UPDATE viaje SET estado ='".$estado."' , fecha_finalizado=now() WHERE idViaje in(".$ids.");";
		$resultado2=db_query($consulta2);

		$consulta3="UPDATE chofer
				SET 
				fecha_ultima_disponibilidad = now()
				WHERE idChofer in (".$choferes.");";

		$resultado3=db_query($consulta3);

	} else if ($estado=='EN CURSO'){

		$consulta="SELECT idChofer FROM chofer c join viaje v on v.Chofer_idChofer=c.idChofer where idViaje in (".$ids.");";
		$choferes=db_query($consulta);

		$consulta2="UPDATE viaje SET estado ='".$estado."' WHERE idViaje in(".$ids.");";
		$resultado2=db_query($consulta2);

	}
	


	$resultado=db_query($consulta);

	header("Location: index.php?menu=AsignarSolicitud");

?>
