<?php
date_default_timezone_set("America/Tegucigalpa");
include('../Conection/conexion.php');

require("../Conection/config.php");

/*Recepción de información*/
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$status = (isset($_POST['status'])) ? $_POST['status'] : "";

$sql="UPDATE activossigua SET descripcion=:myname, ubicacion=:mystatus WHERE Id=:myid";
$resultado=$base->prepare($sql);
$resultado->execute(array(":myid"=>$ide, ":myname"=>$nombre,":mystatus"=>$status,));
header("location:../sigua/suministrosigua.php");

?>