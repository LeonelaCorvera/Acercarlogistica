<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';


	$consulta="SELECT * FROM acercarlogistca.listadeprecios;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		if ($fila['activa']==1) {
			$estado='<span class="badge bg-green">Habilitado</span>';
		}else{
			$estado='<span class="badge bg-red">Inhabilitado</span>';
		}
		if ($fila['esGeneral']==1) {
			$general='<span class="badge bg-green"><i class="fa fa-check bg-green"></span>';
		}else{
			$general='<span class="badge bg-red"><i class="fa fa-times"></span>';
		}
		


		echo "<tr>
		<td>"."$fila[id]"."</td>
		<td>"."$fila[descripcion]"."</td>
		<td>".$general."</td>
		<td>".$estado."</td>
		<td>
		<a href='index.php?menu=EditChofer' class='btn btn-success'><i class='fa fa-edit'></i></a>
		<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalConfirmDelete'><i class='fa fa-trash'></i></button>
		</td>
		</tr>";


	}

?>