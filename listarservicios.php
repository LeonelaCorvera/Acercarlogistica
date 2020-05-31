<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

	$consulta="SELECT * FROM acercarlogistca.servicio;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		$id = (isset($fila['idServicio'])) ? $fila['idServicio'] : 0 ;

		$fijo = ($fila['fijo']==1) ? "Si" : "No" ;
		$hora = ($fila['hora']==1) ? "Si" : "No" ;
		$km = ($fila['km']==1) ? "Si" : "No" ;


		echo "<tr>
		<td>"."$fila[idServicio]"."</td>
		<td>"."$fila[descripcion]"."</td>
		<td>".$fijo."</td>
		<td>".$hora."</td>
		<td>".$km."</td>
		<td>
			<a href='index.php?menu=DetalleServicio' class='btn btn-primary'><i class='fa fa-eye'></i></a>
			<button type='button' value='".$id."' class='btn btn-success' onclick='sendId(this.value)';><i class='fa fa-edit'></i></button>
			<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalConfirmDelete'><i class='fa fa-trash'></i></button>
		</td>
		</tr>";


	}

?>