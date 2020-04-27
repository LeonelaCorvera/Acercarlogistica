<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


	$consulta="SELECT u.*,r.descripcion FROM acercarlogistca.usuario u join rol r on u.id_perfil=r.idrol";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		if ($fila['flagBaja']==1) {
			$estado='<span class="badge bg-green">Habilitado</span>';
		}else{
			$estado='<span class="badge bg-red">Inhabilitado</span>';
		}
		


		echo "<tr>
		<td>"."$fila[idusuario]"."</td>
		<td>"."$fila[contrasena]"."</td>
		<td>"."$fila[descripcion]"."</td>
		<td>"."$fila[id_cliente]"."</td>
		<td>".$estado."</td>
		<td>
			<a href='index.php?menu=DetalleUsuario' class='btn btn-primary'><i class='fa fa-eye'></i></a>
			<a href='index.php?menu=EditUsuario' class='btn btn-success'><i class='fa fa-edit'></i></a>
			<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalConfirmDelete'><i class='fa fa-trash'></i></button>
		</td>
		</tr>";


	}

?>