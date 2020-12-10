<html><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index.php"><b>Acercar</b>logistica</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register un nuevo usuario</p>



    <form action="registrar_logica.php" method="post" >

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" autocomplete="nope" name="usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <p id="msjuser" class="text-danger"></p>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email" autocomplete="nope" name="email" onblur="validarEmail(this.value);">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <p id="msj" class="text-danger"></p>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="password" onblur="validarPassword(this.value);">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <p id="msj2" class="text-danger"></p>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="repite" placeholder="Repetir contraseña">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <p id="msj3" class="text-danger"></p>
      </div>
      <div class="row">
        

<br><br>
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary pull-right">Registrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  function validarEmail(valor) {

  
   var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
   var msj= document.getElementById('msj');
    
    if (emailRegex.test(valor)) {
      event.target.style.background = "";  
      msj.innerText = ""; 
    } else {
      event.target.style.background = "pink";
      msj.innerText = "El dato debe tener formado de email";  
    } 

  }

  function validarPassword(valor) {

 
   var msj2= document.getElementById('msj2');;
    
    if (valor.length != 0) {
      event.target.style.background = "";  
      msj2.innerText = ""; 
    } else {
      event.target.style.background = "pink";
      msj2.innerText = "Debe ingresar una contraseña";  
    } 

  }
 


</script>


</body></html>