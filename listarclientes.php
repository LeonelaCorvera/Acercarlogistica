<?php

include 'funciones\database_min.php';

	
	$consulta="SELECT c.*,l.descripcion FROM cliente c left join listadeprecios l on c.listaPrecio=l.id;";
	$resultado=db_query($consulta);

 

	foreach($resultado as $fila){

		$id = (isset($fila['idcliente'])) ? $fila['idcliente'] : 0 ;


		if ($fila['estado']==1) {
			$estado='<span class="badge bg-green">Habilitado</span>';
		}else{
			$estado='<span class="badge bg-red">Inhabilitado</span>';
		}

		echo "<tr><td>"."$fila[idcliente]"."</td>
			<td>"."$fila[razon_social]"."</td>
			<td>"."$fila[contacto]"."</td>
			<td>"."$fila[tipoDoc]"."</td>
			<td>"."$fila[doc]"."</td>
			<td>"."$fila[direccion]"."</td>
      <td>"."$fila[telefono]"."</td>
			<td>"."$fila[fecha_de_alta]"."</td>
      <td>"."$fila[descripcion]"."</td>
      <td>".$estado."</td>
      <td>
      <button type='button' value='".$id."' class='btn btn-primary' onclick='sendId(this.value)';><i class='fa fa-edit'></i></button>
      <button type='button' value='".$id."' class='btn btn-danger' onclick='deshabilitar(this.value)';><i class='fa fa-trash'></i></button>
      </td>
      </tr>";


	}



?>