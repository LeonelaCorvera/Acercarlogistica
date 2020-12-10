<!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
<!-- Select2 -->
  <script src="bower_components/select2/dist/js/select2.full.min.js"></script>

<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Filtrar solicitudes</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">

      <form id="myForm" action="listarviajes.php" method="post">
              <div class="row">

                <div class="col-xs-2">
                    <label>Fecha de carga desde:</label>
                    
                      <input type="date" class="form-control pull-right" id="fecha_carga_desde">
                </div>

                

                <div class="col-xs-2">
                    <label>Fecha de carga hasta:</label>
                    
                      <input type="date" class="form-control pull-right" id="fecha_carga_hasta">
                </div>

                

                  <div class="col-xs-3">
                    <div class="form-group">
                      <label>Cliente:</label>
                      <select class="form-control" name="cliente" id="cliente" >
                        <option value='0'>Seleccionar</option>
                          <?php

                            include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

                              $consulta="SELECT * FROM cliente where estado=1;";
                              $resultado=db_query($consulta);

                              foreach($resultado as $fila){

                                echo "<option value='".$fila[idcliente]."'>".$fila[razon_social]."</option>";
                              }
                          ?>
                      </select>
                  </div>
                </div>

                 <div class="col-xs-2">
                  <div class="form-group">
                    <label>Estado:</label>
                    <select class="form-control" name="estado" id="estado" >
                      <option value='0'>Seleccionar</option>
                      <option value='ASIGNADO'>ASIGNADO</option>
                      <option value='EN CURSO'>EN CURSO</option>
                      <option value='FINALIZADO'>FINALIZADO</option>
                    </select>
                  </div>
                </div>

                <div class="col-xs-2">
                  <div class="form-group">
                    <label>Comision paga:</label>
                    <select class="form-control" name="comisionpaga" id="comisionpaga" >
                      <option value='3'>Seleccionar</option>
                      <option value='1'>Si</option>
                      <option value='0'>No</option>
                    </select>
                  </div>
                </div>
                

            </div>

            <div class="row">

            <div class="col-xs-3">
                  <div class="form-group">
                  <label>Chofer:</label>
                  <select class="form-control" name="chofer" id="chofer">
                    <option value='0'>Seleccionar</option>
                      <?php

                          $consulta="SELECT * FROM chofer where flagBaja =1;";
                          $resultado=db_query($consulta);

                          foreach($resultado as $fila){

                            echo "<option value='".$fila[idChofer]."'>".$fila[nombre]." ".$fila[Apellido]."</option>";
                          }
                      ?>
                  </select>
                </div>
                </div>


            <div class="col-xs-3">
                  <div class="form-group">
                    <label>Servicio:</label>
                    <select class="form-control" name="servicio" id="servicio" >
                      <option value='0'>Seleccionar</option>
                        <?php

                            $consulta="SELECT * FROM servicio where estado =1;";
                            $resultado=db_query($consulta);

                            foreach($resultado as $fila){

                              echo "<option value='".$fila[idServicio]."'>".$fila[descripcion]."</option>";
                            }
                        ?>
                    </select>
                  </div>
                </div>


              


                <div class="col-xs-3">
                  <div class="form-group">
                    <label>Tipo de vehiculo:</label>
                    <select class="form-control" name="tipo_vehiculo" id="tipo_vehiculo" >
                      <option value='0'>Seleccionar</option>
                        <?php

                            $consulta="SELECT * FROM tipodevehiculo;";
                            $resultado=db_query($consulta);

                            foreach($resultado as $fila){

                              echo "<option value='".$fila[idTipoDeVehiculo]."'>".$fila[descripcion]."</option>";
                            }
                        ?>
                    </select>
                  </div>
                </div>





            </div>


            <div class="row">
                

                <div class="col-xs-2">
                    <label>Fecha de viaje:</label>
                    
                      <input type="date" class="form-control pull-right" id="fecha_viaje">
                </div>

                <div class="col-xs-2">
                    <label>Fecha de fin:</label>
                    
                      <input type="date" class="form-control pull-right" id="fecha_fin">
                </div>

                <div class="col-xs-2">
                    <label>Fecha de asignado:</label>
                    
                      <input type="date" class="form-control pull-right" id="fecha_asignado">
                </div>

                <div class="col-xs-2">
                    <label>Fecha de en curso:</label>
                    
                      <input type="date" class="form-control pull-right" id="fecha_curso">
                </div>


            </div>
