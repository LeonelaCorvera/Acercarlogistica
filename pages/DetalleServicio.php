<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet" />
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Detalle Servicio</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">


              <div class="row">
                <div class="col-xs-3">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" disabled>
                </div>
                <div class="col-xs-3">
                  <label>Descripcion:</label>
                  <input type="text" class="form-control" disabled>
                </div>
              </div>

<br>
              <div class="row">
                <div class="col-xs-2">
                  <h4>Valor fijo:</h4>
                 <label onclick="document.getElementById('c1').submit();">
                      <input  name="c1" type="checkbox"  data-toggle="toggle" data-on="ON" data-off="OFF" data-onstyle="primary" data-offstyle="danger" disabled>
                  </label>
                </div>

                <div class="col-xs-2">
                   <h4>Valor por hora:</h4>
                 <label onclick="document.getElementById('c1').submit();">
                      <input  name="c1" type="checkbox"  data-toggle="toggle" data-on="ON" data-off="OFF" data-onstyle="primary" data-offstyle="danger" disabled>
                  </label>
                </div>

                <div class="col-xs-2">
                  <h4>Valor por km:</h4>
                 <label onclick="document.getElementById('c1').submit();"> 
                      <input  name="c1" type="checkbox"  data-toggle="toggle" data-on="ON" data-off="OFF" data-onstyle="primary" data-offstyle="danger" disabled>
                  </label>
                </div>
                
              </div>
<br><br>
             

        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->
