<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}

$usuario=  $_SESSION["usuario"];
$oficina=  $_SESSION["oficina"];
$permiso=  $_SESSION["permits"];
if ($permiso==="Contador") {
  //header("location:../index.php");

  include('../Conection/conexion.php');

  require("../Conection/config.php");
  
  //$conexion= $base->query("select * from user");
  //$registros=$conexion->fetchAll(PDO::FETCH_OBJ);
  
  $registros=$base->query("select * from user")->fetchAll(PDO::FETCH_OBJ);
  
  
  
  
  /*Funcion para desencriptar password */
  function desencriptar($texto){
    $key='comixmul2020';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($texto), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
    return $decrypted;
  }
  
  
  
  
  
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
    <link rel="shortcut icon" href="../img/logo.png" />
    <title>CAS COMIXMUL </title>
  
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="../vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Principal</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Maestro
        </div>
         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesActivos" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Activos</span>
          </a>
          <div id="collapsePagesActivos" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Oficinas:</h6>
              <!--<a class="collapse-item" href="login.html">Login</a>-->
              <a class="collapse-item" href="../sigua/activosigua.php">Oficina</a>
  
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
  
  
  
       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesSuministros" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Suministros</span>
          </a>
          <div id="collapsePagesSuministros" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Oficinas:</h6>
              <!--<a class="collapse-item" href="login.html">Login</a>-->
              <a class="collapse-item" href="../sigua/suministrosigua.php">Oficina</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesProveedores" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Proveedores</span>
          </a>
          <div id="collapsePagesProveedores" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Oficinas:</h6>
              <!--<a class="collapse-item" href="login.html">Login</a>-->
              <a class="collapse-item" href="../sigua/proveedoressigua.php">Oficina</a>
              
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
  
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesCompras" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Compras</span>
          </a>
          <div id="collapsePagesCompras" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Oficinas:</h6>
              <!--<a class="collapse-item" href="login.html">Login</a>-->
              <a class="collapse-item" href="../comprassigua/comprasigua.php">Oficina</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesentradas" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Entradas</span>
            </a>
            <div id="collapsePagesentradas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Entradas:</h6>
                <!--<a class="collapse-item" href="login.html">Login</a>-->
                <a class="collapse-item" href="../entrada/entrada.php">Oficina</a>
                
                <div class="collapse-divider"></div>
              </div>
              
            </div>
          </li>      
    
         
    
     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagessalida" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Salida</span>
            </a>
            <div id="collapsePagessalida" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Salida:</h6>
                <!--<a class="collapse-item" href="login.html">Login</a>-->
                <a class="collapse-item" href="../salida/salida.php">Oficina</a>
                
                <div class="collapse-divider"></div>
              </div>
              
            </div>
          </li>      
    
    
       
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Configuración
        </div>
  
        <!-- Nav Item - Pages Collapse Menu -->
        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesreportes" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Reportes</span>
          </a>
          <div id="collapsePagesreportes" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Opciones de Reportes:</h6>
              <!--<a class="collapse-item" href="login.html">Login</a>-->
              
              <a class="collapse-item" href="existencias.php">Listado de existencias</a>
              <a class="collapse-item" href="activosdebaja.php">Activos dados de baja</a>
              <a class="collapse-item" href="entrada_compra.php">Entrada por Compras</a>
              <a class="collapse-item" href="entrada_traslado.php">Entrada por Traslado</a>
              <a class="collapse-item" href="salida_compra.php">Salida por Traslado</a>
              <a class="collapse-item" href="valorlibros.php">Listado de valores en libros</a>
              <a class="collapse-item" href="repor_depre.php">Reporte de Depreciación</a>
              
  
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        
        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="../manual/manual.pdf">
            <i class="fas fa-fw fa-table"></i>
            <span>Ayuda</span></a>
        </li>
  <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->
  
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
  
        <!-- Main Content -->
        <div id="content">
  
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
  
            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                </div>
            </form>
  
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
  
           
              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                  
              
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Salir</span>
                  <!--! <img class="img-profile rounded-circle" src="C:\wamp\www\Activos Comixmul\img\prueba.jpg">-->
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
  
            </ul>
  
          </nav>
  
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Reporte Compras </h1>
<p class="mb-4"><?php echo $_SESSION["nombre"]?></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Ingrese la fecha:</h6>
    <form id="compraboton">
    <div class="row">
    <div class="col-6 col-sm-4" id="compraboton" >
    <input class="form-control bg-light border-1 small" id="fechacompra" required type="text" placeholder="AAAA-MM-DD">
    <input type="hidden" class='form-control' value='<?php echo $oficina ?>'id="officecompra">
    </div>
    <div class="" style="border:1px;">
    <input class='btn btn-primary' type="submit" id="compraboton" value="Generar reporte"></input>        
    
    </div>
    </form>
    </div>



   
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
           
        <!-- Footer -->
        <footer class="footer full-reset">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-xs-12 col-sm-6">
                          <h4 class="all-tittles">Acerca de</h4>
                          <p>
                              Control de Activos y Suministros COMIXMUL es un sistema de control de depreciación de activos de la institución financiera COMIXMUL.
                          </p>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                          <h4 class="all-tittles">Desarrollador</h4>
                          <ul class="list-unstyled">
                              <li><i class="fab fa-twitter"></i>&nbsp; <a  href="https://twitter.com/kevo_ruxo" target=»_blank»> Kevin Rubí </a></i></li>
                              
                         
                         
                          </ul>
                      </div>
                  </div>
              </div>
               <footer class="sticky-footer bg-white">
                  <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kevin Rubí 2020<span >  |  Control Activos y Suministros COMIXMUL</span></span>
                    </div>
                  </div>
                </footer>
          </footer>
  
  
  
  
        <!-- End of Footer -->
  
      </div>
      <!-- End of Content Wrapper -->
  
    </div>
    <!-- End of Page Wrapper -->
  
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  
  
  <!-- Modal Usuarios-->
  <div class="modal fade" id="modalagregar"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bmodal-header-success">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form id="mAgregar">
          <div class="modal-body ">
            <label>Nombre</label><input type="text" class="form-control input-sm" id="namea" >
            <label >Teléfono</label><input type="text" class="form-control input-sm" id="phonea" >
            <label >Cargo</label><input type="text" class="form-control input-sm" id="positiona" >
            <label >Oficina</label>
            <select class='form-control' id="officea">
                  <option >Siguatepeque</option>
                  <option >Otoro</option>
                  </select>
            <label >Permiso de acceso</label>
            <select class='form-control'id="permitsa">
                  <option >Administrador</option>
                  <option >Contador</option>
                  </select>
            <label >Estado</label>
                  <select class='form-control' id="statusa">
                  <option >Activo</option>
                  <option >Inactivo</option>
                  </select>
            <label >Usuario</label><input type="text" class="form-control input-sm" id="usera">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passa" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emaila">
          
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input type="submit" class="btn btn-primary" href="#" value="Guardar"></input>
          </div>
          </form>
        </div>
      </div>
    </div>
  
  
  
  <!--Modal Modificar-->
  <div class="modal fade" id="modalmodificar"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        <form id="mModificar">
          <div class="modal-body">Selecciona el campo a modificar Acontinuación si está listo para terminar presione guardar.
          <div class="modal-body">
           <input type="hidden" class="form-control input-sm" id="iduseru" name="iduseru" >
            <label>Nombre</label><input type="text" class="form-control input-sm" id="nameu" name="nameu" >
            <label >Teléfono</label><input type="text" class="form-control input-sm" id="phoneu" name="phoneu">
            <label >Cargo</label><input type="text" class="form-control input-sm" id="positionu" >
            <label >Oficina</label>
            <select class='form-control' id="officeu">
                  <option >Siguatepeque</option>
                  <option >Otoro</option>
                  </select>
            <label >Permiso de acceso</label>
            <select class='form-control'id="permitsu">
                  <option >Administrador</option>
                  <option >Cajero</option>
                  </select>
            <label >Estado</label>
            <select class='form-control' id="statusu">
                  <option >Activo</option>
                  <option >Inactivo</option>
                  </select>
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
            <label >Imagen</label><input type="file" class="form-control input-sm" id="imageu">
  
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-success" type="submit" href="#" value="Actualizar"></input>
          </div>
        </form>
  
        </div>
      </div>
    </div>
  
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Listo para irte?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecciona "Salir" Acontinuación si está listo para finalizar la sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="../login/logout.php">Salir</a>
          </div>
        </div>
      </div>
    </div>
  
  
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
  
  </body>
  
  
  </html>




<?php
}else{
include('../Conection/conexion.php');

require("../Conection/config.php");

//$conexion= $base->query("select * from user");
//$registros=$conexion->fetchAll(PDO::FETCH_OBJ);

$registros=$base->query("select * from user")->fetchAll(PDO::FETCH_OBJ);




/*Funcion para desencriptar password */
function desencriptar($texto){
  $key='comixmul2020';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
  $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($texto), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
  return $decrypted;
}





?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistema Control de Activos Comixmul">
  <meta name="author" content="Kevin Rubí">
  <link rel="shortcut icon" href="../img/logo.png" />
  <title>CAS COMIXMUL </title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  <link href="../vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        
        <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Principal</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Maestro
      </div>
       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesActivos" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Activos</span>
        </a>
        <div id="collapsePagesActivos" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Oficinas:</h6>
            <!--<a class="collapse-item" href="login.html">Login</a>-->
            <a class="collapse-item" href="../sigua/activosigua.php">Oficina</a>

            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>



     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesSuministros" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Suministros</span>
        </a>
        <div id="collapsePagesSuministros" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Oficinas:</h6>
            <!--<a class="collapse-item" href="login.html">Login</a>-->
            <a class="collapse-item" href="../sigua/suministrosigua.php">Oficina</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesProveedores" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Proveedores</span>
        </a>
        <div id="collapsePagesProveedores" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Oficinas:</h6>
            <!--<a class="collapse-item" href="login.html">Login</a>-->
            <a class="collapse-item" href="../sigua/proveedoressigua.php">Oficina</a>
            
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesCompras" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Compras</span>
        </a>
        <div id="collapsePagesCompras" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Oficinas:</h6>
            <!--<a class="collapse-item" href="login.html">Login</a>-->
            <a class="collapse-item" href="../comprassigua/comprasigua.php">Oficina</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      

   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesentradas" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Entradas</span>
          </a>
          <div id="collapsePagesentradas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Entradas:</h6>
              <!--<a class="collapse-item" href="login.html">Login</a>-->
              <a class="collapse-item" href="../entrada/entrada.php">Oficina</a>
              
              <div class="collapse-divider"></div>
            </div>
            
          </div>
        </li>      
  
       
  
   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagessalida" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Salida</span>
          </a>
          <div id="collapsePagessalida" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Salida:</h6>
              <!--<a class="collapse-item" href="login.html">Login</a>-->
              <a class="collapse-item" href="../salida/salida.php">Oficina</a>
              
              <div class="collapse-divider"></div>
            </div>
            
          </div>
        </li>      
  
  
     

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Configuración
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Usuarios</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pantallas Usuarios:</h6>
            <!--<a class="collapse-item" href="login.html">Login</a>-->
            <a class="collapse-item" href="../usuarios/users.php">Usuarios</a>
            
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesreportes" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Reportes</span>
        </a>
        <div id="collapsePagesreportes" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones de Reportes:</h6>
            <!--<a class="collapse-item" href="login.html">Login</a>-->
            
            <a class="collapse-item" href="existencias.php">Listado de existencias</a>
            <a class="collapse-item" href="activosdebaja.php">Activos dados de baja</a>
            <a class="collapse-item" href="entrada_compra.php">Entrada por Compras</a>
            <a class="collapse-item" href="entrada_traslado.php">Entrada por Traslado</a>
            <a class="collapse-item" href="salida_compra.php">Salida por Traslado</a>
            <a class="collapse-item" href="valorlibros.php">Listado de valores en libros</a>
            <a class="collapse-item" href="repor_depre.php">Reporte de Depreciación</a>
            

            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="../manual/manual.pdf">
          <i class="fas fa-fw fa-table"></i>
          <span>Ayuda</span></a>
      </li>
<!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

         
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                
            
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Salir</span>
                <!--! <img class="img-profile rounded-circle" src="C:\wamp\www\Activos Comixmul\img\prueba.jpg">-->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>

      <!-- Begin Page Content -->
      <div class="container-fluid">
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Reporte Compras</h1>
<p class="mb-4"><?php echo $_SESSION["nombre"]?></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Ingrese la fecha:</h6>
    <form id="compraboton">
    <div class="row">
    <div class="col-6 col-sm-4" id="compraboton" >
    <input class="form-control bg-light border-1 small" id="fechacompra" required type="text" placeholder="AAAA-MM-DD">
    <label> Seleccione la Oficina</label>
          <select class='form-control' id="officecompra">
                <option >Siguatepeque</option>
                <option >Taulabe</option>
                <option >Otoro</option>
                <option >Nacaome</option>
                <option >Monjaras</option>
                <option >Comayagua</option>
                <option >Choluteca</option>
                <option >Santa Bárbara</option>
                <option >Santa Rosa</option>
                <option >Intibuca</option>
                <option >Progreso</option>
                <option >Marcala</option>
                <option >Gracias</option>
                </select>
          
    </div>
    <div class="" style="border:1px;"><br><br><br>
    <input class='btn btn-primary' type="submit" id="compraboton" value="Generar reporte"></input>        
    
    </div>
    </form>
    </div>



   
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
  
      <!-- Footer -->
      <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Control de Activos y Suministros COMIXMUL es un sistema de control de depreciación de activos de la institución financiera COMIXMUL.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="fab fa-twitter"></i>&nbsp; <a  href="https://twitter.com/kevo_ruxo" target=»_blank»> Kevin Rubí </a></i></li>
                            
                       
                       
                        </ul>
                    </div>
                </div>
            </div>
             <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                      <span>Copyright &copy; Kevin Rubí 2020<span >  |  Control Activos y Suministros COMIXMUL</span></span>
                  </div>
                </div>
              </footer>
        </footer>




      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


<!-- Modal Usuarios-->
<div class="modal fade" id="modalagregar"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bmodal-header-success">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form id="mAgregar">
        <div class="modal-body ">
          <label>Nombre</label><input type="text" class="form-control input-sm" id="namea" >
          <label >Teléfono</label><input type="text" class="form-control input-sm" id="phonea" >
          <label >Cargo</label><input type="text" class="form-control input-sm" id="positiona" >
          <label >Oficina</label>
          <select class='form-control' id="officea">
                <option >Siguatepeque</option>
                <option >Otoro</option>
                </select>
          <label >Permiso de acceso</label>
          <select class='form-control'id="permitsa">
                <option >Administrador</option>
                <option >Contador</option>
                </select>
          <label >Estado</label>
                <select class='form-control' id="statusa">
                <option >Activo</option>
                <option >Inactivo</option>
                </select>
          <label >Usuario</label><input type="text" class="form-control input-sm" id="usera">
          <label >Clave</label><input type="text" class="form-control input-sm" id="passa" >
          <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emaila">
        
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <input type="submit" class="btn btn-primary" href="#" value="Guardar"></input>
        </div>
        </form>
      </div>
    </div>
  </div>



<!--Modal Modificar-->
<div class="modal fade" id="modalmodificar"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      <form id="mModificar">
        <div class="modal-body">Selecciona el campo a modificar Acontinuación si está listo para terminar presione guardar.
        <div class="modal-body">
         <input type="hidden" class="form-control input-sm" id="iduseru" name="iduseru" >
          <label>Nombre</label><input type="text" class="form-control input-sm" id="nameu" name="nameu" >
          <label >Teléfono</label><input type="text" class="form-control input-sm" id="phoneu" name="phoneu">
          <label >Cargo</label><input type="text" class="form-control input-sm" id="positionu" >
          <label >Oficina</label>
          <select class='form-control' id="officeu">
                <option >Siguatepeque</option>
                <option >Otoro</option>
                </select>
          <label >Permiso de acceso</label>
          <select class='form-control'id="permitsu">
                <option >Administrador</option>
                <option >Cajero</option>
                </select>
          <label >Estado</label>
          <select class='form-control' id="statusu">
                <option >Activo</option>
                <option >Inactivo</option>
                </select>
          <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
          <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
          <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          <label >Imagen</label><input type="file" class="form-control input-sm" id="imageu">

        </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <input class="btn btn-success" type="submit" href="#" value="Actualizar"></input>
        </div>
      </form>

      </div>
    </div>
  </div>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Listo para irte?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecciona "Salir" Acontinuación si está listo para finalizar la sesión actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../login/logout.php">Salir</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>
  <script src="funciones.js" type="text/javascript"> </script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>


</html>
<?php

}
?>