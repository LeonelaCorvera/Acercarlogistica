<?php

include 'funciones\database_min.php';


	$consulta="SELECT idVehiculo, patente, seguro, 
				DATEDIFF(seguro, now()) as diasSeguro , 
				vtv , 
				DATEDIFF(vtv, now()) as diasVTV,
				pagopatente , 
				DATEDIFF(pagopatente, now()) as diasPatente
				FROM vehiculo 
				where seguro < CURDATE() or vtv < CURDATE() or pagopatente < CURDATE() and activo=1;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		$id = (isset($fila['idVehiculo'])) ? $fila['idVehiculo'] : 0 ;

		if ( is_negative_number($fila['diasSeguro']) ){
			$tagSeguro="<td style='color: red;'>".$fila['diasSeguro']."</td>";
		}else{
			$tagSeguro="<td>".$fila['diasSeguro']."</td>";
		}

		if ( is_negative_number($fila['diasVTV']) ){
			$tagVTV="<td style='color: red;'>".$fila['diasVTV']."</td>";
		}else{
			$tagVTV="<td>".$fila['diasVTV']."</td>";
		}

		if ( is_negative_number($fila['diasPatente']) ){
			$tagPatente="<td style='color: red;'>".$fila['diasPatente']."</td>";
		}else{
			$tagPatente="<td>".$fila['diasPatente']."</td>";
		}

		
		echo "<tr>
			<td>".$fila['idVehiculo']."</td>
			<td>".$fila['patente']."</td>
			<td>".$fila['seguro']."</td>
			".$tagSeguro."
			<td>".$fila['vtv']."</td>
			".$tagVTV."
			<td>".$fila['pagopatente']."</td>
			".$tagPatente."
			<td>
			<button type='button' title='Modificar vehiculo' value='".$id."' class='btn btn-success' onclick='sendId(this.value)';><i class='fa fa-edit'></i></button>
			<button type='button' title='Deshabilitar vehiculo' value='".$id."' class='btn btn-danger' onclick='deshabilitar(this.value)'; ><i class='fa fa-trash'></i></button>
			</td></tr>";


	}



function is_negative_number($number=0){

	if( is_numeric($number) AND ($number<0) ){
		return true;
	}else{
		return false;
	}

}

?>