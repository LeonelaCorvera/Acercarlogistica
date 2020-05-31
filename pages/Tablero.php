
    <section class="content-header">
      <h1>
        Dashboard
        <small>Pagina principal</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
     



  <div class='col-md-3 col-sm-6 col-xs-12'>
          <div class='info-box bg-green'>
            
            <span class='info-box-icon'><i class='fa fa-motorcycle'></i></span>

            <div class='info-box-content'>
              <span class='info-box-text'>Liz Mendoza</span>
              <span class='info-box-text'>moto</span>
              <br>
              <a href='#' data-toggle='modal' data-target='#myModal' style='color:white';><span class='info-box-number'>
                 16 viajes
                <i class='fa fa-arrow-circle-right'></i>
                  </span></a>
            </div>

          </div>

      </div>

  <div class="control-sidebar-bg"></div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Listado de viajes</h4>
      </div>
      <div class="modal-body" style="overflow-y: scroll;height:200px;">
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>D.N.I</th>
                  <th>Telefono</th>
                  <th>Id vehiculo</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                

                  <?php


                    include('listarchoferes.php');


                  ?>


                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>D.N.I</th>
                  <th>Telefono</th>
                  <th>Id vehiculo</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



  <script language="Javascript">

      function listado() {
          
      }

</script>