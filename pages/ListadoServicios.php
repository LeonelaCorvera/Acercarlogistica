

<section class="content-header">
      <h1>
        Servicios
      </h1>

</section>

<section class="content">

      
      <div class="row">



        <div class="col-xs-12">
       

          <div class="box">

            

            <div class="box-header">
              <h3 class="box-title">Lista de servicios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="col-xs-3">
                 <label onclick="document.getElementById('c1').submit();">
                      <input  name="c1" type="checkbox" checked data-toggle="toggle" data-on="Activos" data-off="Inactivos" data-onstyle="success" data-offstyle="danger" >
                  </label>
                </div>


              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Descripcion</th>
                  <th>fijo</th>
                  <th>Hora</th>
                  <th>Km</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                

                  <?php


                    include('listarservicios.php');


                  ?>


                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Descripcion</th>
                  <th>fijo</th>
                  <th>Hora</th>
                  <th>Km</th>
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
        <h4>Seguro que desea deshabilitar este servicio?</h4>
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