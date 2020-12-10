<?php

echo "<section class='content'>

      <!-- SELECT2 EXAMPLE -->
      <div class='box box-default'>
        <div class='box-header with-border'>
          <h3 class='box-title'>Modificar Vehiculo</h3>

          <div class='box-tools pull-right'>
            <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
          </div>
        </div'
        <!-- /.box-header -->

     <div class='box-body'>";


include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';


$json =$_POST['id']; 
$id = json_decode($json, true);

$consulta="SELECT * FROM vehiculo where idVehiculo=".$id.";";
$resultado=db_query($consulta);

$result = json_encode($resultado, true);

foreach($resultado as $fila){




    echo  "<form action='editarvehiculo.php' method='post'>
              <div class='row'>
                <div class='col-xs-1'>
                  <label>Id:</label>
                  <input type='text' class='form-control' name='id' value='"."$fila[idVehiculo]"."' >
                </div>
                <div class='col-xs-3'>
                  <label>Patente:</label>
                  <input type='text' class='form-control' name='patente' value='"."$fila[patente]"."'>
                </div>
                <div class='col-xs-3'>
                  <label>Marca:</label>
                  <input type='text' class='form-control' name='marca' value='"."$fila[marca]"."'>
                </div>
                 <div class='col-xs-3'>
                  <label>Modelo:</label>
                  <input type='text' class='form-control' name='modelo' value='"."$fila[modelo]"."'>
                </div>
                 <div class='col-xs-2'>
                  <label>Año:</label>
                  <input type='text' class='form-control' name='anio' value='"."$fila[anio]"."'>
                </div>
            </div>
<br>
             <div class='row'>
              <div class='col-xs-3'>
                <div class='form-group'>
                  <label>Tipo de vehiculo:</label>
                  <select class='form-control' name='tipo'>";
                
                          $consulta2="SELECT * FROM tipodevehiculo where idTipoDeVehiculo="."$fila[idTipoDeVehiculo]".";";
                          $resultado2=db_query($consulta2);

                          foreach($resultado2 as $fila2){

                            echo "<option value='".$fila2[idTipoDeVehiculo]."'>(".$fila2[idTipoDeVehiculo].")-".$fila2[descripcion]."</option>";
                          }

                          $consulta3="SELECT * FROM acercarlogistca.tipodevehiculo;";
                          $resultado3=db_query($consulta3);

                          foreach($resultado3 as $fila3){

                            echo "<option value='".$fila3[idTipoDeVehiculo]."'>(".$fila3[idTipoDeVehiculo].")-".$fila3[descripcion]."</option>";
                          }

                  echo "</select>
                </div>
              </div>
            </div>
            <br>";

            echo "<br>           

            <div class='row'>
              <div class='col-xs-12'>
                <h4>Venciemientos</h4>
                <hr/> 
              </div>
            </div>



            <div class='row'>

                <div class='col-xs-3'>
                    <label>Seguro:</label>
                    <input type='date' class='form-control' name='seguro' value='"."$fila[seguro]"."'>
                </div>

                <div class='col-xs-3'>
                    <label>VTV:</label>
                    <input type='date' class='form-control' name='vtv' value='"."$fila[vtv]"."'>
                </div>

                <div class='col-xs-3'>
                    <label>Patente:</label>
                    <input type='date' class='form-control' name='pagopatente' value='"."$fila[pagopatente]"."'>
                </div>

            </div>
                

               <div class='box-footer'>
                  <button type='submit' class='btn btn-info pull-right'>Modificar</button>
              </div>
        </form>
       
      </div>";

  }


?>
