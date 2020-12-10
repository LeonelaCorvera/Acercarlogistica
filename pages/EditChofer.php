<?php


echo "<section class='content'>

      <div class='box box-default'>
        <div class='box-header with-border'>
          <h3 class='box-title'>Modificar Chofer</h3>

          <div class='box-tools pull-right'>
            <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
          </div>
        </div>";
       

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';


$json =$_POST['id']; 
$id = json_decode($json, true);

$consulta="SELECT * FROM chofer where idChofer=".$id.";";
$resultado=db_query($consulta);

$result = json_encode($resultado, true);

foreach($resultado as $fila){


    echo " <div class='box-body'>

      <form id='example1' action='editarchofer.php' method='post'>
              <div class='row'>
                <div class='col-xs-1'>
                  <label>id:</label>
                  <input type='text' class='form-control' name='id' value='"."$fila[idChofer]"."' >
                </div>
                <div class='col-xs-3'>
                  <label>Nombre:</label>
                  <input type='text' class='form-control' name='nombre' value='"."$fila[nombre]"."' >
                </div>
                <div class='col-xs-3'>
                  <label>Apellido:</label>
                  <input type='text' class='form-control' name='apellido' value='"."$fila[Apellido]"."' >
                </div>
                 <div class='col-xs-2'>
                  <label>DNI:</label>
                  <input type='text' class='form-control' name='dni' value='"."$fila[dni]"."' >
                </div>
                 <div class='col-xs-3'>
                  <label>Telefono:</label>
                  <input type='text' class='form-control' name='telefono' value='"."$fila[telefono]"."' >
                </div>
            </div>
<br>
             <div class='row'>
              <div class='col-xs-3'>
                <div class='form-group'>
                  <label>Vehiculo:</label>
                  <select class='form-control' name='vehiculo' value='"."$fila[idVehiculo]"."' >
                    <option>1</option>
                  </select>
                </div>
              </div>
            </div>
            <br>

            <br>           

            <div class='row'>
              <div class='col-xs-12'>
                <h4>Venciemientos</h4>
                <hr/> 
              </div>
            </div>



            <div class='row'>

              <div class='col-xs-3'>
                  <label>Licencia:</label>
                  <input type='date' class='form-control' name='licencia' value='"."$fila[licencia]"."'>
              </div>

              <div class='col-xs-3'>
                  <label>Cedula:</label>
                  <input type='date' class='form-control' name='cedula' value='"."$fila[cedula]"."'>
              </div>


            </div>
                

              <div class='box-footer'>
                <button type='submit' class='btn btn-info pull-right'>Modificar</button>
              </div>
        </form>
      
      </div>";

  }


?>