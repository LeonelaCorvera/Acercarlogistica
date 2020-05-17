<section class="content">
		<div class="row">
		        <div class="col-md-4">
		          <div class="box">
		            <div class="box-header with-border">
		              <h3 class="box-title">Choferes</h3>

		               <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">

		            	<div class="form-group" style="width: 89%;">
				            <label>Tipo de vehiculo:</label>
				            <select class="form-control select2" name="tipo">
				               <option>Seleccionar</option>
				            </select>
			             </div>

		              <div class="row">
		                
		              	<div class="box-body chat" style="overflow-y: scroll; height:360px; width: 98%;">

		              		<table  class="table table-bordered table-striped">
			                <thead>

				                <tr>
					                <th></th>
					                <th>Id</th>
					                <th>Chofer</th>
				                </tr>
				                </thead>
				                <tbody>

				                  <?php

				                  	include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';
				                    include('choferespresentes.php');


				                  ?>
				                </tbody>
				               
			              </table>



		              	</div>






		              </div>
		              <!-- /.row -->
		            </div>
		         
		            <!-- /.box-footer -->
		          </div>
		          <!-- /.box -->
		        </div>
		        <!-- /.col -->

		 	<div class="col-md-8">
		          <div class="box">
		            <div class="box-header with-border">
		              <h3 class="box-title">Viajes pendientes</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		            	<button type="submit" class="btn btn-warning pull-right">Asignar</button>
		              <div class="row" >
		              	<div class="box-body chat" style="overflow-y: scroll; height:400px; width: 99%;">
		                
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
		              <!-- /.row -->
		            </div>
		            <!-- /.box-footer -->
		          </div>
		          <!-- /.box -->
		        </div>











		        <!-- /termina row --> 
		     </div>

		<div class="row">
		        <div class="col-md-12">
		          <div class="box">
		            <div class="box-header with-border">
		              <h3 class="box-title">Viajes Asignados</h3>

		               <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		            	<button type="submit" class="btn btn-danger pull-right">Reasignar</button>
		            	<button type="submit" class="btn btn-danger pull-right" style="background-color: #088A68; border-color: #088A68;">Asignado</button>
		            	<button type="submit" class="btn btn-danger pull-right" style="background-color: #BF00FF; border-color: #BF00FF;">En curso</button>
		            	<button type="submit" class="btn btn-danger pull-right" style="background-color: #FE9A2E; border-color: #FE9A2E;">Finalizado</button>
		              <div class="row">
		                <div class="box-body chat" color="white" style="overflow-y: scroll; height:400px; width: 99%;">
		              	 <table id="example2" class="table table-bordered table-striped">
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

				                    include('listarviajesasignados.php');


				                  ?>
				                </tbody>
				                
			              </table>
			             </div>

		              </div>
		              <!-- /.row -->
		            </div>
		         
		            <!-- /.box-footer -->
		          </div>
		          <!-- /.box -->
		        </div>
		        <!-- /.col -->
		        <!-- /termina row --> 
		      </div>


     

</section>