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
  # code...


if (isset($_GET["pagina"])) {
  

  if($_GET["pagina"]==1){
    header("Location=../sigua/suminstrosigua.php");

  }else {
    $pagina=$_GET["pagina"];
  }
}else {
  $pagina=1;
}

$mysqli= new mysqli("localhost","root","","suministroscomixmul");
$empiezaen=($pagina-1)*$tamano_pagina;

$registrosactivos="SELECT * FROM activossigua WHERE tipo='Suministro' ";
$resultado=$base->prepare($registrosactivos);
$resultado->execute(array());
$numfila=$resultado->rowCount();
$totalpagina=ceil($numfila/$tamano_pagina);




$salida="";
$registros=$base->query("SELECT * FROM activossigua WHERE tipo='Suministro' LIMIT $empiezaen,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
if (isset($_POST['consulta'])) {
    $q=$mysqli->real_escape_string($_POST['consulta']);
    $registrosactivos="SELECT * FROM activossigua WHERE tipo='Suministro' AND descripcion LIKE '%".$q."%' OR Id LIKE '%".$q."%' OR fecha_ingreso LIKE '%".$q."%'";
}
$resulta = $mysqli->query($registrosactivos);
if ($resulta->num_rows>0 ) {

    
    while($fila = $resulta->fetch_assoc()){
 
     $salida.=" <tr>
        <td>". $fila['Id']."</td>
        
        <td>".$fila['descripcion']."</td>
        
        <td>". $fila['cantidad']."</td>
        <td>".$fila['fecha_ingreso']."</td>
        <td>". $fila['ubicacion']."</td>
        
        <td class='bot'><a type='button'  id='btnEditarsuministro'  style='margin: 5px;' class='btn btn-warning btnEditarsuministro btn-circle' data-target= 'modalmodificar' data-toggle='modal'> <i class='fas fa-pen'></i></td>
      </tr>";
    }

}else {
    $salida.="no hay datos";
  }

echo $salida;
}else {
  
    if (isset($_GET["pagina"])) {
  

      if($_GET["pagina"]==1){
        header("Location=../sigua/suministrosigua.php");

        }else {
          $pagina=$_GET["pagina"];
        }
    }else {
      $pagina=1;
    }

    $mysqli= new mysqli("localhost","root","","suministroscomixmul");
    $empiezaen=($pagina-1)*$tamano_pagina;

    $registrosactivos="SELECT * FROM activossigua WHERE tipo='Suministro' AND oficina= '$oficina' ";
    $resultado=$base->prepare($registrosactivos);
    $resultado->execute(array());
    $numfila=$resultado->rowCount();
    $totalpagina=ceil($numfila/$tamano_pagina);




    $salida="";
    $registros=$base->query("SELECT * FROM activossigua WHERE tipo='Suministro'  LIMIT $empiezaen,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
    if (isset($_POST['consulta'])) {
      $q=$mysqli->real_escape_string($_POST['consulta']);
      $registrosactivos="SELECT * FROM activossigua WHERE oficina ='$oficina' AND tipo='Suministro' AND descripcion LIKE '%".$q."%' OR Id LIKE '%".$q."%' OR fecha_ingreso LIKE '%".$q."%'";
    }
    $resulta = $mysqli->query($registrosactivos);
    if ($resulta->num_rows>0 ) {

    
      while($fila = $resulta->fetch_assoc()){
 
       $salida.=" <tr>
          <td>". $fila['Id']."</td>

          <td>".$fila['descripcion']."</td>
        
          <td>". $fila['cantidad']."</td>
          <td>".$fila['fecha_ingreso']."</td>
        
          <td>". $fila['ubicacion']."</td>
        
          <td class='bot'><a type='button'  id='btnEditarsuministro'  style='margin: 5px;' class='btn btn-warning btnEditarsuministro btn-circle' data-target= 'modalmodificar' data-toggle='modal'> <i class='fas fa-pen'></i></td>
        </tr>";
      }

    }else {
      $salida.="no hay datos";
    }

    echo $salida;
}

?>
 