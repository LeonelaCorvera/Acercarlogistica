<?php

include 'funciones\database_min.php';

//$id= $_POST['id']; 

	$consulta="SELECT * FROM precio where lista=1;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){


		$array[]= "<tr>
		<td>"."$fila[id]"."</td>
		<td>"."$fila[tipoVehiculo]"."</td>
		<td>"."$fila[servicio]"."</td>
		<td>"."$fila[valorkm]"."</td>
		<td>"."$fila[valorFijo]"."</td>
		<td>"."$fila[valorHora]"."</td>
		<td>
		<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalConfirmDelete'><i class='fa fa-trash'></i></button>
		</td>
		</tr>";


	}

	echo json_encode($array);

?>