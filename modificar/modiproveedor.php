<?php
date_default_timezone_set("America/Tegucigalpa");
session_start();
if(!isset($_SESSION["usuario"])){
  header("location:../login.html");

}
$usuario=$_SESSION["usuario"];
$oficina=$_SESSION["oficina"];


include('../Conection/conexion.php');

require("../Conection/config.php");

/*Recepción de información*/
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";//nombre
$phone = (isset($_POST['phone'])) ? $_POST['phone'] : "";//telefono
$position = (isset($_POST['position'])) ? $_POST['position'] : "";//direccion
$office = (isset($_POST['officeu'])) ? $_POST['officeu'] : "";//empresa
$permits = (isset($_POST['permitsu'])) ? $_POST['permitsu'] : "";//rtn
$status = (isset($_POST['status'])) ? $_POST['status'] : "";//estado
$fecha=date('Y-m-d');
echo ($ide);
$sql="UPDATE proveedores SET rtn=:mypermits, nombre_p=:myname,  direccion_p=:myposition, telefono_p=:myphone, empresa=:myoffice, 
 estatus=:mystatus, id_usuario_modi=:userid, fecha_modi=:fechamodi WHERE id_proveedor=:myid";
$resultado=$base->prepare($sql);
$resultado->execute(array(":myid"=>$ide, ":mypermits"=>$permits,":myname"=>$nombre,":myphone"=>$phone,":myposition"=>$position,
    ":myoffice"=>$office,":mystatus"=>$status,":userid"=>$usuario, ":fechamodi"=>$fecha));
header("location:../sigua/proveedoressigua.php");

?>