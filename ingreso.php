<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\session.php';
include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database.php';


$usuario= $_POST['usuario'];
$password= $_POST['password'];


if (!empty($_POST['usuario']) or !empty($_POST['password'])) {
		
		$consulta="
			SELECT *
			FROM usuario
			WHERE idusuario='".$usuario."' and contrasena='".$password."' and flagBaja=1;
		";

		$resultado=db_query($consulta);
		//si hay algun usuario con esa contrasena
		if(count($resultado)==1){
			session_set("usuario",$usuario);
			session_var_unset("error");
			header("Location: index.php");
		}else{
			echo "<p id='error'>el usuario o contraseña son incorrectos</p>";
			echo "<br><a href='index.php'>>>Volver a inicio<<</a><br><br>";
		}
	}else{
			echo "<p id='error'>Debe ingresar un nombre de usuario y contraseña para ingresar!</p>";
			echo "<br><a href='index.php'>>>Volver a inicio<<</a><br><br>";
	}



?>