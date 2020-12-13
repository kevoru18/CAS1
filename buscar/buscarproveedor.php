<?php

session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}
include('../Conection/conexion.php');

require("../Conection/config.php");
require("../Conection/conec.php");
$tamano_pagina=5;
$pagina=1;
$usuario=$_SESSION["usuario"];
$oficina=$_SESSION["oficina"];
if ($oficina=="Siguatepeque") {


    if (isset($_GET["pagina"])) {
  

      if($_GET["pagina"]==1){
        header("Location=../sigua/proveedoressigua.php");

      }else {
        $pagina=$_GET["pagina"];
      }
    }else {
      $pagina=1;
    }

    $mysqli= new mysqli("localhost","root","","suministroscomixmul");
    $empiezaen=($pagina-1)*$tamano_pagina;

    $registrosactivos="SELECT * FROM proveedores  ";
    $resultado=$base->prepare($registrosactivos);
    $resultado->execute(array());
    $numfila=$resultado->rowCount();
    $totalpagina=ceil($numfila/$tamano_pagina);




    $salida="";
    $registros=$base->query("SELECT * FROM proveedores  LIMIT $empiezaen,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
    if (isset($_POST['consulta'])) {
      $q=$mysqli->real_escape_string($_POST['consulta']);
      $registrosactivos="SELECT * FROM proveedores WHERE estatus='Activo' AND nombre_p LIKE '%".$q."%' OR empresa LIKE '%".$q."%' OR telefono_p LIKE '%".$q."%' OR direccion_p LIKE '%".$q."%'";
    }
    $resulta = $mysqli->query($registrosactivos);
    if ($resulta->num_rows>0 ) {

    
      while($fila = $resulta->fetch_assoc()){
 
        $salida.=" <tr>
          <td>". $fila['id_proveedor']."</td>
        
          <td>".$fila['nombre_p']."</td>
          <td>".$fila['telefono_p']."</td>
        
        
          <td>".$fila['direccion_p']."</td>
        
          <td>". $fila['empresa']."</td>
          <td>". $fila['rtn']."</td>
          <td>". $fila['estatus']."</td>
        
          <td class='bot'><a type='button'  id='btnEditarproveedor'  style='margin: 5px;' class='btn btn-warning btnEditarproveedor  btn-circle' data-target= 'modalmodificarproveedor' data-toggle='modal'> <i class='fas fa-pen'></i></td>
        </tr>";
      }

    }else {
      $salida.="no hay datos";
    }
    echo $salida;
  }else {
    if (isset($_GET["pagina"])) {
  

      if($_GET["pagina"]==1){
        header("Location=../sigua/proveedoressigua.php");

      }else {
        $pagina=$_GET["pagina"];
      }
    }else {
      $pagina=1;
    }

    $mysqli= new mysqli("localhost","root","","suministroscomixmul");
    $empiezaen=($pagina-1)*$tamano_pagina;

    $registrosactivos="SELECT * FROM proveedores WHERE oficina= '$oficina' ";
    $resultado=$base->prepare($registrosactivos);
    $resultado->execute(array());
    $numfila=$resultado->rowCount();
    $totalpagina=ceil($numfila/$tamano_pagina);




    $salida="";
    $registros=$base->query("SELECT * FROM proveedores  WHERE oficina= '$oficina' LIMIT $empiezaen,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
    if (isset($_POST['consulta'])) {
      $q=$mysqli->real_escape_string($_POST['consulta']);
      $registrosactivos="SELECT * FROM proveedores WHERE oficina= '$oficina' AND estatus='Activo' AND nombre_p LIKE '%".$q."%' OR empresa LIKE '%".$q."%' OR telefono_p LIKE '%".$q."%' OR direccion_p LIKE '%".$q."%'";
    }
    $resulta = $mysqli->query($registrosactivos);
    if ($resulta->num_rows>0 ) {

    
      while($fila = $resulta->fetch_assoc()){
 
        $salida.=" <tr>
          <td>". $fila['id_proveedor']."</td>
        
          <td>".$fila['nombre_p']."</td>
          <td>".$fila['telefono_p']."</td>
        
        
          <td>".$fila['direccion_p']."</td>
        
          <td>". $fila['empresa']."</td>
          <td>". $fila['rtn']."</td>
          <td>". $fila['estatus']."</td>
        
          <td class='bot'><a type='button'  id='btnEditarproveedor'  style='margin: 5px;' class='btn btn-warning btnEditarproveedor  btn-circle' data-target= 'modalmodificarproveedor' data-toggle='modal'> <i class='fas fa-pen'></i></td>
        </tr>";
      }

    }else {
      $salida.="no hay datos";
    }
    echo $salida;
  }

?>
 













