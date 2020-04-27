<?php



	$consulta="SELECT * FROM acercarlogistca.viaje where Chofer_idChofer!=0;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){


		echo "<tr>
		<td>"."<input type='checkbox'>"."</td>
		<td>"."$fila[idViaje]"."</td>
		<td>"."$fila[fecha]"."</td>
		<td>"."$fila[hora]"."</td>
		<td>"."$fila[comisionPaga]"."</td>
		<td>"."$fila[valorViaje]"."</td>
		<td>"."$fila[Servicio_idServicio]"."</td>
		<td>"."$fila[Chofer_idChofer]"."</td>
		<td>"."$fila[idClliente]"."</td>
		<td>"."$fila[km]"."</td>
		<td>"."$fila[fecha_asignado]"."</td>
		<td>"."$fila[estado]"."</td>
		</tr>";


	}

?>