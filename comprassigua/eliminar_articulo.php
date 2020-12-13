<?php
include("../Conection/conexion.php");

$Id=$_GET['Id'];
$Cant=$_GET['Cant'];
$codfa=$_GET['Codifacact'];
$comid=$_GET['comid'];
$base->query("UPDATE orden_pedido SET estado='Eliminado'
 WHERE cod_producto=$Id AND cantidad=$Cant AND num_factura=$codfa AND id_compra=$comid");
header("location:comprasigua.php");



?>