<?php

include 'funciones\database_min.php';

$fecha_carga_desde = ($_POST['fecha_carga_desde'])!=""? $_POST['fecha_carga_desde'] : "0000-00-00" ;
$fecha_carga_hasta = ($_POST['fecha_carga_hasta'])!=""? $_POST['fecha_carga_hasta'] : "0000-00-00" ;
$cliente = (isset($_POST['cliente'])) ? $_POST['cliente'] : "0" ;
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : "0" ;
$chofer = (isset($_POST['chofer'])) ? $_POST['chofer'] : "0" ;
$comisionpaga = (isset($_POST['comisionpaga'])) ? $_POST['comisionpaga'] : "3" ;
$servicio = (isset($_POST['servicio'])) ? $_POST['servicio'] : "0" ;
$tipo_vehiculo = (isset($_POST['tipo_vehiculo'])) ? $_POST['tipo_vehiculo'] : "0" ;
$fecha_viaje = ($_POST['fecha_viaje'])!="" ? $_POST['fecha_viaje'] : "0000-00-00" ;
$fecha_fin = (isset($_POST['fecha_fin'])) ? $_POST['fecha_fin'] : "0000-00-00" ;
$fecha_asignado = (isset($_POST['fecha_asignado'])) ? $_POST['fecha_asignado'] : "0000-00-00" ;
$fecha_curso = (isset($_POST['fecha_curso'])) ? $_POST['fecha_curso'] : "0000-00-00" ;

$aux="SELECT v.*, 
				s.descripcion as servicioDes, 
				ch.nombre, 
				ch.Apellido, 
				cl.razon_social, 
				tv.descripcion as tipoVehiculo_des  
				FROM viaje v 
				left join servicio s on v.Servicio_idServicio=s.idServicio 
				left join chofer ch on v.Chofer_idChofer=ch.idChofer 
				left join cliente cl on v.idClliente=cl.idcliente
				left join tipodevehiculo tv on v.tipoVehiculo=tv.idTipoDeVehiculo ";
$consulta="";
$param=0;


if($fecha_carga_desde!="0000-00-00"){
	
	$consulta.="fecha_carga>'".$fecha_carga_desde."' ";
	$param=1;


}
if($fecha_carga_hasta!="0000-00-00"){
	
	$param ==1 ? $consulta.=" and fecha_carga<'".$fecha_carga_hasta."' " : $consulta.=" fecha_carga<'".$fecha_carga_hasta."' ";
	$param=$param+1;
}
if($cliente!="0"){
	
	$param >0 ? $consulta.=" and idClliente=".$cliente : $consulta.=" idClliente=".$cliente;
	$param=$param+1;
}
if($estado!="0"){
	
	$param >0 ? $consulta.=" and v.estado='".$estado."'" : $consulta.=" v.estado='".$estado."'";
	$param=$param+1;
}	
if($chofer!="0"){
	
	$param >0 ? $consulta.=" and Chofer_idChofer=".$chofer : $consulta.=" Chofer_idChofer=".$chofer;
	$param=$param+1;
}
if($servicio!="0"){
	
	$param >0 ? $consulta.=" and Servicio_idServicio=".$servicio : $consulta.=" Servicio_idServicio=".$servicio;
	$param=$param+1;
}
if($tipo_vehiculo!="0"){
	
	$param >0 ? $consulta.=" and tipoVehiculo=".$tipo_vehiculo : $consulta.=" tipoVehiculo=".$tipo_vehiculo;
	$param=$param+1;
}	
if($comisionpaga!="3"){
	
	$param >0 ? $consulta.=" and comisionPaga=".$comisionpaga : $consulta.=" comisionPaga=".$comisionpaga;
	$param=$param+1;
}	
if($fecha_viaje!="0000-00-00"){
	
	$param >0 ? $consulta.=" and fecha='".$fecha_viaje."' " : $consulta.=" fecha='".$fecha_viaje."' ";
	$param=$param+1;
}

if($consulta!=""){
	
	$aux.=" where ".$consulta;
}




	$resultado=db_query($aux);

	$array='';


	foreach($resultado as $fila){


		
		$array.= "<tr>
		<td>".$fila['idViaje']."</td>
		<td>".$fila['fecha']."</td>
		<td>".$fila['hora']."</td>
		<td>".$fila['razon_social']."</td>
		<td>".$fila['servicioDes']."</td>
		<td>".$fila['comisionPaga']."</td>
		<td>".$fila['estado']."</td>
		<td>".$fila['nombre']." ".$fila['Apellido']."</td>
		<td>".$fila['tipoVehiculo_des']."</td>
		<td>".$fila['fecha_carga']."</td>
		<td>".$fila['fecha_finalizado']."</td>
		<td>".$fila['fecha_asignado']."</td>
		<td>".$fila['fecha_encurso']."</td>
		<td>".$fila['valorViaje']."</td>
		</tr>";


	}


	echo $array;

?>