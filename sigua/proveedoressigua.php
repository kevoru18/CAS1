<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}
include('../Conection/conexion.php');

require("../Conection/config.php");

//$conexion= $base->query("select * from user");
//$registros=$conexion->fetchAll(PDO::FETCH_OBJ);

$registros=$base->query("select * from proveedores")->fetchAll(PDO::FETCH_OBJ);





?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistema Control de Activos Comixmul">
  <meta name="author" content="Kevin Rubí">

  <title>CAS COMIXMUL - Proveedores Siguatepeque</title>

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
            <a class="collapse-item" href="activosigua.php">Siguatepeque</a>
            <a class="collapse-item" href="../taulabe/activotaulaadm.php">Taulabe</a>
            <a class="collapse-item" href="../otoro/activootoroadm.php">Otoro</a>
            <a class="collapse-item" href="../nacaome/activonacaomeadm.php">Nacaome</a>
            <a class="collapse-item" href="../monjaras/activomonjarasadm.php">Monjaras</a>
            <a class="collapse-item" href="../coma/activocomaadm.php">Comayagua</a>
            <a class="collapse-item" href="../cholu/activocholuadm.php">Choluteca</a>
            <a class="collapse-item" href="../sb/activosbadm.php">Santa Barbara</a>
            <a class="collapse-item" href="../sr/activosradm.php">Santa Rosa de Copán</a>
            <a class="collapse-item" href="../inti/activointiadm.php">Intibucá</a>
            <a class="collapse-item" href="../progre/activoprogreadm.php">Progreso</a>
            <a class="collapse-item" href="../marcala/activomarcalaadm.php">Marcala</a>
            <a class="collapse-item" href="../lp/activolpadm.php">Gracias Lempira</a>
            <a class="collapse-item" href="../semesur/activosemesuradm.php">SEMESUR</a>
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
            <a class="collapse-item" href="suministrosigua.php">Siguatepeque</a>
            <a class="collapse-item" href="../taulabe/suministrotaulaadm.php">Taulabe</a>
            <a class="collapse-item" href="../otoro/suministrootoroadm.php">Otoro</a>
            <a class="collapse-item" href="../nacaome/suministronacaomeadm.php">Nacaome</a>
            <a class="collapse-item" href="../monjaras/suministromonjarasadm.php">Monjaras</a>
            <a class="collapse-item" href="../coma/suministrocomaadm.php">Comayagua</a>
            <a class="collapse-item" href="../cholu/suministrocholuadm.php">Choluteca</a>
            <a class="collapse-item" href="../sb/suministrosbadm.php">Santa Barbara</a>
            <a class="collapse-item" href="../sr/suministrosradm.php">Santa Rosa de Copán</a>
            <a class="collapse-item" href="../inti/suministrointiadm.php">Intibucá</a>
            <a class="collapse-item" href="../progre/suministroprogreadm.php">Progreso</a>
            <a class="collapse-item" href="../marcala/suministromarcalaadm.php">Marcala</a>
            <a class="collapse-item" href="../lp/suministrolpadm.php">Gracias Lempira</a>
            <a class="collapse-item" href="../semesur/suministrosemesuradm.php">SEMESUR</a>
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
            <a class="collapse-item" href="proveedoressigua.php">Siguatepeque</a>
            <a class="collapse-item" href="../taulabe/proveedortaulaadm.php">Taulabe</a>
            <a class="collapse-item" href="../otoro/proveedorotoroadm.php">Otoro</a>
            <a class="collapse-item" href="../nacaome/proveedornacaomeadm.php">Nacaome</a>
            <a class="collapse-item" href="../monjaras/proveedormonjarasadm.php">Monjaras</a>
            <a class="collapse-item" href="../coma/proveedorcomaadm.php">Comayagua</a>
            <a class="collapse-item" href="../cholu/proveedorcholuadm.php">Choluteca</a>
            <a class="collapse-item" href="../sb/proveedorsbadm.php">Santa Barbara</a>
            <a class="collapse-item" href="../sr/proveedorsradm.php">Santa Rosa de Copán</a>
            <a class="collapse-item" href="../inti/proveedorintiadm.php">Intibucá</a>
            <a class="collapse-item" href="../progre/proveedorprogreadm.php">Progreso</a>
            <a class="collapse-item" href="../marcala/proveedormarcalaadm.php">Marcala</a>
            <a class="collapse-item" href="../lp/proveedorlpadm.php">Gracias Lempira</a>
            <a class="collapse-item" href="../semesur/proveedorsemesuradm.php">SEMESUR</a>
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
            <a class="collapse-item" href="../comprassigua/comprasigua.php">Siguatepeque</a>
            <a class="collapse-item" href="../comprastaula/comprataulaadm.php">Taulabe</a>
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
            <a class="collapse-item" href="entradas/entradasigua.php">Siguatepeque</a>
            <a class="collapse-item" href="entradastaula/entradataulaadm.php">Taulabe</a>
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
            <a class="collapse-item" href="../usuarios/users.php">Usuarios</a>
            <a class="collapse-item" href="../forgot-password.php">Olvido de Password</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="../tables.html">
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
                <button class="btn btn-success" type="button">
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
<h1 class="h3 mb-2 text-gray-800">Proveedores Siguatepeque.</h1>
<p class="mb-4"><?php echo $_SESSION["nombre"]?></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabla de Proveedores</h6>
    <button id="btnNuevo" type="button" href="#" class="btn btn-success btn-lg active btn btn-sm" data-toggle="modal" >Agregar Proveedor <i class="fas fa-plus-circle"></i></button>
    
  </div>
  
   
  <div class="card-body">
    <div class="table-responsive" id="tablausuarios">
      <table class="table table-bordered" id="tablausuarios" width="100%" cellspacing="0">
        <thead>
          <tr> 
            <th>Código</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Empresa</th>
             <th>RTN</th>
             <th>Estado</th>
             <th>Opciones</th>
             
          </tr>
        </thead>
        <tfoot>
          <tr>
           
          <th>Código</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Empresa</th>
            <th>RTN</th>
            <th>Estado</th>
            
            

             <th>Opciones</th>
          </tr>
        </tfoot>


  <?php
    foreach($registros as $persona):
      
      

    ?>
        <tbody>
          <tr>
            <td><?php echo $persona->id_proveedor?></td>
            <td><?php echo $persona->nombre_p?></td>
            <td><?php echo $persona->telefono_p?></td>
            <td><?php echo $persona->direccion_p?></td>
            
            <td><?php echo $persona->empresa?></td>
            <td><?php echo $persona->rtn?></td>
            <td><?php echo $persona->estatus?></td>

            
            <td class="bot"><a href="inactivar_proveedor.php?Id=<?php echo $persona->id_proveedor?>" style="margin: 5px;" class="btn btn-secondary btn-xs"><i class="fas fa-ban"></i></a>
            <a type="button"  id="btnEditar"  style="margin: 5px;" class="btn btn-warning btnEditar" data-target= "modalmodificar" data-toggle="modal"> <i class="fas fa-pen"></i></td>
          </tr>
          
        </tbody>
    <?php endforeach;?>
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
                            <li><i class="fa fa-copyright"></i>&nbsp; <a  href="https://twitter.com/kevo_ruxo" target=»_blank»> Kevin Rubí </a></i></li>
                            
                       
                       
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
          <label >Dirección</label><input type="text" class="form-control input-sm" id="positiona" >
          <label >Empresa</label><input type="text" class="form-control input-sm" id="officea" >
          <label >RTN</label><input type="text" class="form-control input-sm" id="emaila">
          <label >Estado</label><input type="text" class="form-control input-sm" id="statusa">
            
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
          <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      <form id="mModificar">
        <div class="modal-body">Selecciona el campo a modificar Acontinuación si está listo para terminar presione Actualizar.
        <div class="modal-body">
        <input type="hidden" class="form-control input-sm" id="iduseru" name="iduseru" >
          <label>Nombre</label><input type="text" class="form-control input-sm" id="nameu" name="nameu" >
          <label >Teléfono</label><input type="text" class="form-control input-sm" id="phoneu" name="phoneu">
          <label >Dirección</label><input type="text" class="form-control input-sm" id="positionu" >
          <label >Empresa</label><input type="text" class="form-control input-sm" id="officeu" >
          <label >RTN</label><input type="text" class="form-control input-sm" id="permitsu" >
          <label >Estado</label>
          <select class='form-control' id="statusu">
                <option >Activo</option>
                <option >Inactivo</option>
                </select>
        
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
  <script src="funciones.js" type="text/javascript"> </script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>
