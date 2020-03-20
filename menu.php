<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistema Control de Activos Comixmul">
  <meta name="author" content="Kevin Rubí">

  <title>CAS COMIXMUL</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>
<style>
.contenedorimg{
  width: 50%;
  border:  2px #000;
  display: block; 
  margin-left: auto;
  margin-right: auto;

  
}

.contenedorimg2{
    width: 30%;
    border-radius: 200px 200px 200px 200px;
    -moz-border-radius: 200px 200px 200px 200px;
    -webkit-border-radius: 200px 200px 200px 200px;
    
    
    
    
  }
</style>


<?php




//$conexion= $base->query("select * from user");
//$registros=$conexion->fetchAll(PDO::FETCH_OBJ);

$registros=$base->query("select * from user")->fetchAll(PDO::FETCH_OBJ);



function menuad(){

?>



<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        
        <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
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
            <a class="collapse-item" href="sigua/activosigua.php">Siguatepeque</a>
            <a class="collapse-item" href="taulabe/activotaulaadm.php">Taulabe</a>
            <a class="collapse-item" href="#">Otoro</a>
            <a class="collapse-item" href="#">Nacaome</a>
            <a class="collapse-item" href="#">Monjaras</a>
            <a class="collapse-item" href="#">Comayagua</a>
            <a class="collapse-item" href="#">Choluteca</a>
            <a class="collapse-item" href="#">Santa Barbara</a>
            <a class="collapse-item" href="#">Santa Rosa de Copán</a>
            <a class="collapse-item" href="#">Intibucá</a>
            <a class="collapse-item" href="#">Progreso</a>
            <a class="collapse-item" href="#">Marcala</a>
            <a class="collapse-item" href="#">Gracias Lempira</a>
            <a class="collapse-item" href="#">SEMESUR</a>
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
            <a class="collapse-item" href="sigua/suministrosigua.php">Siguatepeque</a>
            <a class="collapse-item" href="taulabe/suministrotaulaadm.php">Taulabe</a>
            <a class="collapse-item" href="#">Otoro</a>
            <a class="collapse-item" href="#">Nacaome</a>
            <a class="collapse-item" href="#">Monjaras</a>
            <a class="collapse-item" href="#">Comayagua</a>
            <a class="collapse-item" href="#">Choluteca</a>
            <a class="collapse-item" href="#">Santa Barbara</a>
            <a class="collapse-item" href="#">Santa Rosa de Copán</a>
            <a class="collapse-item" href="#">Intibucá</a>
            <a class="collapse-item" href="#">Progreso</a>
            <a class="collapse-item" href="#">Marcala</a>
            <a class="collapse-item" href="#">Gracias Lempira</a>
            <a class="collapse-item" href="#">SEMESUR</a>
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
            <a class="collapse-item" href="sigua/proveedoressigua.php">Siguatepeque</a>
            <a class="collapse-item" href="taulabe/proveedortaulaadm.php">Taulabe</a>
            <a class="collapse-item" href="#">Otoro</a>
            <a class="collapse-item" href="#">Nacaome</a>
            <a class="collapse-item" href="#">Monjaras</a>
            <a class="collapse-item" href="#">Comayagua</a>
            <a class="collapse-item" href="#">Choluteca</a>
            <a class="collapse-item" href="#">Santa Barbara</a>
            <a class="collapse-item" href="#">Santa Rosa de Copán</a>
            <a class="collapse-item" href="#">Intibucá</a>
            <a class="collapse-item" href="#">Progreso</a>
            <a class="collapse-item" href="#">Marcala</a>
            <a class="collapse-item" href="#">Gracias Lempira</a>
            <a class="collapse-item" href="#">SEMESUR</a>
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
            <h6 class="collapse-header">Compras:</h6>
            <!--<a class="collapse-item" href="login.html">Login</a>-->
            <a class="collapse-item" href="comprassigua/comprasigua.php">Siguatepeque</a>
            <a class="collapse-item" href="comprastaula/comprataulaadm.php">Taulabe</a>
            <a class="collapse-item" href="#">Otoro</a>
            <a class="collapse-item" href="#">Nacaome</a>
            <a class="collapse-item" href="#">Monjaras</a>
            <a class="collapse-item" href="#">Comayagua</a>
            <a class="collapse-item" href="#">Choluteca</a>
            <a class="collapse-item" href="#">Santa Barbara</a>
            <a class="collapse-item" href="#">Santa Rosa de Copán</a>
            <a class="collapse-item" href="#">Intibucá</a>
            <a class="collapse-item" href="#">Progreso</a>
            <a class="collapse-item" href="#">Marcala</a>
            <a class="collapse-item" href="#">Gracias Lempira</a>
            <a class="collapse-item" href="#">SEMESUR</a>
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
            <a class="collapse-item" href="comprassigua/comprasigua.php">Siguatepeque</a>
            <a class="collapse-item" href="comprastaula/comprataulaadm.php">Taulabe</a>
            <a class="collapse-item" href="#">Otoro</a>
            <a class="collapse-item" href="#">Nacaome</a>
            <a class="collapse-item" href="#">Monjaras</a>
            <a class="collapse-item" href="#">Comayagua</a>
            <a class="collapse-item" href="#">Choluteca</a>
            <a class="collapse-item" href="#">Santa Barbara</a>
            <a class="collapse-item" href="#">Santa Rosa de Copán</a>
            <a class="collapse-item" href="#">Intibucá</a>
            <a class="collapse-item" href="#">Progreso</a>
            <a class="collapse-item" href="#">Marcala</a>
            <a class="collapse-item" href="#">Gracias Lempira</a>
            <a class="collapse-item" href="#">SEMESUR</a>
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
            <h6 class="collapse-header">Opciones Usuarios:</h6>
            <!--<a class="collapse-item" href="login.html">Login</a>-->
            <a class="collapse-item" href="usuarios/users.php">Usuarios</a>
            <a class="collapse-item" href="forgot-password.php">Olvido de Password</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

         
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                
            
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
             <!--<img class="img-profile rounded-circle" src="img/prueba.jpg">-->
  
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
          <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
          <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
          <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
          <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
          <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
          <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
          <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
          <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
          <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
        </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
          <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
  <script src="funciones.js" type="text/javascript"> </script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>
<?php
}

