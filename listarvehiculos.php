<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';


	$consulta="SELECT * FROM vehiculo;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		$id = (isset($fila['idVehiculo'])) ? $fila['idVehiculo'] : 0 ;


		switch ($fila['idTipoDeVehiculo']) {
			case '1':
				$tipo='auto';
				break;
			case '2':
				$tipo='camioneta chica';
				break;
			case '3':
				$tipo='camioneta mediana';
				break;
			case '4':
				$tipo='camioneta grande';
				break;
			case '5':
				$tipo='camion chico';
				break;
		
		}

		if ($fila['activo']==1) {
			$estado='<span class="badge bg-green">Habilitado</span>';
		}else{
			$estado='<span class="badge bg-red">Inhabilitado</span>';
		}

		echo "<tr>
			<td>"."$fila[idVehiculo]"."</td>
			<td>"."$fila[patente]"."</td>
			<td>"."$fila[marca]"."</td>
			<td>"."$fila[modelo]"."</td>
			<td>"."$fila[anio]"."</td>
			<td>"."$tipo"."</td>
			<td>".$estado."</td>
			<td>
			<button type='button' value='".$id."' class='btn btn-success' onclick='sendId(this.value)';><i class='fa fa-edit'></i></button>
			<button type='button' value='".$id."' class='btn btn-danger' onclick='deshabilitar(this.value)'; ><i class='fa fa-trash'></i></button>
			</td></tr>";


	}

?>