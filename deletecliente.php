<?php

include 'funciones\database_min.php';


$json =$_POST['id']; 
$id = json_decode($json, true);

	$consulta="UPDATE cliente SET estado=0 where idcliente=".$id;
	$resultado=db_query($consulta);



?>