function menuotoro(){
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
  
    <title>CAS COMIXMUL</title>
  
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <style>
  .contenedorimg{
    width: 50%;
    border:  2px #000;
    display: block; 
    margin-left: auto;
    margin-right: auto;
  
    
  }


  </style>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="taulabe/activootoro.php">Otoro</a>
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
              
              <a class="collapse-item" href="taulabe/suministrootoro.php">Otoro</a>
              
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
              <a class="collapse-item" href="taulabe/proveedoresotoro.php">Otoro</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>
</html>
<?php
}







function menutaula(){

  ?>
    <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="taulabe/activotaula.php">Taulabe</a>
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
              
              <a class="collapse-item" href="taulabe/suministrotaula.php">Taulabe</a>
              
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
              <a class="collapse-item" href="taulabe/proveedorestaula.php">Taulabe</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>
  
</html>
<?php
  }


function menunacaome(){
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
  
    <title>CAS COMIXMUL</title>
  
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <style>
  .contenedorimg{
    width: 50%;
    border:  2px #000;
    display: block; 
    margin-left: auto;
    margin-right: auto;
  
    
  }
  </style>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="nacaome/activotnacaome.php">Nacaome</a>
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
              
              <a class="collapse-item" href="nacaome/suministronacaome.php">Nacaome</a>
              
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
              <a class="collapse-item" href="nacaome/proveedoresnacaome.php">Nacaome</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>

</html>
<?php
}








function menumonjaras(){
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
  
    <title>CAS COMIXMUL</title>
  
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <style>
  .contenedorimg{
    width: 50%;
    border:  2px #000;
    display: block; 
    margin-left: auto;
    margin-right: auto;
  
    
  }
  </style>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="monjaras/activomonjaras.php">Monjaras</a>
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
              
              <a class="collapse-item" href="monjaras/suministromonjaras.php">Monjaras</a>
              
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
              <a class="collapse-item" href="monjaras/proveedoresmonjaras.php">Monjaras</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>
  

<?php
}


function menucomayagua(){
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
  
    <title>CAS COMIXMUL</title>
  
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <style>
  .contenedorimg{
    width: 50%;
    border:  2px #000;
    display: block; 
    margin-left: auto;
    margin-right: auto;
  
    
  }
  </style>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="comayagua/activocomayagua.php">Comayagua</a>
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
              
              <a class="collapse-item" href="comayagua/suministrocomayagua.php">Comayagua</a>
              
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
              <a class="collapse-item" href="comayagua/proveedorescomayagua.php">Comayagua</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>
  
  <?php
    }
  
function menucholu(){
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
  
    <title>CAS COMIXMUL</title>
  
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <style>
  .contenedorimg{
    width: 50%;
    border:  2px #000;
    display: block; 
    margin-left: auto;
    margin-right: auto;
  
    
  }
  </style>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="cholu/activocholu.php">Choluteca</a>
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
              
              <a class="collapse-item" href="cholu/suministrocholu.php">Choluteca</a>
              
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
              <a class="collapse-item" href="cholu/proveedorescholu.php">Choluteca</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>

<?php
}


