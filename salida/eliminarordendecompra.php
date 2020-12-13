<?php
error_reporting(0);
include("../Conection/conexion.php");

$Id=$_GET['Id'];
$base->query("DELETE FROM tempentrada WHERE codigo_pedido=$Id");
header("location:entrada.php");



?>