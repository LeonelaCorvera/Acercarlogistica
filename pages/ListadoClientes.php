<div id="resp">

<section class="content">

      
      <div class="row">



        <div class="col-xs-12">
       

          <div class="box">

            

            <div class="box-header">
              <h3 class="box-title">Lista de clientes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">



              <table id="example2" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>Id</th>
                  <th>Razon social</th>
                  <th>Contacto</th>
                  <th>Tip.Doc.</th>
                  <th>Documento</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Fecha de alta</th>
                  <th>Lista de precio</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  

                  <?php


                    include('listarclientes.php');


                  ?>


                </tbody>
                
              </table>
            </div>
            
        </div>


        

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>


      

</section>



<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify " role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <h4>Seguro que desea deshabilitar este vehiculo?</h4>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fa fa-trash fa-4x animated rotateIn text-red"></i>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="" class="btn btn-default pull-left">Si</a>
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

<script>
function sendId(id){  
  
        var url = "pages/EditCliente.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data:{"id": id}, 
           success: function(data)             
           {
             $('#resp').html(data);               
           }
       });
}


function deshabilitar(id){  


  Swal.fire({
      title: '¿Esta seguro que desea eliminar este cliente?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si eliminalo!'
    }).then((result) => {
      if (result.isConfirmed) {

        var url = "deletecliente.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data:{"id": id}, 
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



</script>

</div>