<br><br>
               <div class="box-footer" >
                   <button type="button" class="btn btn-success pull-right"  onclick="javascript:window.imprimirDIV('ID_DIV');">Impimir</button>
                   <button type="button" class="btn btn-warning pull-right" onclick="exportTableToExcel('tblData', 'Reporte')">Exportar</button>
                   <button type="button" class="btn btn-primary pull-right" onclick="buscar()">Buscar</button>
                
              </div>
        </form>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->


</section>
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"> Listado de solicitudes</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body" >

     <div style="overflow-y: scroll;height:400px; width: 99%" id="ID_DIV">

      <table id="tblData" class="table table-bordered table-striped"  border="1">
                <thead>

                <tr>
                  <th>Id</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Cliente</th>
                  <th>Servicio</th>
                  <th>Comision Paga</th>
                  <th>Estado</th>
                  <th>Chofer</th>
                  <th>Tipo vehiculo</th>
                  <th>F. Carga</th>
                  <th>F. Fin</th>
                  <th>F. Asignado</th>
                  <th>F. Curso</th>
                  <th>Importe</th>
                </tr>
                </thead>
                <tbody id="lista">
                  
                </tbody>
                <tfoot>
                <tr>
                 <th colspan="13">Total</th>
                  <th>0</th>
                  
                </tr>
                </tfoot>
              </table>
              </div>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->
</section>


<script>
    function imprimirDIV(contenido) {
        var ficha = document.getElementById(contenido);
        var ventanaImpresion = window.open(' ', 'popUp');
        ventanaImpresion.document.write(ficha.innerHTML);
        ventanaImpresion.document.close();
        ventanaImpresion.print();
        ventanaImpresion.close();
    }
</script>






<script>

 function calcularTotal(){
  //Defino los totales de mis 2 columnas en 0
  var total_col = 0;
  //Recorro todos los tr ubicados en el tbody
  $('#tblData tbody').find('tr').each(function (i, el) {
             
        //Voy incrementando las variables segun la fila ( .eq(0) representa la fila 1 )     
        total_col += parseFloat($(this).find('td').eq(13).text());
                
    });
    //Muestro el resultado en el th correspondiente a la columna
    $('#tblData tfoot tr th').eq(1).text(total_col);

}


  function ver(){

    var formulario = document.forms['formulario'];
    var campo = formulario['campo'].value;

    console.log(formulario);
  }



function buscar(){

  var fecha_carga_desde = $('#fecha_carga_desde').val();
  var fecha_carga_hasta = $('#fecha_carga_hasta').val();
  var cliente =  $('#cliente').val();
  var estado =  $('#estado').val();
  var chofer =  $('#chofer').val();
  var servicio = $('#servicio').val();
  var tipo_vehiculo = $('#tipo_vehiculo').val();
  var fecha_viaje = $('#fecha_viaje').val();
  var fecha_fin = $('#fecha_fin').val();
  var fecha_asignado = $('#fecha_asignado').val();
  var fecha_curso = $('#fecha_curso').val();
  var comisionpaga = $('#comisionpaga').val();

//console.log(fecha_carga_desde,fecha_carga_hasta,cliente,estado,chofer,servicio,tipo_vehiculo,fecha_viaje,fecha_fin,fecha_asignado,fecha_curso);

 var url = "listarviajes.php";
        $.ajax({                                       
         url: url,    
         data : {"fecha_carga_desde": fecha_carga_desde,
         "fecha_carga_hasta":fecha_carga_hasta,
         "cliente":cliente,
         "estado":estado,
         "chofer":chofer,
         "servicio":servicio,
         "tipo_vehiculo":tipo_vehiculo,
         "fecha_viaje":fecha_viaje,
         "fecha_fin":fecha_fin,
         "fecha_asignado":fecha_asignado,
         "comisionpaga":comisionpaga,
         "fecha_curso":fecha_curso},
         method : 'post',
         type : 'json',
         success: function(data)             
         {
          $('#lista').html(data);
          calcularTotal();
          
         },
         error: function(data)             
         {
            $('#lista').html(data);
            calcularTotal();
           
         }

       });

 }

 function exportTableToExcel(tableID, filename){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}


</script>