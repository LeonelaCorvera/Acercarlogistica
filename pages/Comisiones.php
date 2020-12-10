
<section class="content">

    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Calcular comision</h3>
      </div>

     <div class="box-body">
      <div class="col-xs-4">
        <label>Chofer:</label>
        <select class="form-control select2" name="chofer" id="chofer">
           <option value="0">Seleccionar</option>
           <?php

            include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

              $consulta="SELECT * FROM acercarlogistca.chofer;";
              $resultado=db_query($consulta);

              foreach($resultado as $fila){

                echo "<option value='".$fila[idChofer]."'>(".$fila[idChofer].")-".$fila[nombre]." ".$fila[Apellido]."</option>";
              }
          ?>
        </select>
     </div>
    </div>    

<br>
        <div class="box-footer" >
           <button type="button" class="btn btn-success pull-right" onclick="javascript:window.imprimirDIV('ID_DIV');">Imprimir</button>
           <button type="button" class="btn btn-warning pull-right" onclick="exportTableToExcel('tblData', 'Comisiones')">Exportar</button>
           <button type="button" class="btn btn-primary pull-right" onclick="consulta();">Buscar comisiones pendientes</button>
        </div>
  </div>
</section>
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"> Detalle de viajes</h3>

          
        <!-- /.box-header -->

     <div class="box-body" id="ID_DIV">

      <table id="tblData" class="table table-bordered table-striped" border="1">
                <thead>

                <tr>
                  <th>Id</th>
                  <th>Fecha</th>
                  <th>Servicio</th>
                  <th>Chofer</th>
                  <th>Cliente</th>
                  <th>vehiculo</th>
                  <th>Importe</th>
                </tr>
                </thead>
                <tbody id='lista'>
                

                </tbody>
                <tfoot>
                <tr>
                 <th colspan="6">Total</th>
                  <th>0</th>
                  
                </tr>
                </tfoot>
              </table>
        <!-- /.box-body -->
       
      </div>
      <div class="box-footer" >
           <button type='button' class="btn btn-primary pull-right" onclick="cobrar();">Cobrar</button>
      </div>
     
</section>



<script>

   function consulta(){  



    var chofer=$("#chofer").val();


    var url = "calcularcomision.php";
    $.ajax({                                       
       url: url,                     
       data:{"chofer": chofer}, 
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
  $('#tblData tbody').find('tr').each(function (i, el) {
             
        //Voy incrementando las variables segun la fila ( .eq(0) representa la fila 1 )     
        total_col += parseFloat($(this).find('td').eq(6).text());
                
    });
    //Muestro el resultado en el th correspondiente a la columna
    $('#tblData tfoot tr th').eq(1).text(total_col);

};



function cobrar(){  


  Swal.fire({
      title: '¿Esta seguro que desea dar por cobradas las comisiones del chofer?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si'
    }).then((result) => {
      if (result.isConfirmed) {

      var chofer= document.getElementById("chofer").value;

        var url = "cobrarcomision.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data:{"chofer": chofer}, 
           success: function(data)             
           {   
           Swal.fire({
            title: 'Exito!',
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok'
          }).then((result) => {
            if (result.isConfirmed) {
               location.reload();
            }
          })
             
                        
           }
       });
        
        
      }
    })
  
        
}

    function imprimirDIV(contenido) {
        var ficha = document.getElementById(contenido);
        var ventanaImpresion = window.open(' ', 'popUp');
        ventanaImpresion.document.write(ficha.innerHTML);
        ventanaImpresion.document.close();
        ventanaImpresion.print();
        ventanaImpresion.close();
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