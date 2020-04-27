<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';

$c1= $_POST['c1'];

if (isset($c1)) {
	
	$consulta="SELECT * FROM acercarlogistca.cliente;";
	$resultado=db_query($consulta);

 echo " <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>D.N.I</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Fecha de Alta</th>
                </tr>
                </thead>
                <tbody>";

	foreach($resultado as $fila){

		echo "<tr><td>"."$fila[idcliente]"."</td>
			<td>"."$fila[nombre]"."</td>
			<td>"."$fila[apellido]"."</td>
			<td>"."$fila[dni]"."</td>
			<td>"."$fila[direccion]"."</td>
			<td>"."$fila[telefono]"."</td>
			<td>"."$fila[fecha_de_alta]"."</td>";


	}

	echo "</tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>D.N.I</th>
                  <th>Telefono</th>
                  <th>Id vehiculo</th>
                  <th>Estado</th>
                </tr>
                </tfoot>
              </table>";


}else{

	$consulta="SELECT * FROM acercarlogistca.cllienteempresa;";
	$resultado=db_query($consulta);

 echo " <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Razon Social</th>
                  <th>C.U.I.L</th>
                  <th>Direccion/th>
                  <th>Telefono</th>
                  <th>I.V.A</th>
                </tr>
                </thead>
                <tbody>";

	foreach($resultado as $fila){

    if ($fila['idiva']==1) {
          $iva='Resp.Insc.';
    }else{
          $iva='Monotributista';
    }

		echo "<tr><td>"."$fila[idCllienteEmpresa]"."</td>
			<td>"."$fila[razonSocial]"."</td>
			<td>"."$fila[cuil]"."</td>
			<td>"."$fila[domicilio]"."</td>
			<td>"."$fila[telefono]"."</td>
			<td>"."$iva"."</td>";


	}

	echo "</tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Razon Social</th>
                  <th>C.U.I.L</th>
                  <th>Direccion/th>
                  <th>Telefono</th>
                  <th>I.V.A</th>
                </tr>
                </tfoot>
              </table>";
}



	

?>