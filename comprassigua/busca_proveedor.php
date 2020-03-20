<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}
include('../Conection/conexion.php');

require("../Conection/config.php");
require("../Conection/conec.php");




$codigo=$_POST['codigoprov'];
$cadena="select p.nombre_p from proveedores p where p.id_proveedor='$codigo'";
$exe=mysqli_query($db,$cadena);
 if(mysqli_num_rows($exe)>0){
   $array=array();
    while($re=mysqli_fetch_array($exe)){
      $array=$re;
    }
    echo json_encode($array);
 }else{
      echo "0";
 }



?>