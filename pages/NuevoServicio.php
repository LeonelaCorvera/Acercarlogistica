
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nuevo Servicio</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">


            <form action="insertarsericio.php" method="POST">

              <div class="row">
                <div class="col-xs-3">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" name="des">
                </div>
              </div>

<br>
              <div class="row">
                <div class="col-xs-2">
                  <h4>Valor fijo:</h4>
                 <label onclick="document.getElementById('c1').submit();">
                      <input  name="fijo" type="checkbox"  data-toggle="toggle" data-on="ON" data-off="OFF" data-onstyle="primary" data-offstyle="danger" >
                  </label>
                </div>

                <div class="col-xs-2">
                   <h4>Valor por hora:</h4>
                 <label onclick="document.getElementById('c1').submit();">
                      <input  name="hora" type="checkbox"  data-toggle="toggle" data-on="ON" data-off="OFF" data-onstyle="primary" data-offstyle="danger" >
                  </label>
                </div>

                <div class="col-xs-2">
                  <h4>Valor por km:</h4>
                 <label onclick="document.getElementById('c1').submit();"> 
                      <input  name="km" type="checkbox"  data-toggle="toggle" data-on="ON" data-off="OFF" data-onstyle="primary" data-offstyle="danger" >
                  </label>
                </div>
                
              </div>
<br><br>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
            </form>

        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->
