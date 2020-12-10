 
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Calcular ganacias</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

     <div class="box-body">

      <table id="tabla" action="insertarvehiculo.php" method="post">
              <div class="row">
                <div class="col-xs-3">
                    <label>Desde:</label>
                    <input type="date" class="form-control pull-right" name="desde" id="desde">
                </div>
                <div class="col-xs-3">
                    <label>Hasta:</label>
                    <input type="date" class="form-control pull-right" name="hasta" id="hasta">
                </div>
                
            </div>
<br><br>
               <div class="box-footer" >
                   <button type="button" class="btn btn-success pull-right" onclick="javascript:window.imprimirDIV('ID_DIV');">Imprimir</button>
                   <button type="button" class="btn btn-warning pull-right" id="submitExport" onclick="exportTableToExcel('export_to_excel', 'Ganancias')">Exportar</button>
                   <button type="button" class="btn btn-primary pull-right" onclick="consulta()">Buscar</button>
                
              </div>
        </table>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->


</section>



<section class='content' id="ID_DIV">

  <form action="process.php" method="post" target="_blank" id="formExport">
    <input type="hidden" id="data_to_send" name="data_to_send" />
</form>

      <!-- SELECT2 EXAMPLE -->
      <div class='box box-default'>
        <div class='box-header with-border'>
          <h3 class='box-title'> Detalle de viajes</h3>

          <div class='box-tools pull-right'>
            <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class='box-body'>

      <table id="export_to_excel" class='table table-bordered table-striped' border="1">
                <thead>

                <tr>
                  <th>Id</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Comision</th>
                  <th>Servicio</th>
                  <th>Chofer</th>
                  <th>Cliente</th>
                  <th>Importe</th>
                </tr>
                </thead>
                <tbody id='lista'>
                

                </tbody>
                <tfoot>
                <tr>
                  <th colspan='7'>Total</th>
                  <th id="total">0</th>
                </tr>
                </tfoot>
              </table>
      </div>
   </section>

                


<script>

  function consulta(){  

  var desde=$("#desde").val();
  var hasta=$("#hasta").val();


  var url = "calcularganancia.php";
  $.ajax({                                       
     url: url,                     
     data:{"desde": desde,"hasta":hasta}, 
     method : 'post',
     dataType : 'json',
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
 

function calcularTotal(){
  //Defino los totales de mis 2 columnas en 0
  var total_col = 0;
  //Recorro todos los tr ubicados en el tbody
  $('#export_to_excel tbody').find('tr').each(function (i, el) {
             
        //Voy incrementando las variables segun la fila ( .eq(0) representa la fila 1 )     
        total_col += parseFloat($(this).find('td').eq(7).text());
                
    });
    //Muestro el resultado en el th correspondiente a la columna
    $('#export_to_excel tfoot tr th').eq(1).text(total_col);

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

 function imprimirDIV(contenido) {
        var ficha = document.getElementById(contenido);
        var ventanaImpresion = window.open(' ', 'popUp');
        ventanaImpresion.document.write(ficha.innerHTML);
        ventanaImpresion.document.close();
        ventanaImpresion.print();
        ventanaImpresion.close();
    }


</script>