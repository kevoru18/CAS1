<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="img/logo.png" />
<?php
include('Conection/conexion.php');

require("Conection/config.php");

session_start();
if(!isset($_SESSION["usuario"])){
  header("location:login.html");

}
require("menu.php");

if ($_SESSION['permits']=='Administrador') {

  menuad();
}
if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='Taulabe') {

  menutaula();
}

if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='Otoro') {

  menuotoro();
}
if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='Nacaome') {

  menunacaome();
}

if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='Mojaras') {

  menumonjaras();
}
if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='Comayagua') {

  menucomayagua();
}
if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='Choluteca') {

  menucholu();
}
if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='Santa Barbara') {

  menuSB();
}
if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='Santa Rosa') {

  menuSR();
}
if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='Intibuca') {

  menuintibuca();
}
if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='Progreso') {

  menuprogre();
}
if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='Marcala') {

  menumarca();
}
if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='Gracias') {

  menugracias();
}
if ($_SESSION['permits']=='Contador' && $_SESSION['oficina']=='SEMESUR') {

  menuSEMESUR();
}

?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Bienvenido a Control de Activos y Suministros COMIXMUL</h1>
<p class="mb-4"><?php echo $_SESSION["nombre"]?></p>



  
   
  <div class="card-body">
    <div class="table-responsive" id="Principal">
      <div class="contenedorimg">
      <img class="img-fluid" src="img/log2d.png" alt="">
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




</html>