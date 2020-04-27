<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


	$consulta="SELECT * FROM acercarlogistca.listadeprecios;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){


		echo "<tr><td>"."$fila[id]"."</td><td>"."$fila[descripcion]"."</td></tr>";


	}

?>