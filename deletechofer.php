<?php

include 'funciones\database_min.php';


$json =$_POST['id']; 
$id = json_decode($json, true);

	$consulta="UPDATE chofer SET flagBaja=0 where idChofer=".$id;
	$resultado=db_query($consulta);



?>