function menuSB(){
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
  
    <title>CAS COMIXMUL</title>
  
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <style>
  .contenedorimg{
    width: 50%;
    border:  2px #000;
    display: block; 
    margin-left: auto;
    margin-right: auto;
  
    
  }
  </style>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="sb/activotsb.php">Santa Bárbara</a>
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
              
              <a class="collapse-item" href="sb/suministrosb.php">Santa Bárbara</a>
              
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
              <a class="collapse-item" href="sb/proveedoressb.php">Santa Bárbara</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>
    
  
<?php
}
function menuSR(){
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
  
    <title>CAS COMIXMUL</title>
  
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <style>
  .contenedorimg{
    width: 50%;
    border:  2px #000;
    display: block; 
    margin-left: auto;
    margin-right: auto;
  
    
  }
  </style>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="sr/activosr.php">Santa Rosa</a>
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
              
              <a class="collapse-item" href="sr/suministrosr.php">Santa Rosa</a>
              
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
              <a class="collapse-item" href="sr/proveedoressr.php">Santa Rosa</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>
    
<?php
}

function menuintibuca(){
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
  
    <title>CAS COMIXMUL</title>
  
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <style>
  .contenedorimg{
    width: 50%;
    border:  2px #000;
    display: block; 
    margin-left: auto;
    margin-right: auto;
  
    
  }
  </style>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="taulabe/activotaula.php">Taulabe</a>
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
              
              <a class="collapse-item" href="intibuca/suministrointibuca.php">Intibucá</a>
              
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
              <a class="collapse-item" href="intibuca/proveedoresintibuca.php">Intibucá</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>
      
<?php
}

function menuprogre(){
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
  
    <title>CAS COMIXMUL</title>
  
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <style>
  .contenedorimg{
    width: 50%;
    border:  2px #000;
    display: block; 
    margin-left: auto;
    margin-right: auto;
  
    
  }
  </style>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="progre/activoprogre.php">Progreso</a>
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
              
              <a class="collapse-item" href="progre/suministroprogre.php">Progreso</a>
              
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
              <a class="collapse-item" href="progre/proveedoresprogre.php">Progreso</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>
          
        
<?php
}

function menumarca(){
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
  
    <title>CAS COMIXMUL</title>
  
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <style>
  .contenedorimg{
    width: 50%;
    border:  2px #000;
    display: block; 
    margin-left: auto;
    margin-right: auto;
  
    
  }
  </style>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="marca/activomarca.php">Marcala</a>
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
              
              <a class="collapse-item" href="marca/suministromarca.php">Marcala</a>
              
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
              <a class="collapse-item" href="marca/proveedoresmarca.php">Marcala</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>      
          
<?php
}

       
       
       
function menugracias(){
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
  
    <title>CAS COMIXMUL</title>
  
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <style>
  .contenedorimg{
    width: 50%;
    border:  2px #000;
    display: block; 
    margin-left: auto;
    margin-right: auto;
  
    
  }
  </style>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="gracias/activogracias.php">Gracias</a>
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
              
              <a class="collapse-item" href="gracias/suministrogracias.php">Gracias</a>
              
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
              <a class="collapse-item" href="gracias/proveedoresgracias.php">Gracias</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>            
            
<?php
}



       
       
function menuSEMESUR(){
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
  
    <title>CAS COMIXMUL</title>
  
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
  
  </head>
  
  <style>
  .contenedorimg{
    width: 50%;
    border:  2px #000;
    display: block; 
    margin-left: auto;
    margin-right: auto;
  
    
  }
  </style>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          
          <div class="sidebar-brand-text mx-3">CAS COMIXMUL</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
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
              <a class="collapse-item" href="semesur/activosemesur.php">SEMESUR</a>
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
              
              <a class="collapse-item" href="semesur/suministrosemesur.php">SEMESUR</a>
              
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
              <a class="collapse-item" href="semesur/proveedoressemesur.php">SEMESUR</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        
  
       
        <!-- Divider -->
        <hr class="sidebar-divider">
         <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
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
                <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]?></span>
                  <img class="img-profile rounded-circle" src="img/prueba.jpg">
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officea" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsa" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusa" >
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
            <label >Oficina</label><input type="text" class="form-control input-sm" id="officeu" >
            <label >Permiso de acceso</label><input type="text" class="form-control input-sm" id="permitsu" >
            <label >Estado</label><input type="text" class="form-control input-sm" id="statusu" >
            <label >Usuario</label><input type="text" class="form-control input-sm" id="useru">
            <label >Clave</label><input type="text" class="form-control input-sm" id="passu" >
            <label >Correo Electronico</label><input type="text" class="form-control input-sm" id="emailu">
          </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-warning" type="submit" href="#" value="Actualizar"></input>
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
            <a class="btn btn-primary" href="login/logout.php">Salir</a>
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
    <script src="funciones.js" type="text/javascript"> </script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  
  </body>

<?php
}




?>
