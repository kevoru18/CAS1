<?php
include('../Conection/conexion.php');

require("../Conection/config.php");
echo "Estas a punto de modificar un archivo";
/*Recepción de información*/
$ide = (isset($_POST['ide'])) ? $_POST['ide'] : "";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$phone = (isset($_POST['phone'])) ? $_POST['phone'] : "";
$position = (isset($_POST['position'])) ? $_POST['position'] : "";
$office = (isset($_POST['office'])) ? $_POST['office'] : "";
$permits = (isset($_POST['permits'])) ? $_POST['permits'] : "";
$status = (isset($_POST['status'])) ? $_POST['status'] : "";
echo ($ide);
$sql="UPDATE proveedores SET rtn=:mypermits, nombre_p=:myname,  direccion_p=:myposition, telefono_p=:myphone, empresa=:myoffice, 
 estatus=:mystatus WHERE id_proveedor=:myid";
$resultado=$base->prepare($sql);
$resultado->execute(array(":myid"=>$ide, ":mypermits"=>$permits,":myname"=>$nombre,":myphone"=>$phone,":myposition"=>$position,
    ":myoffice"=>$office,":mystatus"=>$status,));
header("location:proveedoressigua.php");

?>