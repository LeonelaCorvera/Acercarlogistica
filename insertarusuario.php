<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

$usuario= $_POST['usuario']; 
$pass= $_POST['pass'];
$perfil= $_POST['perfil'];
$cliente= $_POST['cliente'];

	$consulta="INSERT INTO usuario(idusuario,contrasena,flagBaja,id_perfil,id_cliente)VALUES('".$usuario."',".$pass.",1,".$perfil.",".$cliente.");";
	$resultado=db_query($consulta);

	header("Location: principal.php?menu=NuevoCliente");

?>