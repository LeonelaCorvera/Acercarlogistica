<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

	$consulta="SELECT * FROM acercarlogistca.servicio;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		$id = (isset($fila['idServicio'])) ? $fila['idServicio'] : 0 ;

		if ($fila['estado']==1) {
			$estado='<span class="badge bg-green">Habilitado</span>';
		}else{
			$estado='<span class="badge bg-red">Inhabilitado</span>';
		}

		echo "<tr>
		<td>"."$fila[idServicio]"."</td>
		<td>"."$fila[descripcion]"."</td>
		<td>".$estado."</td>
		<td>
			<button type='button' value='".$id."' class='btn btn-primary' onclick='sendId(this.value)';><i class='fa fa-edit'></i></button>
			<button type='button' value='".$id."' class='btn btn-danger'  onclick='deshabilitar(this.value)';><i class='fa fa-trash'></i></button>
		</td>
		</tr>";


	}

?>