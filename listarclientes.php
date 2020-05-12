<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

	
	$consulta="SELECT * FROM acercarlogistca.cliente;";
	$resultado=db_query($consulta);

 

	foreach($resultado as $fila){

		echo "<tr><td>"."$fila[idcliente]"."</td>
			<td>"."$fila[razon_social]"."</td>
			<td>"."$fila[contacto]"."</td>
			<td>"."$fila[tipoDoc]"."</td>
			<td>"."$fila[doc]"."</td>
			<td>"."$fila[direccion]"."</td>
      <td>"."$fila[telefono]"."</td>
			<td>"."$fila[fecha_de_alta]"."</td>
      <td>"."$fila[listaPrecio]"."</td>
      <td>"."$fila[estado]"."</td>
      <td>
      <a href='index.php?menu=DetalleChofer' class='btn btn-primary'><i class='fa fa-eye'></i></a>
      <a href='index.php?menu=EditChofer' class='btn btn-success'><i class='fa fa-edit'></i></a>
      <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalConfirmDelete'><i class='fa fa-trash'></i></button>
      </td>
      </tr>";


	}



?>