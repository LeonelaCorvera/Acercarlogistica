
<?php

echo "

<link href='https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css' rel='stylesheet'>
<script src='https://code.jquery.com/jquery-1.12.4.js'></script>
<link href='https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css' rel='stylesheet' />
<script src='https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js'></script>


<section class='content'>

      <!-- SELECT2 EXAMPLE -->
      <div class='box box-default'>
        <div class='box-header with-border'>
          <h3 class='box-title'>Modificar Servicio</h3>

          <div class='box-tools pull-right'>
            <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
            <button type='button' class='btn btn-box-tool' data-widget='remove'><i class='fa fa-remove'></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class='box-body'>";


include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';


$json =$_POST['id']; 
$id = json_decode($json, true);

$consulta="SELECT * FROM servicio where idServicio=".$id.";";
$resultado=db_query($consulta);

foreach($resultado as $fila){


          echo " <form action='editarservicio.php' method='post'>
              <div class='row'>
                <div class='col-xs-3'>
                  <label>Nombre:</label>
                  <input type='text' class='form-control' name='des' value="."$fila[descripcion]".">
                </div>
                <div class='col-xs-1'>
                  <input type='hidden' class='form-control' name='id' value=".$id.">
                </div>
              </div>


              <br><br>

              <div class='box-footer'>
                <button type='submit' class='btn btn-info pull-right'>Modificar</button>
              </div>
            </form>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->
</section>";


}

?>