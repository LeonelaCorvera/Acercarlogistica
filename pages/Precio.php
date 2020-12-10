
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Precio</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">


              <div class="row">
                <div class="col-xs-3">
                  <div class="form-group">
                  <label>Lista de precios:</label>
                  <select class="form-control" name="lista" onchange="listar()">
                    <option value=''>Seleccionar</option>
                    <?php

                        include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

                          $consulta="SELECT * FROM listadeprecios where activa=1;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[id]."'>(".$fila[id].")-".$fila[descripcion]."</option>";
                          }
                      ?>
                  </select>
                </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                  <label>Servicio:</label>
                  <select class="form-control" name="tipo">
                    <option value=''>Seleccionar</option>
                    <?php

                          $consulta="SELECT * FROM servicio;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[idServicio]."'>(".$fila[idServicio].")-".$fila[descripcion]."</option>";
                          }
                      ?>
                  </select>
                </div>
                </div>
              </div>

<br>
              <div class="row">
                <div class="col-xs-2">
                  <label>Valor fijo:</label>
                  <input type="number" class="form-control" name="fijo" value="0">
                </div>

                <div class="col-xs-2">
                   <label>Valor por hora:</label>
                  <input type="number" class="form-control" name="hora" value="0">
                </div>
 
                <div class="col-xs-2">
                  <label>Valor por km:</label>
                  <input type="number" class="form-control" name="km" value="0">
                </div>
                
              </div>
       

<br><br>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>

        
      </div>
      <!-- /.box -->




</section>

<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listado de precios</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

            <!-- /.box-header -->
            <div class="box-body">


              <table id="example2" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>Id</th>
                  <th>Tipo Vehiculo</th>
                  <th>Servicio</th>
                  <th>Valor KM</th>
                  <th>Valor fijo</th>
                  <th>Valor hora</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody id="listado">
                  

                </tbody>
               
              </table>
        
          </div>

</section>
      <!-- /.box -->

<script type="text/javascript">

function listar(){

  var id=  $('select[name=lista]').val();

  var url = "listarprecios.php";
        $.ajax({                                       
           url: url,                     
           data:{"id": id}, 
           method : 'post',
           dataType : 'json',
           success: function(data)             
           {
              $('#listado').html(data);
           },
           error: function(data)             
           {
              $('#listado').html(data);        
           }
         });

      

  }


</script>