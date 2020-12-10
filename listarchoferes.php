<?php

include 'funciones\database_min.php';


	$consulta="SELECT * FROM chofer;";
	$resultado=db_query($consulta);



	foreach($resultado as $fila){

		$id = (isset($fila['idChofer'])) ? $fila['idChofer'] : 0 ;

		if ($fila['flagBaja']==1) {
			$estado='<span class="badge bg-green">Habilitado</span>';
		}else{
			$estado='<span class="badge bg-red">Inhabilitado</span>';
		}

		echo "<tr><td>"."$fila[idChofer]"."</td>
			<td>"."$fila[nombre]"."</td>
			<td>"."$fila[Apellido]"."</td>
			<td>"."$fila[dni]"."</td>
			<td>"."$fila[telefono]"."</td>
			<td>"."$fila[idVehiculo]"."</td>
			<td>"."$estado"."</td>
			<td>
			<button type='button' value='".$id."' class='btn btn-primary' onclick='sendId(this.value)';><i class='fa fa-edit'></i></button>
			<button type='button' value='".$id."' class='btn btn-danger' onclick='deshabilitar(this.value)'; ><i class='fa fa-trash'></i></button>
			</td>
			</tr>";


	}

?>