<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


	$consulta="SELECT * FROM acercarlogistca.servicio;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){


		echo "<tr>
		<td>"."$fila[idServicio]"."</td>
		<td>"."$fila[descripcion]"."</td>
		<td>"."$fila[fijo]"."</td>
		<td>"."$fila[hora]"."</td>
		<td>"."$fila[km]"."</td>
		<td>
			<a href='index.php?menu=DetalleServicio' class='btn btn-primary'><i class='fa fa-eye'></i></a>
			<a href='index.php?menu=EditServicio' class='btn btn-success'><i class='fa fa-edit'></i></a>
			<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalConfirmDelete'><i class='fa fa-trash'></i></button>
		</td>
		</tr>";


	}

?>