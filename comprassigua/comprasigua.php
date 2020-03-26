<!DOCTYPE html>
<html lang="es">
<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}
include('../Conection/conexion.php');

require("../Conection/config.php");

//$conexion= $base->query("select * from user");
//$registros=$conexion->fetchAll(PDO::FETCH_OBJ);


$registros=$base->query("select distinct codigo_pedido from  temp where estado='Pendiente' order by Id")->fetchAll(PDO::FETCH_OBJ);
$exec1=$base->query("select * from activossigua")->fetchAll(PDO::FETCH_OBJ);
$exec=$base->query("select * from proveedores")->fetchAll(PDO::FETCH_OBJ);

function obtenerNuevoId(){
  include('../Conection/conexion.php');
  $codigonuevaorden=$base->query("SELECT MAX(codigo_pedido)+1 as nuevocodigo FROM temp")->fetchAll(PDO::FETCH_OBJ);    

  $nueva=0;
  foreach ($codigonuevaorden  as $nueva) {
    # code...
    $nuevo=$nueva->nuevocodigo;
    
  }
  
 
 return $nuevo;

}



?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistema Control de Activos Comixmul">
  <meta name="author" content="Kevin Rubí">

  <title>CAS COMIXMUL - Compras Siguatepeque</title>

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
            <a class="collapse-item" href="../sigua/activosigua.php">Siguatepeque</a>
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
            <a class="collapse-item" href="../sigua/suministrosigua.php">Siguatepeque</a>
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
            <a class="collapse-item" href="../sigua/proveedoressigua.php">Siguatepeque</a>
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
            <a class="collapse-item" href="comprasigua.php">Siguatepeque</a>
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
<h1 class="h3 mb-2 text-gray-800">Compras Siguatepeque.</h1>
<p class="mb-4"><?php echo $_SESSION["nombre"]?></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <button id="btnNuevo" type="button" href="#" class="btn btn-success btn-lg active btn btn-sm" data-toggle="modal" >Nueva Orden de Compra <i class="fas fa-plus-circle"></i></button>
  <br><br>
    <h6 class="m-0 font-weight-bold text-primary">Orden de compra en lista</h6>
   
    
  </div>
  
   
  <div class="card-body">
    <div class="table-responsive" id="tablausuarios">
      <table class="table table-bordered" id="tablausuarios" width="100%" cellspacing="0">
        <thead>
          <tr> 
            <th class="text-center"># Pedido</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Monto</th>
            <th class="text-center">Opciones</th>
            
            </tr>
        </thead>
        <tfoot>
          <tr>
          <th class="text-center"># Pedido</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Monto</th>
            <th class="text-center">Opciones</th>
            
          </tr>
        </tfoot>


  <?php

    foreach($registros as $persona):

$factura_pendiente= $persona->codigo_pedido;
$registros1=$base->query("SELECT *, SUM(costoU*cantidad) AS monto FROM temp WHERE codigo_pedido='$factura_pendiente'")->fetchAll(PDO::FETCH_OBJ);  
$monto1=0;
foreach($registros1 as $montoprueba):
  $prueba= $montoprueba-> monto;
  


    ?>
        <tbody>
          <tr>
            <td class="text-center"><?php echo $factura_pendiente;?></td>
            <td class="text-center"><?php echo $montoprueba->estado?></td>
            <td class="text-center"><?php echo $prueba;?></td>
            
            <td class="bot text-center"><a href="eliminarordendecompra.php?Id=<?php echo $montoprueba->codigo_pedido?>" style="margin: 5px;" class="btn btn-secondary btn-xs"><i class="fas fa-ban"></i></a>
            <a type="button"  id="btnEditar"  style="margin: 5px;" class="btn btn-warning btnEditar" data-target= "modalmodificar" data-toggle="modal"> <i class="fas fa-pen"></i></td>
          </tr>
          
        </tbody>
    <?php endforeach; endforeach;?>
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


<!-- Modal OrdenCompra-->
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
          <label>Factura</label><input type="text" value='<?php echo  obtenerNuevoId();?>'  class="form-control" list="factura_pedido" id="factura_pedido1" disabled >
          <label>Proveedor</label>
          <input type="text" class="form-control" list="proveedor" id="proveedorcod" onchange='busca_prov();' >
          <datalist id="proveedor">
          <select name="proveedor" id="proveedor" class="form-control">

          <?php 
               foreach($exec as $fila):
               echo "<option value='".$fila->id_proveedor."'>".$fila->id_proveedor."-".$fila->nombre_p."</option>";
              endforeach;
            ?>

          </select>
          </datalist>
          <label >Nombre</label><input type="text" class="form-control input-sm" id="nombre_prov" disabled>



          
          <label >Código Producto</label>
          <input type="text" class="form-control" list="producto_cod"  id="codproducto" onchange='busca_prod();'>
         
          <datalist id="producto_cod">
          <select name="producto_cod" id="producto_cod" class="form-control">

          <?php 
               foreach($exec1 as $fila1):
               echo "<option value='".$fila1->Id."'>".$fila1->Id."-".$fila1->descripcion."</option>";
              endforeach;
              ?>
          </select>
          </datalist>
          
          <label >Descripción</label><input type="text" class="form-control input-sm" id="descripcionactivo" disabled >
          <label >Costo</label><input type="text" class="form-control input-sm" id="costo" >
          <label >Cantidad</label><input type="text" class="form-control input-sm" id="cantidadpro" >
             
        </div>
        <div class="modal-footer">
        <button class="btn btn-secondary" type="reset" >Agregar Otro Artículo</button>  
          <button class="btn btn-secondary" onclick="cerrarmodal()" type="button">Cancelar</button>
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
        <div class="modal-body">Detalle de Orden de compra.
        <div class="modal-body">
        <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio Unitario</th>
      <th scope="col">Monto</th>
      <th scope="col">Operación</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  

    <?php
    foreach($registros as $factura_pendiente2 ):
      $factura_pendiente3= $factura_pendiente2->codigo_pedido;
      $pendientes=$base->query("SELECT DISTINCT * FROM  temp WHERE estado='Pendiente' AND codigo_pedido= $factura_pendiente3 ORDER BY $factura_pendiente3 ")->fetchAll(PDO::FETCH_OBJ);
      foreach($pendientes as $posibles):
      
    
    ?>
      <th scope="row"><?php echo $posibles-> codigo_pedido?></th>
      <td><?php echo $posibles->descripcion_producto?></td>
      <td><?php echo $posibles->cantidad?></td>
      <td><?php echo $posibles->costoU?></td>
      <td><?php echo $posibles->costo_total?></td>
      
    <tr>
    <?php endforeach;endforeach;?>
    </tr>
    </tr>
    <tr>
    </tr>
  </tbody>
</table>
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


  <script>
  function cerrarmodal(){
  $('#modalagregar').modal('hide');

(function(){
  setInterval(function() {
         document.location.reload()
     }, 
         200)
 })()}
 </script>
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




