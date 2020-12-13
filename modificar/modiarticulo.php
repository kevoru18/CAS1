<?php
date_default_timezone_set("America/Tegucigalpa");
include('../Conection/conexion.php');

require("../Conection/config.php");

/*Recepción de información*/
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$status = (isset($_POST['status'])) ? $_POST['status'] : "";
$vestado= (isset($_POST['vestado'])) ? $_POST['vestado'] : "";
 $familiamodificar= (isset($_POST['familiamodificar'])) ? $_POST['familiamodificar'] : "";
 
if ($familiamodificar=="1") {
    # code...
    
    $familia="Equipos de computo";
  }elseif ($familiamodificar=="2") {
    # code...
    
    $familia="Mobiliario y Equipo";
  }elseif ($familiamodificar=="3"){
    # code...
    
    $familia="Vehiculos terrestres";
  }elseif ($familiamodificar=="4"){
    # code...
    
    $familia="Edificios";
  }else{
    # code...
    
    $familia="Terreno";
  }
$marcamodi= (isset($_POST['marcamodi'])) ? $_POST['marcamodi'] : "";
$modelomodi= (isset($_POST['modelomodi'])) ? $_POST['modelomodi'] : "";
$seriemodi= (isset($_POST['seriemodi'])) ? $_POST['seriemodi'] : "";

$sql="UPDATE activossigua SET descripcion=:myname,familia=:myfamily, ubicacion=:mystatus, marca=:mymarca,
modelo=:mymodelo, serie=:myserie, Estado=:myvestado WHERE Id=:myid";
$resultado=$base->prepare($sql);
$resultado->execute(array(":myid"=>$ide, ":myname"=>$nombre,":myfamily"=>$familia,
":mystatus"=>$status,":mymarca"=>$marcamodi,":mymodelo"=>$modelomodi,":myserie"=>$seriemodi ,":myvestado"=>$vestado));
header("location:../sigua/activossigua.php");

?>