<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

$desde = (isset($_POST['desde'])) ? $_POST['desde'] : "0000-00-00" ;
$hasta = (isset($_POST['hasta'])) ? $_POST['hasta'] : "0000-00-00" ;

	$consulta="SELECT 
				ch.idChofer,
				ch.nombre,
				ch.Apellido,
				count(v.idViaje) as cantviajes,
				sum(v.valorViaje) as sumatoria
				FROM viaje v 
				left join chofer ch on v.Chofer_idChofer=ch.idChofer
				where ch.idChofer is not null and v.fecha between '".$desde."' and '".$hasta."'
				group by ch.idChofer;
				";
	$resultado=db_query($consulta);

	$array='';

	 $array.="<table id='export_to_excel' class='table table-bordered table-striped' border='1'>
                <thead>
                <tr>
                  <th>Id Chofer</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Cant. viajes</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody id='lista'>";

	foreach($resultado as $fila){


		$array.="<tr>
		<td>".$fila['idChofer']."</td>
		<td>".$fila['nombre']."</td>
		<td>".$fila['Apellido']."</td>
		<td>".$fila['cantviajes']."</td>
		<td>".$fila['sumatoria']."</td>
		</tr>";


	}

	$array.="</tbody>
                <tfoot>
                <tr>
                  <th colspan='7'>Total</th>
                  <th id='total'>0</th>
                </tr>
                </tfoot>
              </table>";

	
	echo $array;


?>