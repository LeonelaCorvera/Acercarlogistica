
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Cambio de contraseña</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">

 <br>

 		<form action="cambiarcontrasenia.php" method="post">

              <div class="row">
                <div class="col-xs-4">
                  <label>Ingrese contraseña actual:</label>
                  <input type="password" class="form-control" name="contActual" required>
                </div>

              </div>
 <br>
               <div class="row">
                
                <div class="col-xs-4">
                   <label>Ingrese contraseña nueva:</label>
                  <input type="password" class="form-control" name="contNueva" required>
                </div>
 
               
                
              </div>
 <br>
               <div class="row">
             
                <div class="col-xs-4">
                  <label>Repita contraseña nueva:</label>
                  <input type="password" class="form-control" name="repita" required>
                </div>
                
              </div>
       
    <br><br>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Cambiar contraseña</button>
              </div>
          </form>
        
      </div>
      <!-- /.box -->




</section>
