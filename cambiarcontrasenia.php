<?php

include 'funciones\database.php';
include 'funciones\session.php';

$contActual= $_POST['contActual'];
$contNueva= $_POST['contNueva'];
$repita= $_POST['repita'];
$user= session_get('usuario');

	if($repita==$contNueva){

		
		$consulta="UPDATE usuario SET contrasena ='".sha1($contNueva)."'  WHERE idusuario='".$user."';";
		$resultado=db_query($consulta);
		
	}
		


	header("Location: index.php");

?>
