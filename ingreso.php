<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\session.php';
include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database.php';


$usuario= addslashes($_POST['usuario']);
$password= $_POST['password'];


if (!empty($_POST['usuario']) or !empty($_POST['password'])) {
		
		$consulta="
			SELECT *
			FROM usuario
			WHERE idusuario='".$usuario."' and contrasena='".sha1($password)."';
		";

		$resultado=db_query($consulta);
		//si hay algun usuario con esa contrasena
		if(count($resultado)==1){
		/*$consulta2="
			SELECT pf.idfuncion 
			FROM usuario u 
			inner join perfil_funcion pf on u.id_perfil=pf.idrol 
			where u.idusuario='".$usuario."';
		";
		$permisos=db_query($consulta2);
		session_set("permisos",$permisos);   */

		foreach($resultado as $fila){

			if($fila['flagBaja']==1){

				if($fila['activado']==1){
					
					session_set("rol",$fila['id_perfil']);
					session_set("usuario",$usuario);
					session_var_unset("error");
					header("Location: principal.php");

				}else {
					
					echo "<p id='error'>Aun no ha validado su usuario. Revise su casilla de correo electronico.</p>";
					echo "<br><a href='index.php'>>>Volver a inicio<<</a><br><br>";

				}
				
				

			}else {
				
				echo "<p id='error'>El usuario se encunetra deshabilitado</p>";
				echo "<br><a href='index.php'>>>Volver a inicio<<</a><br><br>";

			}

			
			
		}
			
		}else{
			
			echo "<p id='error'>el usuario o contraseña son incorrectos</p>";
			echo "<br><a href='index.php'>>>Volver a inicio<<</a><br><br>";
		}
	}else{
			echo "<p id='error'>Debe ingresar un nombre de usuario y contraseña para ingresar!</p>";
			echo "<br><a href='index.php'>>>Volver a inicio<<</a><br><br>";
	}



?>