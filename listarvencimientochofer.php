<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';


	$consulta="SELECT idChofer, nombre, Apellido, licencia, 
				DATEDIFF(licencia, now()) as diasLicencia , 
				cedula , 
				DATEDIFF(cedula, now()) as diasCedula
				FROM chofer 
				where licencia < CURDATE() or cedula < CURDATE() and flagBaja=1;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		$id = (isset($fila['idChofer'])) ? $fila['idChofer'] : 0 ;

		if ( is_negative_number($fila['diasLicencia']) ){
			$tagLicencia="<td style='color: red;'>".$fila['diasLicencia']."</td>";
		}else{
			$tagLicencia="<td>".$fila['diasLicencia']."</td>";
		}

		if ( is_negative_number($fila['diasCedula']) ){
			$tagCedula="<td style='color: red;'>".$fila['diasCedula']."</td>";
		}else{
			$tagCedula="<td>".$fila['diasCedula']."</td>";
		}


		
		echo "<tr>
			<td>".$fila['idChofer']."</td>
			<td>".$fila['nombre']." ".$fila['Apellido']."</td>
			<td>".$fila['licencia']."</td>
			".$tagLicencia."
			<td>".$fila['cedula']."</td>
			".$tagCedula."
			<td>
			<button type='button' title='Modificar chofer' value='".$id."' class='btn btn-success' onclick='sendId(this.value)';><i class='fa fa-edit'></i></button>
			<button type='button' title='Deshabilitar chofer' value='".$id."' class='btn btn-danger' onclick='deshabilitar(this.value)'; ><i class='fa fa-trash'></i></button>
			</td></tr>";


	}



function is_negative_number($number=0){

	if( is_numeric($number) AND ($number<0) ){
		return true;
	}else{
		return false;
	}

}

?>