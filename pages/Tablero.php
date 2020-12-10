<style type="text/css">

 .btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}

  </style>



    <section class="content-header">


<?php

/*
if(session_get('rol')!=3 and session_get('rol')!=null){
  
  echo "<h1>
          Tablero
          <small>Disponibilidades</small>
          
        </h1>";


}else{
  
   echo "<h1>
          Inicio
          <small>Bienvenido</small>
          
        </h1>";

}


*/


 ?>
      

</section>

    <!-- Main content -->
<div>
    <section class="content">
     



<?php


if(session_get('rol')!=3 and session_get('rol')!=null){
  
include('listartablero.php');

}





 ?>

  <div class="control-sidebar-bg"></div>
</section>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="height:600px;width:800px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Listado de viajes</h4>
      </div>
<section class="content">  
            <div class="row">
                <div class="col-xs-3">
                    Chofer: <input type="text"  class="form-control" name="idchofer" id="idchofer" value="">
                </div>
            </div>
            <div class="row">
              <div class="modal-body" style="overflow-y: scroll;height:390px;width:800px; ">
                <table  class="table table-bordered table-striped">
                              <thead>

                        <tr>
                          <th><input type="checkbox"></th>
                          <th>Id</th>
                          <th>Fecha</th>
                          <th>Hora</th>
                          <th>Comision Paga</th>
                          <th>Valor Viaje</th>
                          <th>Servicio</th>
                          <th>Chofer</th>
                          <th>Cliente</th>
                          <th>kms</th>
                          <th>Fecha Asignado</th>
                          <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody>

                          <?php
                       

                            include('listarviajespendientes.php');


                          ?>

                        </tbody>
                       
                    </table>
                </div>
            </div>
</section>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary pull-right" data-dismiss="modal" onclick="asignar()">Asignar</button>
      </div>
    </div>
  </div>
</div>



  <script language="Javascript">


      $(".pop-ups").hide();

       function desplegar() {
          $(".pop-ups").show();
        }
        function ocultar() {
          $(".pop-ups").hide();
        }


var cho=0;

    function hola(numero) {

       cho=numero;
      $("#idchofer").val(numero);

     
      };

      function asignar(){

          var valoresCheck="";
          var cont=0;

          $("input[type=checkbox]:checked").each(function(){
              
              if (cont>0) {
                valoresCheck+=" , ";
              }
              valoresCheck+=this.value;
              cont++;
          });


          var url = "asignar.php";
                $.ajax({                                       
                   url: url,                     
                   data:{"ids": valoresCheck,"chofer": cho}, 
                   method : 'post',
                   dataType : 'json',
                   success: function(data)             
                   {
                     location.reload();             
                   },
                   error: function(data)             
                   {
                     location.reload();            
                   }
                 });

}

  function llego(chofer){

    var url = "llego.php";
                $.ajax({                                       
                   url: url,                     
                   data:{"chofer": chofer}, 
                   method : 'post',
                   dataType : 'json',
                   success: function(data)             
                   {
                     location.reload();             
                   },
                   error: function(data)             
                   {
                     location.reload();            
                   }
                 });

                var user = document.getElementsByName("usuario");
               


  }         

  
  function activar(chofer){

    var url = "activar.php";
                $.ajax({                                       
                   url: url,                     
                   data:{"chofer": chofer}, 
                   method : 'post',
                   dataType : 'json',
                   success: function(data)             
                   {
                     location.reload();             
                   },
                   error: function(data)             
                   {
                     location.reload();            
                   }
                 });

   }  

    function desactivar(chofer){

    var url = "desactivar.php";
                $.ajax({                                       
                   url: url,                     
                   data:{"chofer": chofer}, 
                   method : 'post',
                   dataType : 'json',
                   success: function(data)             
                   {
                     location.reload();             
                   },
                   error: function(data)             
                   {
                     location.reload();            
                   }
                 });

   }  

</script>