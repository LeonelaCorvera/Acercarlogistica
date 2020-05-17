<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

<style type="text/css">

  #mapid { 
    height: 380px; 
  }

  </style>

<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Nueva solicitud</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">

      <table id="example1" action="insertarcliente.php" method="post">
              <div class="row">
                <div class="col-xs-3">
                  <label>Fecha:</label>
                  <input type="text" class="form-control" name="razonSocial">
                </div>
                <div class="col-xs-3">
                  <label>Hora:</label>
                  <input type="text" class="form-control" name="contacto">
                </div>
            </div>
<br>
            <div class="row">
                <div class="col-xs-4">
                  <div class="form-group">
                  <label>Cliente:</label>
                  <select class="form-control" name="tipo">
                    <option>1</option>
                  </select>
                </div>
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                  <label>Servicio:</label>
                  <select class="form-control" name="tipo">
                    <option>1</option>
                  </select>
                </div>
                </div>
                
            </div>

            <div id="mapid"></div>
<br>           
             <div class="row">
              <div class="col-xs-3">
                  <label>Calle:</label>
                  <input type="text" class="form-control" name="doc">
                </div>
                <div class="col-xs-2">
                  <label>Altura:</label>
                  <input type="text" class="form-control" name="doc">
                </div>

                <div class="col-xs-2">
                  <label>Piso:</label>
                  <input type="text" class="form-control" name="doc">
                </div>

                <div class="col-xs-2">
                  <label>Depto:</label>
                  <input type="text" class="form-control" name="doc">
                </div>
               
                <div class="col-xs-2">
                  <br>
                  <button type="submit" class="btn btn-success">Buscar</button>
                </div>
            </div>
<br>


            <div class="row">
              <div class="col-xs-3">
                  <label>Calle:</label>
                  <input type="text" class="form-control" name="doc">
                </div>
                <div class="col-xs-2">
                  <label>Altura:</label>
                  <input type="text" class="form-control" name="doc">
                </div>

                <div class="col-xs-2">
                  <label>Piso:</label>
                  <input type="text" class="form-control" name="doc">
                </div>

                <div class="col-xs-2">
                  <label>Depto:</label>
                  <input type="text" class="form-control" name="doc">
                </div>
               
                <div class="col-xs-2">
                  <br>
                  <button type="submit" class="btn btn-success">Buscar</button>
                </div>
             </div>

                

               <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
        </table>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->
<script>

var mymap = L.map('mapid').setView([-34.60721491, -58.4577942], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1IjoibGVvbmVsYWNvcnZlcmE5MCIsImEiOiJja2E3djFnd2YwMXo5MnFtaDA4Z3B6YXgwIn0.A1NhXamH0BoSUjRuanbqKw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);

var marker = L.marker([51.5, -0.09]).addTo(mymap);

</script>