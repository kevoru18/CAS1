<?php
include('../Conection/conexion.php');
require("../Conection/config.php");

/*Recepción de información*/

$factura= (isset($_POST['descripcion_art'])) ? $_POST['descripcion_art'] : "";
$codigo= (isset($_POST['cod'])) ? $_POST['cod'] : "";
$cantidad= (isset($_POST['can'])) ? $_POST['can'] : "";
$precio=(isset($_POST['monto'])) ? $_POST['monto'] : ""; 


$actualizada="UPDATE temp SET cantidad= :cantidad, costo_total= :sub
 WHERE codigo_pedido=:factura AND codigo_producto=:codigo";

$actualizo=$base->prepare($actualizada);
$actualizo->execute(array(":cantidad"=>$cantidad,":sub"=>$precio, ":factura"=>$factura, ":codigo"=>$codigo));




?>
