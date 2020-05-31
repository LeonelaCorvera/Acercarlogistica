
<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


	$consulta="SELECT c.idChofer,c.nombre,c.Apellido,c.disponibilidad,t.descripcion, count(vi.idViaje) as cant
				FROM chofer c 
				join vehiculo v on c.idVehiculo=v.idVehiculo
				join tipodevehiculo t on v.idTipoDeVehiculo=t.idTipoDeVehiculo
				join viaje vi on vi.Chofer_idChofer=c.idChofer
				group by c.idChofer";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		if ($fila['disponibilidad']==1) {
			$color="<div class='info-box bg-green'>";
		} else if ($fila['disponibilidad']==0){
			$color="<div class='info-box bg-red'>";
		}else if ($fila['disponibilidad']==(-1)){
			$color="<div class='info-box bg-yellow'>";
		}
		
		if ($fila['descripcion']=='auto') {
			$vehiculo="<i class='fa fa-car'>";
		} else if ($fila['descripcion']=='camioneta chica'){
			$vehiculo="<i class='fa fa-bus'>";
		}else if ($fila['descripcion']=='camioneta mediana'){
			$vehiculo="<i class='fa fa-bus'>";
		}else if ($fila['descripcion']=='camioneta grande'){
			$vehiculo="<i class='fa fa-bus'>";
		}else if ($fila['descripcion']=='camion chico'){
			$vehiculo="<i class='fa fa-truck'>";
		}else if ($fila['descripcion']=='moto'){
			$vehiculo="<i class='fa fa-motorcycle'>";
		}

		echo "<div class='col-md-3 col-sm-6 col-xs-12'>
          ".$color."
            
            <span class='info-box-icon'>".$vehiculo."</i></span>

            <div class='info-box-content'>
              <span class='info-box-text'>"."$fila[nombre]"." "."$fila[Apellido]"."</span>
              <span class='info-box-text'>"."$fila[descripcion]"."</span>
              <br>
              <a href='#'' data-toggle='modal' data-target='#myModal' style='color:white';><span class='info-box-number'>
                 "."$fila[cant]"." viajes
                <i class='fa fa-arrow-circle-right'></i>
                  </span></a>
            </div>

          </div>

      </div>";


	}

?>