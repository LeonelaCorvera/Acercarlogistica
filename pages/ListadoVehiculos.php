


<section class="content-header">
      <h1>
        Vehiculos
      </h1>

</section>

<section class="content">

      
      <div class="row">



        <div class="col-xs-12">
       

          <div class="box">

            

            <div class="box-header">
              <h3 class="box-title">Lista de vehiculos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="col-xs-3">
                 <label onclick="document.getElementById('c1').submit();">
                      <input  name="c1" type="checkbox" checked data-toggle="toggle" data-on="Activos" data-off="Inactivos" data-onstyle="success" data-offstyle="danger" >
                  </label>
                </div>

              <div style="overflow-y: scroll;height:400px; width: 99%">
              <table id="example" class="table table-bordered table-striped" >
                <thead>

                <tr>
                  <th>Id</th>
                  <th>Patente</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Año</th>
                  <th>Seguro al dia</th>
                  <th>Tipo</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  

                  <?php


                    include('listarvehiculos.php');


                  ?>


                </tbody>
                <tfoot>
                <tr>
                   <th>Id</th>
                  <th>Patente</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Año</th>
                  <th>Seguro al dia</th>
                  <th>Tipo</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
              </div>
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

$(document).ready(function() {
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
    } );
 
 
    var table = $('#example').DataTable({
"language": {
        search: 'Buscar:',
        "lengthMenu": "Mostrando _MENU_ registros por pagina",
        "zeroRecords": "Sin datos",
        "info": "Mostrando _PAGE_ de _PAGES_",
        "infoEmpty": "Sin registros",
        "infoFiltered": "(filtrados de _MAX_)",
paginate: {
    first: 'Primero',
    previous: 'Anterior',
    next: 'Siguiente',
    last: 'Último',
  }
    }
});
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );

</script>
 <script>
  $(function () {
    
    $('#example').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
