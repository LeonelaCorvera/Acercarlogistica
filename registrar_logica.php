<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\session.php';
include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database.php';
include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\sendMail.php';


$email= addslashes($_POST['email']);
$usuario= addslashes($_POST['usuario']);
$password= addslashes($_POST['password']);
$repite= addslashes($_POST['repite']);




if (!empty($_POST['usuario'])) {
	
	if (!empty($_POST['email'])) {
	
		if (!empty($_POST['password'])) {

			if ($password==$repite){

				
				$consulta="
					SELECT *
					FROM usuario
					WHERE idusuario='".$usuario."';";

				$resultado=db_query($consulta);
				
				if(count($resultado) < 1){

					$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
					// Output: 54esmdr0qf
					$code= substr(str_shuffle($permitted_chars), 0, 10);

					$consulta2="
					INSERT INTO usuario
					(idusuario,contrasena,flagBaja,id_perfil,activado,codigo_activacion)
					VALUES
					('".$usuario."','".sha1($password)."',1,3,0,'".$code."');";

					$resultado2=db_query($consulta2);

					$to=$email;
					$subject="Email de validacion de usuario";
					$body="Hola!, <br/> <br/> Para continuar con la registracion del nuevo usuario, es necesario validar el mail del mismo ingresando al siguiente link:<br/> <br/>http://localhost/AdminLTE/Acercarlogistica-master/activacion.php?code=".$code;


					Send_Mail($to,$subject,$body);
					
						
						header("Location: index.php");

					


					
				}else {
					
					echo "<p id='error'>El usuario ya existe</p>";
					echo "<br><a href='index.php'>>>Volver a inicio<<</a><br><br>";
				}



	
	
			}else{
				
				echo "<p id='error'>Los ingresos de la contraseña no coinciden</p>";
				echo "<br><a href='index.php'>>>Volver a inicio<<</a><br><br>";
			}
	
	
		}else{
			
			echo "<p id='error'>La contraseña no puede enviarse vacia</p>";
			echo "<br><a href='index.php'>>>Volver a inicio<<</a><br><br>";
		}
	
	}else{
		
		echo "<p id='error'>El email no puede enviarse vacio</p>";
		echo "<br><a href='index.php'>>>Volver a inicio<<</a><br><br>";
	}


}else {

	
	echo "<p id='error'>El usuario no puede enviarse vacio</p>";
	echo "<br><a href='index.php'>>>Volver a inicio<<</a><br><br>";
}





?>