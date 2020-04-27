<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


	$consulta="SELECT * FROM acercarlogistca.chofer;";
	$resultado=db_query($consulta);



	foreach($resultado as $fila){

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
			<button type='button' class='btn btn-primary'><i class='fa fa-eye'></i></button>
			<button type='button' class='btn btn-success'><i class='fa fa-edit'></i></button>
			<button type='button' class='btn btn-danger'><i class='fa fa-trash'></i></button>
			</td>
			</tr>";


	}

?>