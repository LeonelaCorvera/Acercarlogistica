<?php

include 'funciones\database_min.php';


$json =$_POST['id']; 
$id = json_decode($json, true);

	$consulta="UPDATE listadeprecios SET activa=0 where id=".$id;
	$resultado=db_query($consulta);



?>