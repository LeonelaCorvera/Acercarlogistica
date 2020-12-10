
<?php

include 'funciones\database_min.php';

 $chofer= ( empty($_POST['chofer']) ) ? NULL : $_POST['chofer'];

	$consulta="UPDATE viaje
				SET comisionPaga = 1 where comisionPaga=0 and Chofer_idChofer=".$chofer.";";

	$resultado=db_query($consulta);


?>