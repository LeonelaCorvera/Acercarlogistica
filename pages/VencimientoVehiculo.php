<div id="resp">
<section class="content">

      
      <div class="row">



        <div class="col-xs-12">
       

          <div class="box">

            

            <div class="box-header">
              <h3 class="box-title">Vencimientos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">



              <table id="example" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>Id Vehiculo</th>
                  <th>Patente</th>
                  <th>V.Seguro</th>
                  <th>Dias venc.</th>
                  <th>V.VTV</th>
                  <th>Dias venc.</th>
                  <th>V.Patente</th>
                  <th>Dias venc.</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  

                  <?php

                    include('listarvencimientovehiculo.php');

                  ?>


                </tbody>
                <tfoot>
                <tr>
                  <th>Id Vehiculo</th>
                  <th>Patente</th>
                  <th>V.Seguro</th>
                  <th>Dias venc.</th>
                  <th>V.VTV</th>
                  <th>Dias venc.</th>
                  <th>V.Patente</th>
                  <th>Dias venc.</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
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

<div class="modal fade" id="modalConfirmRefresh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify " role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <h4>Seguro que desea restaurar este buckup?</h4>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fa fa-refresh fa-4x animated rotateIn text-yellow"></i>

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


</div>
<script>
function sendId(id){  
  
        var url = "pages/EditVehiculo.php";
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
      title: 'Esta seguro que desea eliminar este vehiculo?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si eliminalo!'
    }).then((result) => {
      if (result.isConfirmed) {

        var url = "deletevehiculo.php";
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
              
            }
          })
             
                        
           }
       });
        
        
      }
    })
  
        
}


</script>