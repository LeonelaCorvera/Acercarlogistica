<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';


	$consulta="SELECT * FROM listadeprecios;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		$id = (isset($fila['id'])) ? $fila['id'] : 0 ;


		if ($fila['activa']==1) {
			$estado='<span class="badge bg-green">Habilitado</span>';
		}else{
			$estado='<span class="badge bg-red">Inhabilitado</span>';
		}
		if ($fila['esGeneral']==1) {
			$general='<i class="fa fa-check text-green">';
		}else{
			$general='<i class="fa fa-times text-red">';
		}
		


		echo "<tr>
		<td>"."$fila[id]"."</td>
		<td>"."$fila[descripcion]"."</td>
		<td>".$general."</td>
		<td>".$estado."</td>
		<td>
		<button type='button' value='".$id."' class='btn btn-primary' onclick='sendId(this.value)';><i class='fa fa-edit'></i>
		</button>
		<button type='button' value='".$id."' class='btn btn-danger' onclick='deshabilitar(this.value)'; ><i class='fa fa-trash'>
		</i></button>
		</td>
		</tr>";


	}

?>