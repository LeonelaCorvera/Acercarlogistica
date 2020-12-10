<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database.php';

$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{

	$code=$_GET['code'];
	$consulta="
		SELECT *
		FROM usuario
		WHERE codigo_activacion='".$code."';";

	$resultado=db_query($consulta);



	if(count($resultado) > 0) {

		$consulta2="
			SELECT idusuario
			FROM usuario
			WHERE codigo_activacion='".$code."';";

		$resultado2=db_query($consulta2);

		if(count($resultado2) > 0) {

			$consulta3="UPDATE usuario SET activado=1 WHERE codigo_activacion='".$code."';";
			$resultado3=db_query($consulta3);

			$msg="Su usuario se valido con exito"; 
		}else {

			$msg ="Su usuario fue validado con exito. No se requiere volver a validarlo.";
		}


	}else {

		$msg ="Codigo de validacion desconocido";
	}


}


	echo $msg;
	echo "<br><a href='index.php'>>>Ir a login<<</a><br><br>";


?>
