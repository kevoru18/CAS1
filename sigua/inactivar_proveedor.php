<?php
include("../Conection/conexion.php");

$Id=$_GET['Id'];
$base->query("UPDATE proveedores SET estatus='Inactivo' WHERE id_proveedor=$Id");
header("location:proveedoressigua.php");



?>