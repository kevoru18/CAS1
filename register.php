<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:login.html");

}

?>
<head>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistema Control de Activos Comixmul">
  <meta name="author" content="Kevin Rubí">

  <title>Control de Activos - Registro</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crear un usuario nuevo!</h1>
              </div>
              <form class="user" method="post" action="validations/validate.php">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input   type="text" class="form-control form-control-user" id="name" placeholder="Nombre Completo">
                  </div>
                  <div class="col-sm-6">
                    <input  type="text" class="form-control form-control-user" id="phone-number" placeholder="Número Telefónico">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input  type="text" class="form-control form-control-user" id="Position" placeholder="Cargo">
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text"  class="form-control form-control-user" id="Office" placeholder="Sucursal">
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                 <select class="browser-default custom-select">
                        <!--<select class="form-control form-control-user" id="sel1">-->
                          <option selected value="">Permisos de acceso</option>
                          <option value=1>1 Supervisor</option>
                          <option value=2>2 Contador</option>
                 </select>
                </div>
                
                    
                <div class="col-sm-6 mb-3 mb-sm-0">
                 <select class="browser-default custom-select">
                        <!--<select class="form-control form-control-user" id="sel1">-->
                          <option selected value="">Escoja el estado...</option>
                          <option value=1>1 Activo</option>
                          <option value=2>2 Inactivo</option>
                 </select>
                </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="user_name" placeholder="Nombre de usuario">
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12  mb-sm-0">
                    <input type="email" style="text-align:center;" class="form-control form-control-user" id="email" placeholder="Correo Electrónico Corporativo">
                  </div>
                  
                </div>
                <input type="submit" value="Registrar cuenta" class="btn btn-primary btn-user btn-block">
                 
                </input>
               
              </form>
              <hr>
              <!--<div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>-->
              
            </div>
          </div>
        
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
