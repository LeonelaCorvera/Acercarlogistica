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
			<a href='index.php?menu=DetalleChofer' class='btn btn-primary'><i class='fa fa-eye'></i></a>
			<a href='index.php?menu=EditChofer' class='btn btn-success'><i class='fa fa-edit'></i></a>
			<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalConfirmDelete'><i class='fa fa-trash'></i></button>
			</td>
			</tr>";


	}

?>