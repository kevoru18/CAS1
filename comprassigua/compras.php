<!DOCTYPE html>
<html lang="es">
<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}

$usuario=  $_SESSION["usuario"];
$oficina=  $_SESSION["oficina"];
$permiso=  $_SESSION["permits"];
if ($permiso==="Administrador") {
  header("location:comprasigua.php");

}else{

include('../Conection/conexion.php');

require("../Conection/config.php");

//$conexion= $base->query("select * from user");
//$registros=$conexion->fetchAll(PDO::FETCH_OBJ);


$registros=$base->query("SELECT DISTINCT codigo_pedido FROM  temp WHERE estado='Pendiente' AND oficina='$oficina' order by Id")->fetchAll(PDO::FETCH_OBJ);
$PreProcesada=$base->query("SELECT DISTINCT num_factura FROM  orden_pedido WHERE estado='Pendiente' AND oficina='$oficina' order by id_compra")->fetchAll(PDO::FETCH_OBJ);
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
  <link rel="shortcut icon" href="../img/logo.png" />

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
            <a class="collapse-item" href="../sigua/activos.php">Oficina</a>
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
            <a class="collapse-item" href="../sigua/suministros.php">Oficina</a>
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
            <a class="collapse-item" href="../sigua/proveedores.php">Oficina</a>
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
            <a class="collapse-item" href="compras.php">Oficina</a>
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
            <a class="collapse-item" href="../entrada/entradaoficina.php">Oficina</a>
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
              <a class="collapse-item" href="../salida/salidaoficina.php">Oficina</a>
              
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
<!-- Nav Item - Tables --><li class="nav-item">
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
      </li><!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="../manual/manual.pdf">
          <i class="fas fa-fw fa-table"></i>
          <span>Ayuda</span></a>
      </li>
<!-- Divider -->      <hr class="sidebar-divider d-none d-md-block">

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
<h1 class="h3 mb-2 text-gray-800">Compras</h1>
<p class="mb-4"><?php echo $_SESSION["nombre"]?></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <button id="btnNuevo" type="button" href="#" class="btn btn-success btn-lg active btn btn-sm" title="Nueva orden de compra" data-toggle="modal" >Nueva Orden de Compra <i class="fas fa-plus-circle"></i></button>
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
            <th class="text-center">Oficina</th>
            <th class="text-center">Opciones</th>
            
            </tr>
        </thead>
        <tfoot>
          <tr>
          <th class="text-center"># Pedido</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Monto</th>
            <th class="text-center">Oficina</th>
            <th class="text-center">Opciones</th>
            
          </tr>
        </tfoot>


  <?php

    foreach($registros as $persona):

$factura_pendiente= $persona->codigo_pedido;
$registros1=$base->query("SELECT *, SUM(costoU*cantidad) AS monto FROM temp WHERE codigo_pedido='$factura_pendiente' AND oficina='$oficina'")->fetchAll(PDO::FETCH_OBJ);  
$monto1=0;
foreach($registros1 as $montoprueba):
  $prueba= $montoprueba-> monto;
  


    ?>
        <tbody>
          <tr>
            <td class="text-center"><?php echo $factura_pendiente;?></td>
            <td class="text-center"><?php echo $montoprueba->estado?></td>
            <td class="text-center"><?php echo $prueba;?></td>
            <td class="text-center"><?php echo $montoprueba->oficina?></td>
            
            <td class="bot text-center"><a href="eliminarordendecompra.php?Id=<?php echo $montoprueba->codigo_pedido?>" style="margin: 5px;" class="btn btn-secondary btn-xs"><i class="fas fa-ban"></i></a>
            <a type="button"  id="btnEditartemp"  style="margin: 5px;" class="btn btn-warning btnEditartemp" data-target= "modalmodificar" data-toggle="modal"> <i class="fas fa-pen"></i></td>
          </tr>
          
        </tbody>
    <?php endforeach; endforeach;?>
      </table>
    </div>
  </div>
</div>

</div>
<!-- DataTales Example 2 -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  
    <h6 class="m-0 font-weight-bold text-primary">Orden de compra Procesada</h6>
   
    
  </div>
  
   
  <div class="card-body">
    <div class="table-responsive" id="tablausuarios">
      <table class="table table-bordered" id="tablausuarios" width="100%" cellspacing="0">
        <thead>
          <tr> 
            <th class="text-center"># Pedido</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Monto</th>
            <th class="text-center">Oficina</th>
            <th class="text-center">Opciones</th>
            
            </tr>
        </thead>
        <tfoot>
          <tr>
          <th class="text-center"># Pedido</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Monto</th>
            <th class="text-center">Oficina</th>
            <th class="text-center">Opciones</th>
            
          </tr>
        </tfoot>


  <?php

    foreach($PreProcesada as $persona):

$factura_pendiente= $persona->num_factura;
$registros1=$base->query("SELECT * , SUM(costo*cantidad) AS monto FROM orden_pedido WHERE num_factura='$factura_pendiente' AND estado='Pendiente' AND oficina='$oficina'")->fetchAll(PDO::FETCH_OBJ);  
$monto1=0;
foreach($registros1 as $montoprueba):
  $prueba= $montoprueba-> monto;
  


    ?>
        <tbody>
          <tr>
            <td class="text-center"><?php echo $factura_pendiente;?></td>
            <td class="text-center"><?php echo $montoprueba->estado?></td>
            <td class="text-center"><?php echo $prueba?></td>
            <td class="text-center"><?php echo $montoprueba->oficina?></td>
            
            <td class="bot text-center">
            <a type="button"  id="btnEditarpedido"  title="Ver orden de compra" style="margin: 5px;" class="btn btn-warning btnEditarpedido" data-target= "modalcomprar" data-toggle="modal"> <i class="fas fa-pen"></i></td>
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
          <input type="text" class="form-control" required list="proveedor" id="proveedorcod" autocomplete="off" onchange='busca_prov();' >
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
          <input type="text" class="form-control guardado" required list="producto_cod"  autocomplete="off" id="codproducto" onchange='busca_prod();'>
         
          <datalist id="producto_cod">
          <select name="producto_cod" id="producto_cod" class="form-control">

          <?php 
               foreach($exec1 as $fila1):
               echo "<option value='".$fila1->Id."'>".$fila1->Id."-".$fila1->descripcion."</option>";
              endforeach;
              ?>
          </select>
          </datalist>
          
          <label >Descripción</label><input type="text" required class="form-control input-sm guardado" id="descripcionactivo" disabled >
          <label >Costo</label><input type="text" autocomplete="off" required class="form-control input-sm guardado" id="costo" >
          <label >Cantidad</label><input type="text" autocomplete="off" required class="form-control input-sm guardado" id="cantidadpro" >
             
        </div>
        <div class="modal-footer">
        
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
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form id="mModificar">
          <div class="modal-body pruebass">
          <div class="modal-body detalle_de_pedido" id='detalle_de_pedido'>
          </div>
        </div>
        
        <div class="modal-footer" id="footer-modificar">
        <input class="btn btn-warning" type="button" href="#" onclick="" id="btn-producto1" value="+ Producto"></input>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <input class="btn btn-warning" type="submit" href="#" onclick="" id='btn-procesa' value="Procesar"></input>
        </div>
      </form>

      </div>
    </div>
  </div>



<!-- Modal +Producto-->

<div class="modal fade" id="modalagregarproductomas"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bmodal-header-success">
          <h5 class="modal-title-mas" id="exampleModalLabel">Agregar más Producto</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form id="mAgregarproducto">
        <div class="modal-body ">
          <label>Factura #</label><input type="text" value=''  disabled class="form-control" list="factura_pedido" id="factura_pedidomas1" disabled >
          <label>Proveedor</label>
          <input type="text" class="form-control" list="proveedor" id="proveedorcodmas" onchange='' disabled>
          <datalist id="proveedor">
          <select name="proveedor" id="proveedormas" class="form-control">

          <?php 
               foreach($exec as $fila):
               echo "<option value='".$fila->id_proveedor."'>".$fila->id_proveedor."-".$fila->nombre_p."</option>";
              endforeach;
            ?>

          </select>
          </datalist>
          <label >Nombre</label><input type="text" class="form-control input-sm " id="nombre_provmas" disabled>



          
          <label >Código Producto</label>
          <input type="text" focus class="form-control guardado"  list="producto_codmas" autocomplete="off" id="codproductomas" onchange='busca_prodmas();'>
         
          <datalist id="producto_codmas">
          <select name="producto_codmas" id="producto_codmas" class="form-control">

          <?php 
               foreach($exec1 as $fila1):
               echo "<option value='".$fila1->Id."'>".$fila1->Id."-".$fila1->descripcion."</option>";
              endforeach;
              ?>
          </select>
          </datalist>
          
          <label >Descripción</label><input type="text" class="form-control input-sm guardado" id="descripcionactivomas" disabled >
          <label >Costo</label><input type="text" class="form-control input-sm guardado" id="costomas" >
          <label >Cantidad</label><input type="text" autocomplete="off" class="form-control input-sm guardado" id="cantidadpromas" >
             
        </div>
        <div class="modal-footer">
        
          <button class="btn btn-secondary" type="button" data-dismiss="" onclick="refrescarmodal(); abremodal();">Cancelar</button>
          <input type="submit" id="productomas" onclick="" class="btn btn-primary" href="#" value="Guardar"></input>
          
		
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

<!--Opciones de imprimir-->
<div class="modal" id="ModalImprimir"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title-imprimir" id="exampleModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form id="mImprimir">
          
            <input type="hidden" id="fact" name="fact" class="factura">
            <input type="hidden" id="codigo_pedido" name="codigo_pedido" class="codigo_pedido1">
            <input type="hidden" id="cantidad_pedido" name="cantidad_pedido" class="cantidad_pedido1">
            <input type="hidden" id="monto_pedido" name="monto_pedido" class="monto_pedido1">
        
        <div class="modal-footer" id="footer-imprimir">
        
        

          <button class="btn btn-secondary" type="button" id="cancel-no" data-dismiss="modal">No</button>
          <input class="btn btn-warning" type="submit" href="#" onclick="" id='btn-procesa-si' value="Si"></input>
        </div>
      </form>

      </div>
    </div>
  </div>


<!--Modal Compra-->
<div class="modal fade" id="modalcompra"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form id="mCompra">
          <div class="modal-body compraprueba">
          <div class="modal-body detalle_de_pedido" id='detalle_de_pedido'>
          </div>
        </div>
        
        <div class="modal-footer" id="footer-modificar">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <input class="btn btn-warning" type="submit" href="#" onclick="" id='btn-procesacompra' value="Procesar"></input>
        </div>
      </form>

      </div>
    </div>
  </div>


<!--Opciones de imprimir-->
<div class="modal" id="ModalImprimircompra"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title-imprimir" id="exampleModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form id="mImprimircompra">
          
            <input type="hidden" id="factcompra" name="factcompra" class="factura">
        <div class="modal-footer" id="footer-imprimir">
        
        

          <button class="btn btn-secondary" type="button" id="cancel-no" data-dismiss="modal">No</button>
          <input class="btn btn-warning" type="submit" href="#" onclick="" id='btn-procesa-si' value="Si"></input>
        </div>
      </form>

      </div>
    </div>
  </div>







  <script>
  function cerrarmodal(){
  $('#modalagregar').modal('hide');
  $('#modalmodificar').modal('hide');
  $('#ModalImprimir').modal('hide');

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









<script>
  function cerrarmodal(){
  $('#modalagregar').modal('hide');
  $('#ModalImprimir').modal('hide');
  $('#modalagregarproducto').modal('hide');
(function(){
  setInterval(function() {
         document.location.reload()
     }, 
         200)
 })()}

 function refrescarmodal(){
  idfact=$.trim($("#factura_pedidomas").val());
  $('#modalagregarproducto').modal('hide');
  $('#modalmodificar').modal('hide');
  

  (function(){
  setInterval(function() {
         document.location.reload()
     }, 
         200)
 })()
/* alert(idfact);*/
}



 
 </script>





<?php
}
?>