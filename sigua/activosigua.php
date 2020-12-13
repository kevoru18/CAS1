<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login/login.php");

}

$usuario=  $_SESSION["usuario"];
$oficina=  $_SESSION["oficina"];
$permiso=  $_SESSION["permits"];
if ($permiso==="Contador") {
  header("location:activos.php");

}else{

  include('../Conection/conexion.php');

  require("../Conection/config.php");
  
  //$conexion= $base->query("select * from user");
  //$registros=$conexion->fetchAll(PDO::FETCH_OBJ);
  
  $registros=$base->query("select * from activossigua")->fetchAll(PDO::FETCH_OBJ);
  
  
  
  
  
  ?>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Control de Activos Comixmul">
    <meta name="author" content="Kevin Rubí">
    <link rel="shortcut icon" href="../img/logo.png" />
  
    <title>CAS COMIXMUL - Activos Siguatepeque</title>
  
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
              <a class="collapse-item" href="activosigua.php">Oficina</a>
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
              <a class="collapse-item" href="suministrosigua.php">Oficina</a>
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
              <a class="collapse-item" href="proveedoressigua.php">Oficina</a>
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
              <h6 class="collapse-header">Opciones Usuarios:</h6>
              <!--<a class="collapse-item" href="login.html">Login</a>-->
              <a class="collapse-item" href="../usuarios/users.php">Usuarios</a>
           
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>
        <!-- Nav Item - Tables -->
       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesreportes" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Reportes</span>
        </a>
        <div id="collapsePagesreportes" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones de Reportes:</h6>
            <!--<a class="collapse-item" href="login.html">Login</a>-->
            
            <a class="collapse-item" href="../reportes/existencias.php">Listado de existencias</a>
            <a class="collapse-item" href="../reportes/activosdebaja.php">Activos dados de baja</a>
            <a class="collapse-item" href="../reportes/entrada_compra.php">Entrada por Compras</a>
            <a class="collapse-item" href="../reportes/entrada_traslado.php">Entrada por Traslado</a>
            <a class="collapse-item" href="../reportes/salida_compra.php">Salida por Traslado</a>
            <a class="collapse-item" href="../reportes/valorlibros.php">Listado de valores en libros</a>
            <a class="collapse-item" href="../reportes/repor_depre.php">Reporte de Depreciación</a>
            

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
  <h1 class="h3 mb-2 text-gray-800">Activos Siguatepeque.</h1>
  <p class="mb-4"><?php echo $_SESSION["nombre"]?></p>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabla de Activos</h6>
      <button id="btnNuevo" type="button" href="#" class="btn btn-success btn-lg active btn btn-sm" data-toggle="modal" >Agregar Activo <i class="fas fa-plus-circle"></i></button>
      <button id="btnDepreciacion" type="button" href="#" class="btn btn-secondary btn-lg active btn btn-sm" data-toggle="modal" >Generar Depreciación <i class="fas fa-plus-circle"></i></button>
    </div>
    
     
    <div class="card-body">
      <div class="table-responsive" id="tablausuarios">
        <table class="table table-bordered" id="tablausuarios" width="100%" cellspacing="0">
          <thead>
          <form id="busquedaform">
          <div class="row">
            <div class="col">
            
            </div>
            
            <div class="col">
             
              <input type="text"  class="form-control guardado"autocomplete="off" style=""  list="busqueda" id="busquedaproducto"  placeholder="Ingrese el nombre del producto a buscar..." ><br>
              
            
            </div>
            
          </div>
        </form >    
        
            <tr> 
              <th>Código</th>
              <th>Descripción</th>
              <th>Cantidad</th>
              <th>Fecha Ingreso</th>
              <th>Fecha Retiro</th>
              <th>Valor en libros</th>
              <th>Valor Actual</th>
              <th>Depreciación mensual</th>
              <th>Depreciación Acumulada</th>
              <th>Vida Útil</th>
              <th>Valor Residual</th>
              <th>Ubicación</th>
              <th>Familia</th>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Serie</th><th>Estado</th>
              <th>Opciones</th>
              
            </tr>
          </thead>
          <tfoot>
            <tr>
             
            <th>Código</th>
              <th>Descripción</th>
              <th>Cantidad</th>
              <th>Fecha Ingreso</th>
              <th>Fecha Retiro</th>
              <th>Valor en libros</th>
              <th>Valor Actual</th>
              
              <th>Depreciación mensual</th>
              <th>Depreciación Acumulada</th>
              <th>Vida Útil</th>
              <th>Valor Residual</th>
              <th>Ubicación</th>
              <th>Familia</th>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Serie</th>
              <th>Estado</th>
              <th>Opciones</th>
              
            </tr>
          </tfoot>
  
      <tbody id="datos">
            
          </tbody>
      
        </table>
      </div>
    </div>
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
            <label>Descripción</label><input type="text" required autocomplete="off" class="form-control input-sm" id="namea" >
            <label >Valor en libros</label><input type="text" required autocomplete="off" class="form-control input-sm" id="phonea" >
            <label >Ubicación</label><input type="text" required autocomplete="off" class="form-control input-sm" id="positiona" >
            <label >Familia de activo</label>
            <select class='form-control' id="officea">
                <option value="1">Equipos de computo</option>
                <option value="2">Mobiliario y Equipo</option>
                <option value="3">Vehiculos terrestres</option>
                <option value="4">Edificios</option>
                <option value="5">Terreno</option>
            </select>               
            <label >Vida Útil(años)</label><input type="text"  autocomplete="off" class="form-control input-sm" id="vidautil" >
            <label >Marca</label><input type="text"  class="form-control input-sm" autocomplete="off" id="marca" >
            <label >Modelo</label><input type="text"  class="form-control input-sm" autocomplete="off" id="modelo" >
            <label >Serie</label><input type="text"  class="form-control input-sm" id="serie" autocomplete="off" >
          </div>
          

          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input type="submit" class="btn btn-primary" href="#" value="Guardar"></input>
          </div>
          </form>
        </div>
      </div>
    </div>
  
  
  <!-- Modal Depreciación-->
  <div class="modal fade" id="modaDepreciacion"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bmodal-header-success">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form id="mDepreciar">
          
          <label style="background-color:#1a8750; color:white;">Detalle del proceso</label>
          
          <div class="row">
            <div class="modal-body col-sm-8">
              <label>Mes</label>
                <?php
                  $fecha=date("Y-m-d");
                ?>
              <input type="text" name="fechadepre" required class="" id="fechadepre" disabled value=<?php echo $fecha;?>><br>             
              <br>             
              <div class="row">
                <div class="col-12">
                  <label style="background-color:#1a8750; color:white;">Base del calculo</label></div></div>
                  <input type="radio" required name="opdepre" class="" id="phonea" value="todos" required><label > Depreciar todos los activos</label><br>             
                </div>
                <div class="modal-body col-sm-4">
                  <table style="border-colapse:collapse; border:#1a8750 5px solid;">
                    <tr><td><th>
                      <p>En esta sección se generara la depreciación de los activos existentes.</p>
                    </th></td></tr>
                  </table>        
                </div>
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
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bmodal-header-success">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
             </button>
          </div>
        <form id="mModificar">
          
           
            <div class="row">
              <div class="modal-body col-sm-4">
                        <input type="hidden" class="form-control input-sm" id="iduseru" name="iduseru" >
                        <label>Descripción</label><input type="text" class="form-control input-sm" id="nameu" name="nameu" >
                        <label>Ubicación</label><input type="text" class="form-control input-sm" id="statusu" name="statusu" >
                        <label>Valor en Libros</label><input type="text" disabled class="form-control input-sm" id="Vlibros" name="Vlibros" >
                        <label>Valor Actual</label><input type="text" disabled class="form-control input-sm" id="Vactual" name="Vactual" >
                  <br>
                </div>
                <div class="modal-body col-sm-4">
                        
                        <label>Depreciación Actual</label><input  disabled type="text" class="form-control input-sm" id="depreactual" name="depreactual" >
                        <label>Depreciación Acumulada</label><input  disabled type="text" class="form-control input-sm" id="depreacumu" name="depreacumu" >
                        <label>Vida Útil</label><input  disabled type="text" class="form-control input-sm" id="vidautilmodi" name="vidautil" >
                        <label>Valor Residual</label><input disabled type="text" class="form-control input-sm" id="vresidual" name="vresidual" >
                        <label>Estado</label><select class='form-control' id="vestado">
                <option >Activo</option>
                <option >Inactivo</option>
                </select>
                  <br>
                </div>
                <div class="modal-body col-sm-4">
                        
                        <label>Familia</label><select  class='form-control'disabled id="familiamodificar">
                                                  <option value="1">Equipos de computo</option>
                                                  <option value="2">Mobiliario y Equipo</option>
                                                  <option value="3">Vehiculos terrestres</option>
                                                  <option value="4">Edificios</option>
                                                  <option value="5">Terreno</option>
                                                </select>               
                        <label>Marca</label><input type="text" class="form-control input-sm" id="marcamodi" name="marcamodi" >
                        <label>Modelo</label><input type="text" class="form-control input-sm" id="modelomodi" name="modelomodi" >
                        <label>Serie</label><input type="text" class="form-control input-sm" id="seriemodi" name="seriemodi" >
                  <br>
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
    <script src="../js/cas/funciones.js" type="text/javascript"> </script>
    <script src="../js/cas/busqueda.js" type="text/javascript"> </script>
  
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